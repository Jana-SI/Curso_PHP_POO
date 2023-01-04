<?php
require_once "interfaceLuta.php";
require_once "Lutador.php";

class Luta implements interfaceLuta {

    // atributos
    private $desafiado, $desafiante, $rounds, $aprovada;

    //metodos especiais;
    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setRounds($rounds){
        $this->rounds = $rounds;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    // metodos
    public function marcarLuta($l1, $l2) {

        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){

            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);

        }else{

            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);

        }
    }

    public function lutar(){

        if($this->getAprovada()){

            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();

            $vencedor = rand(0, 2);

            switch($vencedor){

                case 0: //empate
                    echo "<p>Empatou!</p>";

                    $this->getDesafiado()->empatarLuta();

                    $this->getDesafiante()->empatarLuta();

                    break;

                case 1: // ganhou desafiado
                    echo "<p>{$this->getDesafiado()->getNome()} Ganhou a luta!</p>";

                    $this->getDesafiado()->ganharLuta();

                    $this->getDesafiante()->perderLuta();

                    break;

                case 2: // ganhou desafiante
                    echo "<p>{$this->getDesafiante->getNome()} Ganhou a luta!</p>";

                    $this->getDesafiante()->ganharLuta();

                    $this->getDesafiado()->perderLuta();

                    break;
            }
        }else{
            echo "<p>Luta não pode acontecer!</p>";
        }
    }
}
?>
