<?php
    require_once 'conexaobanco.php';
    $conectador = conexao();
    $sql = "SELECT * FROM aventura";
    $resultado = mysqli_query($conectador, $sql);
?>
<!DOCTYPE html>
    <head>
    <meta charset="utf-8">
    <title>Sistema Blibliotecário</title>
        <link rel="shortcut icon" href="Imagens/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="container galeria">
        <h1 align="center" class="padding-h1">Sistema Blibliotecário</h1>
        <div class="container">
            <h3 align="center">LIVROS DE AVENTURA EM ESTOQUE</h3>
            <table class=" text-center p-5 table table-bordered table-dark table-hover table table-sm .table-responsive{-sm|-md|-lg|-xl} table-striped">
            <thead>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th> 
                <th>Quantidade</th> 
            </thead>
            <tbody>
                <?php 
                    while($linha = $resultado->fetch_array())
                    {
                        echo '<tr>';
                        echo '<td>'. $linha['id_aventura'] .'</td>';
                        echo '<td>'. $linha['nome'] .'</td>';
                        echo '<td>'.'R$ '. $linha['valor']. ',00'.'</td>';
                        echo '<td>'. $linha['quantidade'] .'</td>';
                        echo '</tr>';   
                    }
                    mysqli_close($conectador);
                ?>
            </tbody>
            </table>
        </div>
    </div>
    <center><a href="index.php" ><button type="button" class="btn btn-outline-primary padding-bottom">Home</button></center></a>
    </body>
</html>