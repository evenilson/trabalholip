<?php
   require_once '../../config/conexaobanco.php';
   $conectador = conexao();

   $id = $_POST['id_aventura'];
   $quantidade = mysqli_query($conectador, "SELECT quantidade FROM aventura WHERE id_aventura = '$id'");
   $qtd = mysqli_fetch_row($quantidade);
   $qtdVender = $qtd[0] - $_POST['qtdVender'];
   mysqli_query($conectador, "UPDATE aventura SET quantidade = '$qtdVender' WHERE id_aventura = '$id'");

   header("Location: pages/sales.php");
?>
