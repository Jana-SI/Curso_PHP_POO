<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        p {
            border: inset green;
        }

    </style>
</head>

<body>
    <div>

        <h2><span class="foco">Ultra Emoji Combat</span></h2>

        <?php

        require_once "Lutador.php";
        require_once "Luta.php";

        /* nome, nacionalidade, idade, altura, peso, categoria, vitorias, derrotas, empates

        Pretty Boy, França, 31, 1.75m, 68.9kg, Leve, 11, 2, 1
        Puscript, Brasil, 29, 1.68m, 57.8kg, Leve, 14, 2, 3
        Snapshadow, EUA, 35, 1.65m, 80.9kg, Médio, 12, 2, 1
        Dead Code, Austrália, 28, 1.93m, 81.6kg, Médio, 13, 0, 2
        Ufocobol, Brasil, 37, 1.70m, 119.3kg, Pesado, 5, 4, 3
        Nerdaard, EUA, 30, 1.81m, 105.7kg, Pesado, 12, 2, 4

        */

        $L = array();

        $L[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);

        $L[1] = new Lutador("Puscript", "Brasil", 29, 1.68, 57.8,14, 2, 3);

        $L[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);

        $L[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

        $L[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);

        $L[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        /*for($i=0; $i < 2; $i++){
            $L[$i]->apresentar();
            $L[$i]->status();
        }*/

        $UEC01 = new Luta();
        $UEC01->marcarLuta($L[4], $L[5]);
        $UEC01->lutar();
        $L[4]->status();
        $L[5]->status();
    ?>

        <a class="botao" href="javascript:history.go(-1)">Voltar</a>

    </div>
</body>

</html>
