<?php
   require_once '../../config/conexaobanco.php';
   $conectador = conexao();

   $nome = $_POST['nome'];
   $valor = $_POST['valor'];
   $quantidade = $_POST['quantidade'];
   $id = $_POST['id_drama'];
   $temCapaDura = $_POST['temCapaDura'];

   mysqli_query($conectador, "UPDATE drama SET nome = '$nome', valor = '$valor', quantidade = '$quantidade', capa_dura = '$temCapaDura'WHERE id_drama = '$id'") or die ("ERRO!!!!");

   header("Location: pages/stock.php");
?>
