<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

    <h2>Aula 14</h2>

    <?php
        require_once "Video.php";
        require_once "Gafanhoto.php";

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Janaina", 29, "F", "Peste");
        $g[1] = new Gafanhoto("Carlos", 28, "M", "Mozao");

        echo "<pre>";
        print_r($v);
        print_r($g);
        echo "</pre>";
    ?>

    <a class="botao" href="javascript:history.go(-1)">Voltar</a>

</div>
</body>
</html>
