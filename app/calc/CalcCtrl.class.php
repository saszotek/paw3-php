<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';
// include $conf->root_path.'/app/security/check.php';

class CalcCtrl{
    private $msgs;
    private $form;
    private $result;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
        $this->form->y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
        $this->form->z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
    }

    public function validate(){
        if(!(isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) return false;

        if($this->form->x == "") $this->msgs->addError('Nie podano kwoty');
        if($this->form->y == "") $this->msgs->addError('Nie podano lat');
        if($this->form->z == "") $this->msgs->addError('Nie podano oprocentowania');

        if(!$this->msgs->isError()){
            if(!is_numeric($this->form->x)) $this->msgs->addError('Kwota nie jest liczbą całkowitą');
            if(!is_numeric($this->form->y)) $this->msgs->addError('Lata nie są liczbą całkowitą');
            if(!is_numeric($this->form->z)) $this->msgs->addError('Oprocentowanie nie jest liczbą');
        }

        return !($this->msgs->isError());
    }

    public function process(){
        global $role;

        $this->getParams();

        if($this->validate()){
            $this->form->x = intval($this->form->x);
            $this->form->y = intval($this->form->y);
            $this->form->z = floatval($this->form->z);

            $this->msgs->addInfo('Parametry przekazane');

            $this->form->y *= 12;
            $this->form->z *= 0.01;

            // if($role == 'admin'){
            //     $result = (($x * $z) + $x) / $y;
            // }
        
            // if($role == 'user'){
            //     $result = (($x * $z) + $x) / $y;
            // }

            $this->result->result = (($this->form->x * $this->form->z) + $this->form->x) / $this->form->y;

            $this->msgs->addInfo('Wykonano obliczenia');
        }

        $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('page_title', 'Kalkulator kredytowy');
        $smarty->assign('page_header', 'Razem wyliczymy każdą ratę');
        $smarty->assign('form_header', 'Kalkulator kredytowy, czyli problem z głowy');

        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);

        $smarty->display($conf->root_path.'/app/calc/calc.tpl');
    }
}