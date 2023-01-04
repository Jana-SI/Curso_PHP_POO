<?php

require_once "Pessoa.php";

class Gafanhoto extends Pessoa{

    private $login, $totAssistindo;

    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin($login);
        $this->setTotAssistindo(0);
    }

    public function assistirMaisUm() {
        $this->totAssistindo ++;
    }

    function getLogin(){
        return $this->login;
    }

    function setLogin($login){
        $this->login = $login;
    }

    function getTotAssistindo(){
        return $this->totAssistindo;
    }

    function setTotAssistindo($totAssistindo){
        $this->totAssistindo = $totAssistindo;
    }
}
?>
