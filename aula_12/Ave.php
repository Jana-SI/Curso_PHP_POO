<?php

require_once "Animal.php";

class Ave extends Animal {
    private $corPena;

    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena( $corPena ) {
        $this->corPena = $corPena;
    }

    public function locomover() {
        echo "<p><span class='foco'>Voando<span></p>";
    }

    public function alimentar() {
        echo "<p><span class='foco'>Comendo frutas<span></p>";
    }

    public function emitirSom() {
        echo "<p><span class='foco'>Som de ave<span></p>";
    }

    public function fazerNinho() {
        echo "<p><span class='foco'>Construiu um ninho<span></p>";
    }
}
?>
