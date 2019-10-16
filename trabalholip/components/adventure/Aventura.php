<?php

require_once '../book/Livro.php';

class Aventura extends Livro{
    private $ilustracoes;

    //contrutor de aventura
    public function __construct($nome,$valor,$qtdEmEstoque, $ilustracoes){
        parent::__construct($nome,$valor,$qtdEmEstoque);
        $this->ilustracoes = $ilustracoes;
    }

    //criando geters
    public function getIlustracoes(){
        return $this->ilustracoes;
    }

    //criando seters
    public function setIlustracoes($ilustracoes){
        $this->ilustracoes = $ilustracoes;            
    }

}
