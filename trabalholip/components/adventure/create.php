<?php  
require_once 'Aventura.php';
require_once '../../config/conexaobanco.php';

$conectador = conexao();

$novoAventura = new Aventura($_POST['nome'], $_POST['valor'], $_POST['quantidade'], $_POST['ilustracao']);


$nome = $novoAventura->getNome();
$valor = $novoAventura->getValor();
$quantidade = $novoAventura->getQtdEmEstoque();
$ilustracoes = $novoAventura->getIlustracoes();



$sqlaventura = "INSERT INTO aventura (nome, valor, quantidade) VALUES ('$nome', '$valor', '$quantidade')";
mysqli_query($conectador, $sqlaventura) or die ("Erro ao tentar registrar o cadastro");

$sqlid = "SELECT LAST_INSERT_ID()"; 
$idresul = mysqli_query($conectador, $sqlid) or die ("PROBLEMAS COM A CONSULTA"); 
$idarray = mysqli_fetch_row($idresul);

$id = $idarray[0]; 

$size = count($ilustracoes);


for ($row = 0; $row < $size; $row++) {
    $ilu = $ilustracoes[$row];
    $sqlilustracao = "INSERT INTO ilustracoes (ilustracao, id_aventura) VALUES ('$ilu', '$id')";
    mysqli_query($conectador, $sqlilustracao) or die ("Erro ao tentar registrar o cadastro");
}


mysqli_close($conectador);

header("Location: ../../pages/adicionarLivro.php");
