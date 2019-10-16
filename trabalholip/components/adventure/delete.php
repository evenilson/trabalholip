<?php
   require_once '../../config/conexaobanco.php';
   $conectador = conexao();

   $id = $_GET['id_aventura'];

   mysqli_query($conectador, "DELETE FROM aventura WHERE id_aventura = '$id'") or die ("ERRO!!!!");

   header("Location: pages/stock.php");
?>
