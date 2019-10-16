<?php
   require_once '../../config/conexaobanco.php';
   $conectador = conexao();

   $nome = $_POST['nome'];
   $valor = $_POST['valor'];
   $quantidade = $_POST['quantidade'];
   $id = $_POST['id_aventura'];

   mysqli_query($conectador, "UPDATE aventura SET nome = '$nome', valor = '$valor', quantidade = '$quantidade' WHERE id_aventura = '$id'") or die ("ERRO!!!!");

   header("Location: pages/stock.php");
?>
