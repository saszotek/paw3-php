<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$x, &$y, &$z){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;	
}

function validate(&$x, &$y, &$z, &$messages, &$infos){
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
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}	

	if(count($messages) != 0){
		return false;
	}else {
		return true;
	}
}

function process(&$x, &$y, &$z, &$messages, &$infos, &$result){
	$infos [] = 'Przekazano parametry';
	$infos [] = 'Obliczenia są wykonywane';

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
$yHelp = null;
$zHelp = null;
$result = null;
$messages = array();
$infos = array();

getParams($x, $y, $z);

if(validate($x, $y, $z, $messages, $infos)){
	process($x, $y, $z, $messages, $infos, $result);
}

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('app_root', _APP_ROOT);
$smarty->assign('page_title', 'Kalkulator kredytowy');
$smarty->assign('page_header', 'Razem wyliczymy każdą ratę');
$smarty->assign('form_header', 'Kalkulator kredytowy, czyli problem z głowy');

$smarty->assign('x', $x);
$smarty->assign('y', $y);
$smarty->assign('z', $z);
$smarty->assign('yHelp', $yHelp);
$smarty->assign('zHelp', $zHelp);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos', $infos);

$smarty->display(_ROOT_PATH.'/app/calc.tpl');