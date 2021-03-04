<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x, &$y, &$z){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;	
}

function validate(&$x, &$y, &$z, &$messages){
	if(! (isset($x) && isset($y) && isset($z))){
		return false;
	}

	if($x == ""){
		$messages [] = 'Nie podano kwoty';
	}

	if($y == "") {
		$messages [] = 'Nie podano lat';
	}

	if($z == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	if(count($messages) != 0){
		return false;
	}
	
	if(! is_numeric($x)){
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if(! is_numeric($y)){
		$messages [] = 'Lata nie są liczbą całkowitą';
	}
	
	if(! is_numeric($z)){
		$messages [] = 'Oprocentowanie nie jest całkowitą';
	}	

	if(count($messages) != 0){
		return false;
	}else {
		return true;
	}
}

function process(&$x, &$y, &$z, &$messages,&$result){
	global $role;
	
	$x = intval($x);
	$y = intval($y);
	$z = floatval($z);

	$yHelp = $y;
	$zHelp = $z;
	
	$y = $y * 12;
    $z = $z * 0.01;

    if($role == 'admin'){
        $result = (($x * $z) + $x) / $y;
    }

    if($role == 'user'){
        $result = (($x * $z) + $x) / $y;
    }
}

$x = null;
$y = null;
$z = null;
$result = null;
$messages = array();

getParams($x, $y, $z);

if(validate($x, $y, $z, $messages)){
	process($x, $y, $z, $messages, $result);
}

include 'calc_view.php';