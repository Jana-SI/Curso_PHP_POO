<?php

require_once "Pessoa.php";

class Aluno extends Pessoa {

    private $matricula, $curso;

    function getMatricula(){
        return $this->matricula;
    }

    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    function getCurso(){
        return $this->curso;
    }

    function setCurso($curso){
        $this->curso = $curso;
    }

    public function PagarMensalidade() {
        echo "<p>Pagando mensalidade do aluno <strong>{$this->getNome()}</strong></p>";
    }
}
?>
