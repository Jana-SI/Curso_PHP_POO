<?php

    require_once "Mamifero.php";

    class Canguru extends Mamifero{
        public function usarBolsa(){
            echo "<p><span class='foco'>Usando bolsa<span></p>";
        }

        public function locomover(){
            echo "<p><span class='foco'>Saltando<span></p>";
        }
    }

?>
