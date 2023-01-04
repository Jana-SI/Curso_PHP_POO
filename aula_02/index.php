<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 02</h2>
	
	<?php
		require_once "caneta.php";
		
		$c1 = new Caneta; // instanciar
		$c1->modelo = "BIC";
		$c1->cor = "Azul";		
		$c1->carga = 100;
		$c1->ponta = 0.1;		
		$c1->tampar();
		
		/* echo "<pre>";
		print_r($c1);
		echo "</pre>"; */
		
		foreach($c1 as $k => $v){
			echo "<p>$k = $v</p>";
		}
		
		$c1->rabiscar();
		
		$c2 = new Caneta;
		$c2->modelo = "BIC";
		$c2->cor = "Verde";
		$c2->carga = 50;
		$c2->ponta = 0.5;
		$c2->destampar();
		
		/* echo "<pre>";
		print_r($c2);
		echo "</pre>"; */
		
		foreach($c2 as $k => $v){
			echo "<p>$k = $v</p>";
		}
		
		$c2->rabiscar();

	?>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>