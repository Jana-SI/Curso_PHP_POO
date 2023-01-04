<?php

require_once "AcoesVideo.php";

class Video implements AcoesVideo {
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

    public function __construct( $titulo ) {
        $this->setTitulo( $titulo );
        $this->setAvaliacao( 1 );
        $this->setViews( 0 );
        $this->setCurtidas( 0 );
        $this->setReproduzindo( false );
    }

    public function play() {
        $this->setReproduzindo(true);
    }

    public function pause() {
        $this->setReproduzindo(false);
    }

    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    function getTitulo() {
        return $this->titulo;
    }

    function setTitulo( $titulo ) {
        $this->titulo = $titulo;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }

    function setAvaliacao( $avaliacao ) {
        $this->avaliacao = $avaliacao;
    }

    function getViews() {
        return $this->views;
    }

    function setViews( $views ) {
        $this->views = $views;
    }

    function getCurtidas() {
        return $this->curtidas;
    }

    function setCurtidas( $curtidas ) {
        $this->curtidas = $curtidas;
    }

    function getReproduzindo() {
        return $this->reproduzindo;
    }

    function setReproduzindo( $reproduzindo ) {
        $this->reproduzindo = $reproduzindo;
    }
}
?>
