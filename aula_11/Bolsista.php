<?php
require_once "Aluno.php";

final class Bolsista extends Aluno {
    private $bolsa;

    public function RenovarBolsa() {
        echo "<p>Bolsa Renovada</p>";
    }

    // sobrepor
    public function PagarMensalidade() {
        echo "<p><strong>{$this->getNome()}</strong> é bolsista! Então paga com desconto!</p>";
    }

    function getBolsa(){
        return $this->bolsa;
    }

    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}
?>
