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

    public function action_calcCompute(){
        $this->getParams();

        if($this->validate()){
            $this->form->x = intval($this->form->x);
            $this->form->y = intval($this->form->y);
            $this->form->z = floatval($this->form->z);

            getMessages()->addInfo('Parametry przekazane');

            $this->form->y *= 12;
            $this->form->z *= 0.01;

            $this->result->result = (($this->form->x * $this->form->z) + $this->form->x) / $this->form->y;

            getMessages()->addInfo('Wykonano obliczenia');

            try{
                $database = new \Medoo\Medoo([
                    'database_type' => 'mysql',
                    'database_name' => 'kalk',
                    'server' => 'localhost',
                    'username' => 'root',
                    'password' => '',
                    'charset' => 'utf8',
                    'collation' => 'utf8_polish_ci',
                    'port' => 3306,
                    'option' => [
                        \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                    ]
                ]);

                $database->insert("wynik", [
                    "kwota" => $this->form->x,
                    "lat" => $this->form->y,
                    "procent" => $this->form->z,
                    "rata" => $this->result->result,
                    "data" => date("Y-m-d H:i:s")
                ]);
            }catch(\PDOException $ex){
                getMessages()->addError("DB Error: ".$ex->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_calcShow(){
        getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
    }

    public function generateView(){
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');
        getSmarty()->assign('page_header', 'Razem wyliczymy każdą ratę');
        getSmarty()->assign('form_header', 'Kalkulator kredytowy, czyli problem z głowy');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('calc.tpl');
    }
}