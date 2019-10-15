<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>YODALivraria</title>
      <link rel="shortcut icon" href="../assets/img/icon.png">
      <link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
      <link rel="stylesheet" href="../assets/css/bootstrap.css">
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
                        <img src="../assets/img/yoda_profile.jpg" class="profile img-responsive">
                        <span class="name-profile">Yoda Kamashi</span>
                        <a class="logout" href="">Sair</a>
                     </div>
                  </span>
            </div>
         </div>
      </nav>

      <div class="container">
         <div class="jumbotron">
            <h1>Vender Livros</h1>
            <a class="btn btn-primary" href="../index.php">Voltar</a>
         </div> 
         <div class="row">
            <div class="col-sm-4">
                  <div class="container">
                     <div>
                        <a class="card-options" href="../components/adventure/salesAdventure.php">
                              <div><img class="img-card" src="../assets/img/add.svg" alt=""></div>
                              <div class="title"><span>Aventura</span></div>
                              <div class="details">
                                 <span class="badge badge-success">10 vendidos</span>
                              </div>
                        </a>
                     </div>
                  </div>
            </div>
            <div class="col-sm-4">
                  <div class="container">
                     <div>
                        <a class="card-options" href="../components/comedy/pages/sales.php">
                              <div><img class="img-card" src="../assets/img/buy.svg" alt=""></div>
                              <div class="title"><span>Comédia</span></div>
                              <div class="details">
                                 <span class="badge badge-success">6 vendidos</span>
                              </div>
                        </a>
                     </div>
                  </div>
            </div>
            <div class="col-sm-4">
                  <div class="container">
                     <div>
                        <a class="card-options" href="../components/drama/salesDrama.php">
                              <div><img class="img-card" src="../assets/img/stock.svg" alt=""></div>
                              <div class="title"><span>Drama</span></div>
                              <div class="details">
                                 <span class="badge badge-success">6 vendidos</span>
                              </div>
                        </a>
                     </div>
                  </div>
            </div>
         </div>  
      </div>
   </body>
</html>
