<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

    <h2>Aula 11</h2>

    <?php
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Bolsista.php";
        require_once "Professor.php";
        require_once "Tecnico.php";

        //$p1 = new Pessoa(); erro

        $v1 = new Visitante();
        $v1->setNome("Juvenal");
        $v1->setIdade(33);
        $v1->setSexo("M");

        echo "<pre>";
        print_r($v1);
        echo "</pre>";

        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(1111);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informatica");
        $a1->PagarMensalidade();

        echo "<pre>";
        print_r($a1);
        echo "</pre>";

        $b1 = new Bolsista();
        $b1->setMatricula(1112);
        $b1->setNome("Jubileu");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        $b1->setSexo("M");
        $b1->PagarMensalidade();

        echo "<pre>";
        print_r($b1);
        echo "</pre>";

        $p1 = new Professor();
        $p1->setNome("Cláudio");
        $p1->setIdade(45);
        $p1->setSexo("M");
        $p1->setEspecialidade("Exatas");
        $p1->setSalario(2500.75);
        $p1->receberAumento(550.20);

        echo "<pre>";
        print_r($p1);
        echo "</pre>";

        $t1 = new Tecnico();
        $t1->setNome("Maria");
        $t1->setIdade(20);
        $t1->setSexo("F");
        $t1->setCurso("Biologia");
        $t1->setRegistroProfissional(131245);
        $t1->praticar();

        echo "<pre>";
        print_r($t1);
        echo "</pre>";

    ?>

    <a class="botao" href="javascript:history.go(-1)">Voltar</a>

</div>
</body>
</html>
