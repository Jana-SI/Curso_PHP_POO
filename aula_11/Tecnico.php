<?php
require_once "Aluno.php";

class Tecnico extends Aluno{
    private $registroProfissional;

    function getRegistroProfissional(){
        return $this->registroProfissional;
    }

    function setRegistroProfissional($registroProfissional){
        $this->registroProfissional = $registroProfissional;
    }

    public function praticar(){
        echo "<p>O <strong>{$this->getNome()}</strong> está praticando!</p>";
    }
}

?>
