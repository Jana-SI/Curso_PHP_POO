<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
      table{
          margin:auto;
          border-color: blue;
      }
    </style>
</head>
<body>
<div>

    <h2>Aula 15</h2>

    <?php
        require_once "Video.php";
        require_once "Gafanhoto.php";
        require_once "Visualizacao.php";

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Janaina", 29, "F", "Peste");
        $g[1] = new Gafanhoto("Carlos", 28, "M", "Mozao");

        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[0], $v[1]);

        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);

        echo "<pre>";
        //print_r($v);
        //print_r($g);
        //print_r($vis);
        echo "</pre>";
    ?>

    <table border="1">
        <tr>
           <td colspan="2" align="center"><p><span class='foco'>Gafanhoto</span></p></td>
        </tr>
        <tr>
            <td><?php $g[0]->ImprimirG(); ?></td>
            <td><?php $g[1]->ImprimirG(); ?></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><p><span class='foco'>Video</span></p></td>
        </tr>
        <tr>
            <td><?php $v[0]->ImprimirV(); ?></td>
            <td><?php $v[1]->ImprimirV(); ?></td>
        </tr>
        <tr>
            <td colspan="2"><?php $v[2]->ImprimirV(); ?></td>
        </tr>
    </table>

    <a class="botao" href="javascript:history.go(-1)">Voltar</a>

</div>
</body>
</html>
