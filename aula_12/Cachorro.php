<?php

require_once "Lobo.php";

class Cachorro extends Lobo {
    public function reagir( $frase ) {
        if ( $fase == "comida" || $frase == "Oi" ) {
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }

    public function reagir( $hora, $min ) {
        if ( $hora < 12 ) {
            echo "<p>Abanar</p>";
        } elseif ( $hora >= 18 ) {
            echo "Ignorar";
        } else {
            echo "Abanar e Latir";
        }
    }

    public function reagir ( $dono ) {
        if ( $dono == true ) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }

    public function reagir( $idade, $peso ) {
        if ( $idade < 5 ) {
            if ( $peso < 10 ) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else{
            if ( $peso < 10 ) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
        }
    }

    public function emitirSom() {
        echo "<p><span class='foco'>Au! Au! Au! <span></p>";
    }

    public function enterrarOsso() {
        echo "<p><span class='foco'>Enterrando Osso<span></p>";
    }

    public function locomover() {
        echo "<p><span class='foco'>Abanando o Rabo<span></p>";
    }
}

?>
