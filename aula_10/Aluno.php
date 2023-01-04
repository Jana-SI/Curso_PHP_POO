<?php

require_once "Pessoa.php";
require_once "interfacePessoa.php";
require_once "interfaceAluno.php";

class Aluno extends Pessoa implements interfacePessoa, interfaceAluno{

    //atributos
    private $matricula, $curso;

    // metodos

    public function cancelarMatricula() {
        echo "<p>Matricula será cancelada!</p>";
    }

    //construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso){

        parent::__construct($nome, $idade, $sexo);
        $this->setMatricula($matricula);
        $this->setCurso($curso);

    }

    // metodos especiais

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula( $matricula ) {
        $this->matricula = $matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso( $curso ) {
        $this->curso = $curso;
    }
}
?>
