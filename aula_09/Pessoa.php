<?php

class Pessoa {

    // atributos
    private $nome, $idade, $sexo;

    // metodos
    public function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
    }

    //construtor
    function __construct($nome, $idade, $sexo){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    // metodos especiais
    function setNome($nome){
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function getIdade(){
        return $this->idade;
    }

    function setSexo($sexo){
        $this->sexo = $sexo;
    }

    function getSexo(){
        return $this->sexo;
    }
}
?>
