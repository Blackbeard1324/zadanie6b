<?php

namespace app\controllers;


use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl
{
    private $form;
    private $result;

    public function __construct()
    {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function process()
    {

        $this->getParams();

        if ($this->validate()) {
            $this->form->kwota = floatval($this->form->kwota);
            $this->form->lata = intval($this->form->lata);
            $this->form->procent = floatval($this->form->procent);

            $this->result->rata = $this->form->kwota / ($this->form->lata * 12);
            $this->result->result = $this->result->rata + ($this->result->rata * ($this->form->procent / 100));
        }
        $this->generateView();
    }

    public function getParams()
    {
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
        $this->form->procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
    }

    public function validate()
    {

        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->procent))) {

            return false;
        }

        if ($this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty pożyczki');
        }
        if ($this->form->lata == "") {
            getMessages()->addError('Nie podano lat spłacania pożyczki');
        }
        if ($this->form->procent == "") {
            getMessages()->addError('Nie podano procentu kredytu');
        }

        if (!getMessages()->isError()) {

            if (!is_numeric($this->form->kwota)) {
                getMessages()->addError('Kwota nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->lata)) {
                getMessages()->addError('Podany okres czasu nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->procent)) {
                getMessages()->addError('Podane oprocentowanie nie jest liczbą całkowitą');
            }
        }
        if (getMessages()->isError()) return false;
        return true;
    }


    public function generateView()
    {

        getSmarty()->assign('res', $this->result);
        getSmarty()->assign('form', $this->form);


        getSmarty()->display('calc.tpl');
    }

}