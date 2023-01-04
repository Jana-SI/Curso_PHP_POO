<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        p {
            border: inset red;
        }
    </style>
</head>

<body>
    <div>

        <h2>Aula 09</h2>

        <?php
            require_once "Pessoa.php";
            require_once "Livro.php";

            $p[0] = new Pessoa("Janaina", 29, "F");
            $p[1] = new Pessoa("Carlos", 28, "M");

            $l[0] = new Livro("Fogo & Sangue", "George R. R. Martin", 664,$p[0]);
            $l[1] = new Livro("Como capturar indiazinhas", "Carlos Nunes Ramos", 150, $p[1]);

            $l[0]->abrir();
            $l[1]->abrir();

            $l[0]->folhear(665);
            $l[1]->folhear(30);
            $l[1]->voltarPag();

            $l[0]->detalhes();
            $l[1]->detalhes();

            /*echo "<pre>";
            print_r($l[0]);
            print_r($l[1]);
            echo "</pre>";*/
        ?>

        <a class="botao" href="javascript:history.go(-1)">Voltar</a>

    </div>
</body>

</html>
