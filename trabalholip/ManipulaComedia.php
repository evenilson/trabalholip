<?php 
require_once 'Comedia.php';
require_once 'conexaobanco.php';

$conectador = conexao();

$novoComedia = new Comedia($_POST['nome'], $_POST['valor'], $_POST['quantidade'], $_POST['temCapaBrochura']);


$nome = $novoComedia->getNome();
$valor = $novoComedia->getValor();
$quantidade = $novoComedia->getQtdEmEstoque();
$temCapaBrochura = $novoComedia->getTemCapaBrochura();

$sql = "INSERT INTO comedia (nome, valor, quantidade, capa_brochura) VALUES ('$nome', '$valor', '$quantidade', '$temCapaBrochura')";

mysqli_query($conectador, $sql) or die ("Erro ao tentar registrar o cadastro");
mysqli_close($conectador);

header("Location: estoquecomedia.php");
