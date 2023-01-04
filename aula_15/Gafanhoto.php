<?php

require_once "Pessoa.php";

class Gafanhoto extends Pessoa{

    private $login, $totAssistindo;

    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin($login);
        $this->setTotAssistindo(0);
    }

    public function ImprimirG(){
        echo "<p><span class='foco'>Nome</span>: {$this->getNome()}
            <br><span class='foco'>Idade</span>: {$this->getIdade()}
            <br><span class='foco'>Sexo</span>: {$this->getSexo()}
            <br><span class='foco'>Login</span>: {$this->getLogin()}</p>";
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
