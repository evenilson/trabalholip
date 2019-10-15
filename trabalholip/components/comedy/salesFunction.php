<?php
   require_once '../../config/conexaobanco.php';
   $conectador = conexao();

   $id = $_POST['id_comedia'];
   $quantidade = mysqli_query($conectador, "SELECT quantidade FROM comedia WHERE id_comedia = '$id'");
   $qtd = mysqli_fetch_row($quantidade);
   $qtdVender = $qtd[0] - $_POST['qtdVender'];
   mysqli_query($conectador, "UPDATE comedia SET quantidade = '$qtdVender' WHERE id_comedia = '$id'");

   header("Location: pages/sales.php");
?>
