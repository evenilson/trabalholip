<?php
abstract class Livro{
    private $id;
    private $nome;
    private $valor;
    private $qtdEmEstoque;


    //criando construtor
    public function __construct($nome,$valor,$qtdEmEstoque){
        $this->nome = $nome;
        $this->valor = $valor;
        $this->qtdEmEstoque = $qtdEmEstoque;
    }

    //criando os geters
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getValor(){
        return $this->valor;
    }
    public function getQtdEmEstoque(){
        return $this->qtdEmEstoque;
    }

    //criando os setters
    public function setId($id){
        $this->id = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }
    public function setQtdEmEstoque($qtdEmEstoque){
        $this->qtdEmEstoque = $qtdEmEstoque;
    }

    //função adicionar livro
    public function adicionarLivro($livro, $arrayLivros){
        
    }
    public function venderLivro(){

    }
    public function consultarEstoque(){

    }

}

