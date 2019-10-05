<?php
require_once 'Livro.php';
class Drama extends Livro{
    private $temCapaDura;


    //contrutor de aventura
    public function __construct($id,$nome,$valor,$qtdEmEstoque, $temCapaDura){
        parent::__construct($id,$nome,$valor,$qtdEmEstoque);
        $this->temCapaDura = $temCapaDura;
    }

    public function getTemCapaDura(){
        return $this->temCapaDura;
    }

    //criando seters
    public function setTemCapaDura($temCapaDura){
        $this->temCapaDura = $temCapaDura;            
    }
}
?>