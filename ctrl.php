<?php
require_once 'init.php';

// $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action){
    default:
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->generateView();
    break;
    case 'calcCompute':
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->process();
    break;
}