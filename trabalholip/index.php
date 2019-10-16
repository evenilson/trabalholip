<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>YODALivraria</title>
      <link rel="shortcut icon" href="assets/img/icon.png">
      <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
      <link rel="stylesheet" href="assets/css/bootstrap.css">
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
                        <img src="assets/img/yoda_profile.jpg" class="profile img-responsive">
                        <span class="name-profile">Yoda Kamashi</span>
                        <a class="logout" href="">Sair</a>
                     </div>
                  </span>
            </div>
         </div>
      </nav>

      <div class="container">
         <div class="header text-center">
            <h1>YODA<strong>Livravia</strong></h1>
            <h5>Funcionalidades</h5>
         </div> 
         <div class="row">
            <div class="col-sm-4">
                  <div class="container">
                     <div>
                        <a class="card-options" href="pages/adicionarLivro.php">
                           <div><img class="img-card" src="assets/img/add.svg" alt=""></div>
                           <div class="title"><span>Adicionar Livros</span></div>
                              <!--<div class="details">
                                 <span class="badge badge-info">11 adicionados</span>
                              </div>-->
                        </a>
                     </div>
                  </div>
            </div>
            <div class="col-sm-4">
                  <div class="container">
                     <div>
                        <a class="card-options" href="pages/venderLivro.php">
                           <div><img class="img-card" src="assets/img/buy.svg" alt=""></div>
                           <div class="title"><span>Vender Livros</span></div>
                        </a>
                     </div>
                  </div>
            </div>
            <div class="col-sm-4">
                  <div class="container">
                     <div>
                        <a class="card-options" href="pages/verEstoque.php">
                           <div><img class="img-card" src="assets/img/stock.svg" alt=""></div>
                           <div class="title"><span>Ver Estoque</span></div>
                        </a>
                     </div>
                  </div>
            </div>
         </div>  
      </div>
   </body>
</html>
