<?php

abstract class Animal {

    protected $peso, $idade, $membros;

    function getPeso() {
        return $this->peso;
    }

    function setPeso( $peso ) {
        $this->peso = $peso;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdade( $idade ) {
        $this->idade = $idade;
    }

    function getMembros() {
        return $this->membros;
    }

    function setMembros( $membros ) {
        $this->membros = $membros;
    }

    abstract public function emitirSom();
}
?>
