<?php
	class Caneta{
		public $modelo;
		private $cor;
		private $ponta;
		private $tampada;
		
		//metodo construtor
		public function __construct($modelo, $cor, $ponta){
			$this->modelo = $modelo;
			$this->cor = $cor;
			$this->ponta = $ponta;
			$this->setTampada(true);
		}
		
		//metodos especiais getter e setter
		public function getModelo(){
			return $this->modelo;
		}
		
		public function setModelo($modelo){
			$this->modelo = $modelo;
		}
		public function getCor(){
			return $this->cor;
		}
		
		public function setCor($cor){
			$this->cor = $cor;
		}
		
		public function getPonta(){
			return $this->ponta;
		}
		
		public function setPonta($ponta){
			$this->ponta = $ponta;
		}
		
		public function getTampada(){
			return $this->tampada;
		}
		
		public function setTampada($tampada){
			$this->tampada = $tampada;
		}
		
		//metodos		
		
		/* public function rabiscar(){
			if($this->tampada == true){
				echo "<p>ERRO! Não posso rabiscar!</p>";
			}else{
				echo "<p>Estou rabiscando ...</p>";
			}
		} */
		
		public function tampar(){
			$this->tampada = true;
		}
		
		/* public function destampar(){
			$this->tampada = false;
		} */		
	}
?>