<?php
require_once "Animal.php";

class Mamifero extends Animal {
    private $corPelo;

    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo( $corPelo ) {
        $this->corPelo = $corPelo;
    }

    public function locomover() {
        echo "<p><span class='foco'>Correndo</span</p>";
    }

    public function alimentar() {
        echo "<p><span class='foco'>Mamando</span</p>";
    }

    public function emitirSom() {
        echo "<p><span class='foco'>Som de Mamífero</span</p>";
    }
}
?>
