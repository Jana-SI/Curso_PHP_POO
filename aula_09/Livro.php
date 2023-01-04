<?php
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao {

    // atributo
    private $titulo, $autor, $totPag, $pagAtual, $aberto, $leitor;

    // metodo

    public function detalhes() {
        echo "<p>Livro: {$this->getTitulo()} escrito por {$this->getAutor()}
                <br>Páginas: {$this->getTotPag()} atual: {$this->getPagAtual()}
                <br>Sendo lido por {$this->getLeitor()->getNome()}</p>";
    }

    public function abrir() {
        $this->setAberto( true );
    }

    public function fechar() {
        $this->setAberto( false );
    }

    public function folhear( $p ) {
        if ( $p > $this->getTotPag() ) {
            $this->setPagAtual( 0 );
        } else {
            $this->setPagAtual( $p );
        }
    }

    public function avancarPag() {
        $this->setPagAtual( $this->getPagAtual() + 1);
    }

    public function voltarPag() {
        $this->setPagAtual( $this->getPagAtual() - 1);
    }

    // construtor

    function __construct( $titulo, $autor, $totPag, $leitor ) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPag = $totPag;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    // metodos especiais

    function setTitulo( $titulo ) {
        $this->titulo = $titulo;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function setAutor( $autor ) {
        $this->autor = $autor;
    }

    function getAutor() {
        return $this->autor;
    }

    function setTotPag( $totPag ) {
        $this->totPag = $totPag;
    }

    function getTotPag() {
        return $this->totPag;
    }

    function setPagAtual( $pagAtual ) {
        $this->pagAtual = $pagAtual;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function setAberto( $aberto ) {
        $this->aberto = $aberto;
    }

    function getAberto() {
        return $this->aberto;
    }

    function setLeitor( $leitor ) {
        $this->leitor = $leitor;
    }

    function getLeitor() {
        return $this->leitor;
    }
}
?>
