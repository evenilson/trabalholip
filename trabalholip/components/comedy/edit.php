<?php
   require_once '../../config/conexaobanco.php';
   $conectador = conexao();

   $nome = $_POST['nome'];
   $valor = $_POST['valor'];
   $quantidade = $_POST['quantidade'];
   $id = $_POST['id_comedia'];
   $temCapaBrochura = $_POST['temCapaBrochura'];

   mysqli_query($conectador, "UPDATE comedia SET nome = '$nome', valor = '$valor', quantidade = '$quantidade', capa_brochura = '$temCapaBrochura' WHERE id_comedia = '$id'") or die ("ERRO!!!!");

   header("Location: pages/stock.php");
?>
