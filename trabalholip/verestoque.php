
<!DOCTYPE html>
    <head>
    <meta charset="utf-8">
    <title>Sistema Blibliotecário</title>
        <link rel="shortcut icon" href="Imagens/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container galeria">
    <h1 align="center" class="padding-h1">Sistema Blibliotecário</h1>
    <?php
    require_once 'conexaobanco.php';

$conectador = conexao();

$sql = "SELECT * FROM drama";
$resultado = mysqli_query($conectador, $sql);
?>

<div class="container">
<h1>Livros de drama em estoque</h1>

<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade em estoque</th>
        <th>Tem capa dura</th>
    </thead>
    <tbody>
        <?php 
            while($linha = $resultado->fetch_array())
            {
                echo '<tr>';
                echo '<td>'. $linha['id_drama'] .'</td>';
                echo '<td>'. $linha['nome'] .'</td>';
                echo '<td>'. $linha['valor'] .'</td>';
                echo '<td>'. $linha['quantidade'] .'</td>';
                echo '<td>'. $linha['capa_dura'] .'</td>';
                echo '</tr>';   
            }
            mysqli_close($conectador);
        ?>
    </tbody>
</table>



</div>


</div>
    </body>
</html>