<?php
require_once "Animal.php";

class Mamifero extends Animal {
    protected $corPelo;

    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo( $corPelo ) {
        $this->corPelo = $corPelo;
    }

    public function emitirSom() {
        echo "<p><span class='foco'>Som de Mamífero</span</p>";
    }
}
?>
