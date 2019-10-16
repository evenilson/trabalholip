<?php
   require_once '../../config/conexaobanco.php';
   $conectador = conexao();

   $id = $_GET['id_drama'];

   mysqli_query($conectador, "DELETE FROM drama WHERE id_drama = '$id'") or die ("ERRO!!!!");

   header("Location: pages/stock.php");
?>
