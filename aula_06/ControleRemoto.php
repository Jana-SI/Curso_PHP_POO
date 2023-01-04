<?php
	require_once "Controlador.php";
	
	class ControleRemoto implements Controlador{
		
		// atributos
		private $volume;
		private $ligado;
		private $tocando;
		
		// construtor
		function __construct(){
			$this->setVolume(50);
			$this->setLigado(false);
			$this->setTocando(false);
		}
		
		// metodos especiais
		private function getVolume(){
			return $this->volume;
		}
		
		private function setVolume($volume){
			$this->volume = $volume;
		}
		
		private function getLigado(){
			return $this->ligado;
		}
		
		private function setLigado($ligado){
			$this->ligado = $ligado;
		}
		
		private function getTocando(){
			return $this->tocando;
		}
		
		private function setTocando($tocando){
			$this->tocando = $tocando;
		}
		
		// metodos
		public function ligar(){
			$this->setLigado(true);
		}
		
		public function desligar(){
			$this->setLigado(false);
		}
		
		public function abrirMenu(){
			echo "<p><------<span class='foco'>Menu</span>------></p>";
			echo "<p>Está ligado?:".($this->getLigado()?"SIM":"Não");
			echo "</p><p>Está tocando?:".($this->getTocando()?"SIM":"Não");
			echo "</p><p>Volume: {$this->getVolume()} ";
			
			for($i = 0; $i <= $this->getVolume(); $i+=10){
				echo "|";
			}
			
			echo "</p>";
		}
		
		public function fecharMenu(){
			echo "<p><------<span class='foco'>Fechando menu!</span>------></p>";
		}
		
		public function maisVolume(){
			if($this->getLigado()){
				$this->setVolume($this->getVolume() + 5);
			}else{
				echo "<p><span class='foco'>ERRo! Não posso aumentar o volume.</span></p>";
			}
		}
		
		public function menosVolume(){
			if($this->getLigado()){
				$this->setVolume($this->getVolume() - 5);
			}else{
				echo "<p><span class='foco'>ERRo! Não posso diminuir o volume.</span></p>";
			}
		}
		
		public function ligarMudo(){
			if($this->getLigado() && $this->getVolume() > 0){
				$this->setVolume(0);
			}
		}
		
		public function desligarMudo(){
			if($this->getLigado() && $this->getVolume() == 0){
				$this->setVolume(50);
			}
		}
		
		public function play(){
			if($this->getLigado() && !($this->getTocando())){
				$this->setTocando(true);
			}
		}
		
		public function pause(){
			if($this->getLigado() && $this->getTocando()){
				$this->setTocando(true);
			}
		}		
	}

?>