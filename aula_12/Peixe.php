<?php

require_once "Animal.php";

class peixe extends Animal {
    private $corEscama;

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama( $corEscama ) {
        $this->corEscama = $corEscama;
    }

    public function locomover() {
        echo "<p><span class='foco'>Nadando<span></p>";
    }

    public function alimentar() {
        echo "<p><span class='foco'>Comendo substâncias<span></p>";
    }

    public function emitirSom() {
        echo "<p><span class='foco'>Peixe não faz som<span></p>";
    }

    public function soltarBolha() {
        echo "<p><span class='foco'>Soltou um bolha<span></p>";
    }
}
?>
