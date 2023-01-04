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
            require_once "Reptil.php";
            require_once "Peixe.php";
            require_once "Ave.php";
            require_once "Arara.php";
            require_once "Cachorro.php";
            require_once "Canguru.php";
            require_once "Cobra.php";
            require_once "GoldFish.php";
            require_once "Lobo.php";
            require_once "Tartaruga.php";

            //$a = new Animal();
            $m = new Mamifero();
            $a = new Ave();
            $r = new Reptil();
            $p = new Peixe();

            $lobo = new Lobo();

            $canguru = new Canguru();
            $cachorro = new Cachorro();
            $tartaruga = new Tartaruga();

            /*$m->locomover();
            $a->locomover();
            $r->locomover();
            $p->locomover();

            $canguru->locomover();
            $cachorro->locomover();
            $tartaruga->locomover();*/

            $m->emitirSom();
            $lobo->emitirSom();
            $cachorro->emitirSom();
            //$canguru->emitirSom();

            $c = new Cachorro();
            $c->reagir("Oi"); //frase
            $c->reagir("Vai apanhar"); //frase
            $c->reagir(11, 45); //hora
            $c->reagir(21, 00); //hora
            $c->reagir(true); //dono
            $c->reagir(false); //dono
            $c->reagir(2, 12.5); //idade e peso
            $c->reagir(17, 4.5); //idade e peso
        ?>

        <p><a class="botao" href="javascript:history.go(-1)">Voltar</a></p>

    </div>
</body>

</html>
