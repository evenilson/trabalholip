<?php
   require_once '../../config/conexaobanco.php';
   $conectador = conexao();

   $id = $_POST['id_drama'];
   $quantidade = mysqli_query($conectador, "SELECT quantidade FROM drama WHERE id_drama = '$id'");
   $qtd = mysqli_fetch_row($quantidade);
   $qtdVender = $qtd[0] - $_POST['qtdVender'];
   mysqli_query($conectador, "UPDATE drama SET quantidade = '$qtdVender' WHERE id_drama = '$id'");

   header("Location: pages/sales.php");
?>
