<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 5</h2>
	
    <?php
		require_once "ContaBanco.php";
	
		$c1 = new ContaBanco("Janaina",20051993,"CC");
		$c2 = new ContaBanco("Carlos",24111994,"CP");
		
		$c1->abrirConta($c1->getTipo());
		/* $c1->setDono("Janaina");
		$c1->setNumConta(20051993); */
		
		$c2->abrirConta($c2->getTipo());
		/* $c2->setDono("Carlos");
		$c2->setNumConta(24111994); */
		
		$c1->depositar(300);
		$c2->depositar(500);		
		$c2->sacar(100);
		
		$c1->pagarMensal();
		$c2->pagarMensal();
		
		$c1->sacar(338);
		$c2->sacar(530);
		
		$c1->fecharConta();
		$c2->fecharConta();
		
		echo "<pre>";
		print_r($c1);
		print_r($c2);
		echo "</pre>";
	?>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 