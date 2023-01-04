<?php

require_once "interfacePessoa.php";

class Pessoa implements interfacePessoa{

    // atributos
    private $nome, $idade, $sexo;

    //metodo
    public function fazerAniv() {
        $this->setIdade($this->getIdade() + 1);
    }

    //construtor
    public function __construct($nome, $idade, $sexo){

        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);

    }

    //metodos especiais
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
}
?>
