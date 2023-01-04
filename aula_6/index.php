<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 06</h2>
	<pre>
    <?php
        
		require_once "ControleRemoto.php";
		
		$c = new ControleRemoto();
		$c->ligar();
		$c->maisVolume();
		$c->abrirMenu();
		$c->menosVolume();
		$c->play();		
		$c->abrirMenu();
		$c->fecharMenu();
    ?>
	</pre>
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 