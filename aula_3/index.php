<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 3</h2>
	
    <?php
		require_once "caneta.php";
		
		$c1 = new Caneta;
		$c1->modelo = "BIC cristal";
		$c1->cor = "Azul";
		//$c1->ponta = 0.5;
		//$c1->carga = 99;
		//$c1->tampada = true;
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
		$c2->cor = "Vermelho";
		$c2->destampar();
		
		foreach($c2 as $k => $v){
			echo "<p>$k = $v</p>";
		}		
		
		$c2->rabiscar();
    ?>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 