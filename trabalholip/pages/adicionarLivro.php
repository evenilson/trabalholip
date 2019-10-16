<?php
   require_once '../config/conexaobanco.php';
   $conectador = conexao();
   $qtdAdventure = mysqli_fetch_row(mysqli_query($conectador, "SELECT COUNT(id_aventura) FROM aventura"));
   $qtdComedy = mysqli_fetch_row(mysqli_query($conectador, "SELECT COUNT(id_comedia) FROM comedia"));
   $qtdDrama = mysqli_fetch_row(mysqli_query($conectador, "SELECT COUNT(id_drama) FROM drama"));
?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>YODALivraria</title>
      <link rel="shortcut icon" href="../assets/img/icon.png">
      <link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
      <link rel="stylesheet" href="../assets/css/bootstrap.css">
      <link rel="stylesheet" href="../assets/css/fontawesome-free-5.11.2-web/css/all.css"> 
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
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
            <h1>Adicionar Livros</h1>
            <p>Escolha um gênero</p>
            <a class="btn btn-primary btn-sm" href="../index.php">Voltar para o início</a>
            <a class="btn btn-secondary btn-sm" href="../pages/verEstoque.php">Ver estoque</a>
         </div> 
         <div class="row">
         <div class="col-sm-4">
               <div class="container">
                  <div>
                     <a class="card-options" data-toggle="modal" data-target="#modalAdventure">
                        <div><img class="img-card" src="../assets/img/adventure.svg" alt=""></div>
                        <div class="title"><span>Aventura</span></div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="container">
                  <div>
                     <a class="card-options" data-toggle="modal" data-target="#modalComedy">
                        <div><img class="img-card" src="../assets/img/comedy.svg" alt=""></div>
                        <div class="title"><span>Comédia</span></div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="container">
                  <div>
                     <a class="card-options" data-toggle="modal" data-target="#modalDrama">
                        <div><img class="img-card" src="../assets/img/drama.svg" alt=""></div>
                        <div class="title"><span>Drama</span></div>
                     </a>
                  </div>
               </div>
            </div>
         </div>  
      </div>

      <!-- Modal Adventure-->
      <div class="modal fade" id="modalAdventure" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <h5 class="modal-title" id="exampleModalLabel">Aventura</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                     <span aria-hidden="true"><i class="fas fa-times"></i></span>
                  </button>
               </div>
               <form action="../components/adventure/create.php" method="POST">
                  <div class="modal-body row">

                  <div class="col-md-12">
                     <input type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Nome" required>
                        <div class="form-row mb-4">
                           <div class="col">
                              <input type="number" id="valor" name="valor" class="form-control" onKeyPress="return(moeda(this,'.',',',event))" min="0" placeholder="Valor" required>
                           </div>
                           <div class="col">
                              <input type="number" id="quantidade" name="quantidade" class="form-control" placeholder="Quantidade" min="0" required>
                           </div>
                        </div>

                        <!-- Ilustração -->
                        <a class="btn btn-primary" href="javascript:void(0)" id="addInput">
                           <span aria-hidden="true"><i class="fas fa-plus"></i></span>
                        </a>
                        <hr/>
                        <div id="dynamicDiv">
                           <div class="row" id="p">
                              <div class="col-md-10">
                                 <input type="text" class="form-control mb-1" name="ilustracao[]" id="inputeste" size="20" placeholder="Ilustração" required/>
                              </div>
                              <div class="col-md-2">
                                 <a class="btn btn-secondary" href="javascript:void(0)" id="remInput">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                 </a>
                              </div>
                           </div>
                        </div>

                        <script>
                           $(function () {
                              var scntDiv = $('#dynamicDiv');
                              $(document).on('click', '#addInput', function () {
                                 $('<div class="row" id="p">'+
                                       '<div class="col-md-10">'+
                                          '<input type="text" class="form-control mb-1" name="ilustracao[]" id="inputeste" size="20" placeholder="Ilustração"required />'+
                                       '</div>'+
                                       '<div class="col-md-2">'+
                                          '<a class="btn btn-secondary" href="javascript:void(0)" id="remInput">'+
                                             '<span aria-hidden="true"><i class="fas fa-times"></i></span>'+
                                          '</a>'+
                                       '</div>'+
                                    '</div>').appendTo(scntDiv);
                                 return false;
                              });
                              $(document).on('click', '#remInput', function () {
                                    $(this).parents('div#p').remove();
                                 return false;
                              });
                           });
                        </script>

                     </div>
                     
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                     <button type="submit" class="btn btn-primary" id="vender">Adicionar</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

       <!-- Modal Comedy-->
       <div class="modal fade" id="modalComedy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <h5 class="modal-title" id="exampleModalLabel">Comédia</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                     <span aria-hidden="true"><i class="fas fa-times"></i></span>
                  </button>
               </div>
               <form action="../components/comedy/create.php" method="POST">
                  <div class="modal-body row">

                     <div class="col-md-12">
                        <input type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Nome" required>
                        <div class="form-row mb-4">
                           <div class="col">
                              <input type="number" id="valor" name="valor" class="form-control" onKeyPress="return(moeda(this,'.',',',event))" min="0" placeholder="Valor" required>
                           </div>
                           <div class="col">
                              <input type="number" id="quantidade" name="quantidade" class="form-control" placeholder="Quantidade" min="0" required>
                           </div>
                        </div>

                        <!-- Tem capa brochura -->
                        <div class="form-group">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="temCapaBrochura" name="temCapaBrochura" class="custom-control-input" value="sim" checked="">
                              <label class="custom-control-label" for="temCapaBrochura">Tem capa brochura</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="temCapaBrochura2" name="temCapaBrochura" class="custom-control-input" value="não">
                              <label class="custom-control-label" for="temCapaBrochura2">Não tem capa brochura</label>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                     <button type="submit" class="btn btn-primary" id="vender">Adicionar</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

       <!-- Modal Drama-->
       <div class="modal fade" id="modalDrama" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <h5 class="modal-title" id="exampleModalLabel">Drama</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                     <span aria-hidden="true"><i class="fas fa-times"></i></span>
                  </button>
               </div>
               <form action="../components/drama/create.php" method="POST">
                  <div class="modal-body row">

                     <div class="col-md-12">
                        <input type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Nome" required>
                        <div class="form-row mb-4">
                           <div class="col">
                              <input type="number" id="valor" name="valor" class="form-control" onKeyPress="return(moeda(this,'.',',',event))" min="0" placeholder="Valor" required>
                           </div>
                           <div class="col">
                              <input type="number" id="quantidade" name="quantidade" class="form-control" placeholder="Quantidade" min="0" required>
                           </div>
                        </div>

                        <!-- Tem capa brochura -->
                        <div class="form-group">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="temCapaDura" name="temCapaDura" class="custom-control-input" value="sim" checked="">
                              <label class="custom-control-label" for="temCapaDura">Tem capa Dura</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="temCapaDura2" name="temCapaDura" class="custom-control-input" value="não">
                              <label class="custom-control-label" for="temCapaDura2">Não tem capa Dura</label>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                     <button type="submit" class="btn btn-primary" id="vender">Adicionar</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

   </body>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
