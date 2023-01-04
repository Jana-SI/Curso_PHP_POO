<?php

require_once "Pessoa.php";

class Professor extends Pessoa{
    //atributos
    private $especialidade, $salario;

    //metodo
    public function receberAumento($aumento) {

        $this->setSalario($this->getSalario() + $aumento);

    }

    // metodo especiais
    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }
}
?>
