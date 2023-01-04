<?php

abstract class Pessoa{

    // atributo
    private $nome, $idade, $sexo;

    // metodos especiais
    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getIdade(){
        return $this->idade;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function getSexo(){
        return $this->sexo;
    }

    function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public final function fazerAniv() {
        $this->setIdade($this->getNome() + 1);
    }
}

?>
