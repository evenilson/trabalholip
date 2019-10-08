<?php
require_once 'Livro.php';
class Comedia extends Livro{
    private $temCapaBrochura;

    //contrutor de aventura
    public function __construct($id,$nome,$valor,$qtdEmEstoque, $temCapaBrochura){
        parent::__construct($id,$nome,$valor,$qtdEmEstoque);
        $this->temCapaBrochura = $temCapaBrochura;
    }

    public function getTemCapaBrochura(){
        return $this->temCapaBrochura;
    }

    //criando seters
    public function setCapaBrochura($temCapaBrochura){
        $this->temCapaBrochura = $temCapaBrochura;            
    }
}
?>