
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>YODALivraria</title>
  <link rel="shortcut icon" href="Imagens/icon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container menu">
            <div>
                <a class="navbar-brand" href="#">YODA<strong>Livravia</strong></a>
            </div>

            <div>
                <span>
                    <div style="display: flex; align-items: center;">
                        <img src="imagens/yoda_profile.jpg" class="profile img-responsive">
                        <span class="name-profile">Yoda Kamashi</span>
                        <a class="logout" href="">Sair</a>
                    </div>
                </span>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>YODA<strong>Livravia</strong></h1>
            <h5>Funcionalidades</h5>
        </div> 
        <div class="row">
            <div class="col-sm-4">
                <div class="container">
                    <div>
                        <a class="card-options" href="adicionarlivro.php">
                            <div><img class="img-card" src="imagens/add.svg" alt=""></div>
                            <div class="title"><span>Adicionar Livros</span></div>
                            <div class="details">
                                <span class="badge badge-success">11 adicionados</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <div>
                        <a class="card-options" href="venderlivro.php">
                            <div><img class="img-card" src="imagens/buy.svg" alt=""></div>
                            <div class="title"><span>Vender Livros</span></div>
                            <div class="details">
                                <span class="badge badge-success">22 vendidos</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <div>
                        <a class="card-options" href="verestoque.php">
                            <div><img class="img-card" src="imagens/stock.svg" alt=""></div>
                            <div class="title"><span>Ver Estoque</span></div>
                            <div class="details">
                                <span class="badge badge-success">147 livros</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</body>
</html>