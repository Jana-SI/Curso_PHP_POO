<?php

require_once "Animal.php";

class Reptil extends Animal {
    private $corEscama;

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama( $corEscama ) {
        $this->corEscama = $corEscama;
    }

    public function locomover() {
        echo "<p><span class='foco'>Rastejando<span></p>";
    }

    public function alimentar() {
        echo "<p><span class='foco'>Comendo Vegetais<span></p>";
    }

    public function emitirSom() {
        echo "<p><span class='foco'>Som de Réptil<span></p>";
    }
}
?>
