<?php
	class ContaBanco{
		//atributos
		public $numConta;
		protected $tipo; //cc conta corrente, cp conta poupança
		private $dono;
		private $saldo;
		private $status;
		
		//construtor
		function __construct($dono,$numConta,$tipo){
			$this->setNumConta($numConta);
			$this->setTipo($tipo);
			$this->setDono($dono);
			
			$this->saldo = 0;
			$this->status = false;
			
			echo "<p>Conta de {$this->getDono()} criada com sucesso</p>";
		}
		
		//metodos especiais
		function getNumConta(){
			return $this->numConta;
		}
		function setNumConta($numConta){
			$this->numConta = $numConta;
		}
		
		function getTipo(){
			return $this->tipo;
		}
		function setTipo($tipo){
			$this->tipo = $tipo;
		}
		
		function getDono(){
			return $this->dono;
		}
		function setDono($dono){
			$this->dono = $dono;
		}
		
		function getSaldo(){
			return $this->saldo;
		}
		function setSaldo($saldo){
			$this->saldo = $saldo;
		}
		
		function getStatus(){
			return $this->status;
		}
		function setStatus($status){
			$this->status = $status;
		}
		
		//metodos
		public function abrirConta($tipo){// cc 50, cp 150
			$this->setTipo($tipo);
			$this->setStatus(true);
			
			if($this->getTipo() == "CC"){
				$this->setSaldo(50);
			}elseif($this->getTipo() == "CP"){
				$this->setSaldo(150);
			}
		}
		
		public function fecharConta(){
			if($this->getSaldo() > 0){
				echo "<p>Conta com dinheiro</p>";
			}elseif($this->getSaldo() < 0){
				echo "<p>Conta em débito</p>";
			}else{
				$this->setStatus(false);
				echo "<p>Conta de {$this->getDono()} fechada com sucesso!</p>";
			}
		}
		public function depositar($valor){
			if($this->getStatus()){
				$this->setSaldo($this->getSaldo() + $valor);
				echo "<p>Depósito de R$ $valor,00 na conta de {$this->getDono()}</p>";
			}else{
				echo "<p>impossivel de depositar</p>";
			}
		}
		
		public function sacar($valor){
			if($this->getStatus()){
				if($this->getSaldo() >= $valor){
					$this->setSaldo($this->getSaldo() - $valor);
					echo "<p>Saque de R$ $valor,00 autorizado na conta de {$this->getDono()}</p>";
				}else{
					echo "<p>Saldo insuficiente</p>";
				}
			}else{
				echo "<p>Impossivel de sacar</p>";
			}
		}
		
		public function pagarMensal(){//cc paga 12, cp paga 20
			if($this->getTipo() == "CC"){
				$valor = 12;
			}elseif($this->getTipo() == "CP"){
				$valor = 20;
			}
			
			if($this->getStatus()){
				if($this->getSaldo() > $valor){
					$this->setSaldo($this->getSaldo() - $valor);
					echo "<p>Mensalidade de R$ $valor,00 debitada na conta de {$this->getDono()}</p>";
				}else{
					echo "<p>Saldo insuficiente!</p>";
				}
			}else{
				echo "<p>Impossivel pagar!</p>";
			}
		}
	}
?>