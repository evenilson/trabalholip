<?php
   function conexao(){
      $conexao=  new mysqli('localhost', 'root', null, 'library');
      return $conexao; 
   }
?>
