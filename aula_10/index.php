<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

    <h2>Aula 10</h2>

    <?php

        require_once "Pessoa.php";
        require_once "Aluno.php";
        require_once "Professor.php";
        require_once "Funcionario.php";

        $p1 = new Pessoa("Pedro", 30 , "M");
        $p2 = new Aluno("Maria", 15, "F", 3015,"Informatica");
        $p3 = new Professor("Cláudio", 45, "M", "Exatas", 2500.75);
        $p4 = new Funcionario("Fabiana", 25, "F", "Estoque", true);

        $p3->receberAumento(550.20);
        $p4->mudarTrabalho();
        $p2->cancelarMatricula();

        echo "<pre>";
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        echo "</pre>";
    ?>

    <a class="botao" href="javascript:history.go(-1)">Voltar</a>

</div>
</body>
</html>
