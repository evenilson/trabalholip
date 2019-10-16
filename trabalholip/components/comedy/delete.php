<?php
   require_once '../../config/conexaobanco.php';
   $conectador = conexao();

   $id = $_GET['id_comedia'];

   mysqli_query($conectador, "DELETE FROM comedia WHERE id_comedia = '$id'") or die ("ERRO!!!!");

   header("Location: pages/stock.php");
?>
