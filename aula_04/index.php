<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 4</h2>
	
    <?php
		require_once "caneta.php";
		
		$c1 = new Caneta("BIC", "Azul", 0.5);
		$c2 = new Caneta("BIC", "vermelha", 1.0);
		
		echo "<pre>";
		print_r($c1);
		print_r($c2);
		echo "</pre>";

    ?>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 