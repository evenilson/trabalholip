<?php
   function conexao(){
      $conexao=  new mysqli('localhost', 'root', null, 'biblioteca');
      return $conexao; 
   }
?>
