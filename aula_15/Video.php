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

    public function ImprimirV(){
        echo "<p><span class='foco'>Titulo</span>: {$this->getTitulo()}
            <br><span class='foco'>Avaliação</span>: {$this->getAvaliacao()}
            <br><span class='foco'>Views</span>: {$this->getViews()}
            <br><span class='foco'>Curtidas</span>: {$this->getCurtidas()}";

        if($this->getReproduzindo()){
            echo "<br><br>Está reproduzindo!</p>";
        }else{
            echo "<br><br>Não está reproduzindo!</p>";
        }
    }

    public function play() {
        $this->setReproduzindo( true );
    }

    public function pause() {
        $this->setReproduzindo( false );
    }

    public function like() {
        $this->setCurtidas( $this->getCurtidas() + 1 );
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

        if ( $this->getViews() > 0 ) {
            $media = ( $this->avaliacao + $avaliacao ) / $this->views;

            $this->avaliacao = $media;
        }

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
