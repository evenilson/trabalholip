<?php

require_once 'Livro.php';

class Aventura extends Livro{
    private $ilustracoes = array();

    //contrutor de aventura
    public function __construct($id,$nome,$valor,$qtdEmEstoque, $ilustracoes){
        parent::__construct($id,$nome,$valor,$qtdEmEstoque);
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
    public function adicionarLivro($livro, $arrayLivros){
        $arrayLivros = ($livro);
    }
    public function venderLivro(){

    }
    public function consultarEstoque(){

    }

}

?>