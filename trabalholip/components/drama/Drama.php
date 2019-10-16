<?php
   require_once '../book/Livro.php';
   class Drama extends Livro{
      private $temCapaDura;
      
      //contrutor de aventura
      public function __construct($nome,$valor,$qtdEmEstoque, $temCapaDura){
         parent::__construct($nome,$valor,$qtdEmEstoque);
         $this->temCapaDura = $temCapaDura;
      }

      //criando geters
      public function getTemCapaDura(){
         return $this->temCapaDura;
      }

      //criando seters
      public function setTemCapaDura($temCapaDura){
         $this->temCapaDura = $temCapaDura;            
      }
   }
?>
