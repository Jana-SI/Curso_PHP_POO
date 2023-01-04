<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>

        <h2>Aula 12 - 13</h2>

        <?php
            //require_once "Animal.php";
            require_once "Mamifero.php";
            require_once "Cachorro.php";
            require_once "Lobo.php";

            // sobreposição
            //$a = new Animal();
            $m = new Mamifero();
            $m->emitirSom();
            $l = new Lobo();
            $l->emitirSom();
            $c = new Cachorro();
            $c->emitirSom();

            // sobrecarga adaptada
            $c->reagirFrase("Oi"); //frase
            $c->reagirFrase("Vai apanhar"); //frase
            $c->reagirHora(11, 45); //hora
            $c->reagirHora(21, 00); //hora
            $c->reagirDono(true); //dono
            $c->reagirDono(false); //dono
            $c->reagirIdade(2, 12.5); //idade e peso
            $c->reagirIdade(17, 4.5); //idade e peso
        ?>

        <p><a class="botao" href="javascript:history.go(-1)">Voltar</a></p>

    </div>
</body>

</html>
