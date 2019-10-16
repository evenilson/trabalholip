<?php 
require_once 'Drama.php';
require_once '../../config/conexaobanco.php';

$conectador = conexao();

$novoDrama = new Drama($_POST['nome'], $_POST['valor'], $_POST['quantidade'], $_POST['temCapaDura']);

$nome = $novoDrama->getNome();
$valor = $novoDrama->getValor();
$quantidade = $novoDrama->getQtdEmEstoque();
$temCapaDura = $novoDrama->getTemCapaDura();


$sql = "INSERT INTO drama (nome, valor, quantidade, capa_dura) VALUES ('$nome', '$valor', '$quantidade', '$temCapaDura')";

mysqli_query($conectador, $sql) or die ("Erro ao tentar registrar o cadastro");
mysqli_close($conectador);

header("Location: ../../pages/adicionarLivro.php");
