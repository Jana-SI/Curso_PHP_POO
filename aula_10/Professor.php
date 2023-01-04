<?php

require_once "Pessoa.php";
require_once "interfacePessoa.php";
require_once "interfaceProfessor.php";

class Professor extends Pessoa implements interfacePessoa, interfaceProfessor{
    //atributos
    private $especialidade, $salario;

    //metodo
    public function receberAumento($aumento) {

        $this->setSalario($this->getSalario() + $aumento);

    }

    //construtor
    public function Professor($nome, $idade, $sexo, $especialidade, $salario){

        parent::__construct($nome, $idade, $sexo);
        $this->setEspecialidade($especialidade);
        $this->setSalario($salario);

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
