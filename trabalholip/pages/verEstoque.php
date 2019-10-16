<?php
   require_once '../sql/count.php';
?>

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
         <div class="header text-center">
            <h1>Ver estoque</h1>
            <p>Escolha um gênero</p>
            <a class="btn btn-primary btn-sm" href="../index.php">Voltar para o início</a>
         </div> 
         <div class="row">
            <div class="col-sm-4">
               <div class="container">
                  <div>
                     <a class="card-options" href="../components/adventure/pages/stock.php">
                        <div><img class="img-card" src="../assets/img/adventure.svg" alt=""></div>
                        <div class="title"><span>Aventura</span></div>
                        <div class="details">
                           <span
                              <?php 
                                 if($qtdAdventure[0] == 0){
                                    echo 'class="badge badge-dark"';
                                 }else{
                                    echo 'class="badge badge-info"';
                                 } 
                              ?>>
                           <?php echo $qtdAdventure[0] ?> livros</span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="container">
                  <div>
                     <a class="card-options" href="../components/comedy/pages/stock.php">
                        <div><img class="img-card" src="../assets/img/comedy.svg" alt=""></div>
                        <div class="title"><span>Comédia</span></div>
                        <div class="details">
                           <span
                              <?php 
                                 if($qtdComedy[0] == 0){
                                    echo 'class="badge badge-dark"';
                                 }else{
                                    echo 'class="badge badge-info"';
                                 } 
                              ?>>
                           <?php echo $qtdComedy[0] ?> livros</span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="container">
                  <div>
                     <a class="card-options" href="../components/drama/pages/stock.php">
                        <div><img class="img-card" src="../assets/img/drama.svg" alt=""></div>
                        <div class="title"><span>Drama</span></div>
                        <div class="details">
                           <span
                              <?php 
                                 if($qtdDrama[0] == 0){
                                    echo 'class="badge badge-dark"';
                                 }else{
                                    echo 'class="badge badge-info"';
                                 } 
                              ?>>
                           <?php echo $qtdDrama[0] ?> livros</span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>  
      </div>
   </body>
</html>
