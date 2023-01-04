<?php

require_once "Pessoa.php";
require_once "interfacePessoa.php";
require_once "interfaceFuncionario.php";

class Funcionario extends Pessoa implements interfacePessoa, interfaceFuncionario{
    // atributo
    private $setor, $trabalhando;

    // metodos
    public function mudarTrabalho(){
        $this->setTrabalhando(!$this->getTrabalhando());
    }

    //construtor
    public function __construct($nome, $idade, $sexo, $setor, $trabalhando){

        parent::__construct($nome, $idade, $sexo);
        $this->setSetor($setor);
        $this->setTrabalhando($trabalhando);

    }

    // metodos especiais
    public function getSetor(){
        return $this->setor;
    }

    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function getTrabalhando(){
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }
}
?>
