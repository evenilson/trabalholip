
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Sistema Blibliotecário</title>
  <link rel="shortcut icon" href="Imagens/icon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
</head>
<body>
<pre>
<?php  
    require_once 'Livro.php';
    require_once 'Comedia.php';
    require_once 'Aventura.php';
    require_once 'Drama.php';

    $livro = new Comedia(null,null,null, null, null);
    $livro->setId(1);
    $livro->setNome("jsjks");
    $livro->setValor(8.50);
    $livro->setQtdEmEstoque(7);
    $livro->setCapaBrochura(true);
    
    $livrosComedia[] = array(
        "id" => $livro->getId(),
        "nome" => $livro->getNome(),
        "valor" => $livro->getValor(),
        "quantidade" => $livro->getQtdEmEstoque(),
        "capaBrochura" => $livro->getTemCapaBrochura()
    );
    $livro2 = new Comedia(2, 'ssss', 12, 2, true);
    
    $livrosComedia[] = array(
        "id" => $livro2->getId(),
        "nome" => $livro2->getNome(),
        "valor" => $livro2->getValor(),
        "quantidade" => $livro2->getQtdEmEstoque(),
        "capaBrochura" => $livro2->getTemCapaBrochura() 
    );
    print_r($livrosComedia);
?>
</pre>
<div class="container galeria">
    <h1 align="center" class="padding-h1">Sistema Blibliotecário</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="adicionarlivro.php" ><img src="imagens/adicionarlivro.png" class="img-respansive conf-img center" alt="Adicionar livro"></a>
        </div>
        <div class="col-sm-4">
            <a href="venderlivro.php" ><img src="imagens/venderlivro.png" class=" img-respansive conf-img center" alt="Vender livro"></a>
        </div>
        <div class="col-sm-4">
            <a href="verestoque.php" ><img src="imagens/verestoque.png" class="img-respansive conf-img center" alt="Vender livro"></a>
        </div>
    </div>  
</div>
</body>
</html>