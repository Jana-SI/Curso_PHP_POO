<?php

    require_once "interfaceLutador.php";

    class Lutador implements interfaceLutador{
        // atributos
        private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;

        //contrutor
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){

            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        // metodos
        public function apresentar(){
            echo "<p>CHEGOU A HORA!O lutador: {$this->getNome()}, veio diretamente de : {$this->getNacionalidade()}, tem {$this->getIdade()}, altura {$this->getAltura()} e pesa {$this->getPeso()}kg. <br> Ele tem {$this->getVitorias()} vitorias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates</p>";
        }

        public function status(){
            echo "<p>{$this->getNome()}, é um peso {$this->getCategoria()} e já ganhou {$this->getVitorias()} vezes, perdeu {$this->getDerrotas()} vezes e empatou {$this->getEmpates()} vezes</p>";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        //metodos especiais
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($peso){
            $this->peso = $peso;

            $this->setCategoria();
        }

        public function getCategoria(){
            return $this->categoria;
        }

        private function setCategoria(){

            if($this->getPeso() < 52.2){

                $this->categoria = "Inválido";

            }elseif($this->getPeso() <= 70.3){

                $this->categoria = "Leve";

            }elseif($this->getPeso() <= 83.9){

                $this->categoria = "Médio";

            }elseif($this->getPeso() <= 120.2){

                $this->categoria = "Pesado";

            }else{

                $this->categoria = "Inválido";

            }
        }

        public function getVitorias(){
            return $this->vitorias;
        }

        public function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }

        public function getDerrotas(){
            return $this->derrotas;
        }

        public function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }

        public function getEmpates(){
            return $this->empates;
        }

        public function setEmpates($empates){
            $this->empates = $empates;
        }
    }
?>
