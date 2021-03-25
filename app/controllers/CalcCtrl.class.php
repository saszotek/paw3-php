<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl{
    private $form;
    private $result;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->x = getFromRequest('x');
        $this->form->y = getFromRequest('y');
        $this->form->z = getFromRequest('z');
    }

    public function validate(){
        if(!(isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) return false;

        if($this->form->x == "") getMessages()->addError('Nie podano kwoty');
        if($this->form->y == "") getMessages()->addError('Nie podano lat');
        if($this->form->z == "") getMessages()->addError('Nie podano oprocentowania');

        if(!getMessages()->isError()){
            if(!is_numeric($this->form->x)) getMessages()->addError('Kwota nie jest liczbą całkowitą');
            if(!is_numeric($this->form->y)) getMessages()->addError('Lata nie są liczbą całkowitą');
            if(!is_numeric($this->form->z)) getMessages()->addError('Oprocentowanie nie jest liczbą');
        }

        return !(getMessages()->isError());
    }

    public function process(){
        global $role;

        $this->getParams();

        if($this->validate()){
            $this->form->x = intval($this->form->x);
            $this->form->y = intval($this->form->y);
            $this->form->z = floatval($this->form->z);

            getMessages()->addInfo('Parametry przekazane');

            $this->form->y *= 12;
            $this->form->z *= 0.01;

            // if($role == 'admin'){
            //     $result = (($x * $z) + $x) / $y;
            // }
        
            // if($role == 'user'){
            //     $result = (($x * $z) + $x) / $y;
            // }

            $this->result->result = (($this->form->x * $this->form->z) + $this->form->x) / $this->form->y;

            getMessages()->addInfo('Wykonano obliczenia');
        }

        $this->generateView();
    }

    public function generateView(){
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');
        getSmarty()->assign('page_header', 'Razem wyliczymy każdą ratę');
        getSmarty()->assign('form_header', 'Kalkulator kredytowy, czyli problem z głowy');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('calc.tpl');
    }
}