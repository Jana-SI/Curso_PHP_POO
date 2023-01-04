<?php

require_once "Lobo.php";

class Cachorro extends Lobo {
    public function reagirFrase( $frase ) {
        if ( $frase == "Comida" || $frase == "Oi" ) {
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }

    public function reagirHora( $hora, $min ) {
        if ( $hora < 12 ) {
            echo "<p>Abanar</p>";
        } elseif ( $hora >= 18 ) {
            echo "Ignorar";
        } else {
            echo "Abanar e Latir";
        }
    }

    public function reagirDono ( $dono ) {
        if ( $dono ) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }

    public function reagirIdade( $idade, $peso ) {
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
}

?>
