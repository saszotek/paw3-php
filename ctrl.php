<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');
getRouter()->addRoute('calcShow', 'CalcCtrl', ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl', ['user','admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user','admin']);
getRouter()->go();

// switch ($action){
//     default:
//         $ctrl = new app\controllers\CalcCtrl();
//         $ctrl->generateView();
//     break;
//     case 'calcCompute':
//         $ctrl = new app\controllers\CalcCtrl();
//         $ctrl->process();
//     break;
// }