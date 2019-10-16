<?php
    require_once '../../../config/conexaobanco.php';
    $conectador = conexao();
    $resultadoAventura = mysqli_query($conectador, "SELECT * FROM aventura");
?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>YODALivraria</title>
      <link rel="shortcut icon" href="../../../assets/img/icon.png">
      <link rel="stylesheet" type="text/css" href="../../../assets/css/estilo.css">
      <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="../../../assets/css/fontawesome-free-5.11.2-web/css/all.css">
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
                        <img src="../../../assets/img/yoda_profile.jpg" class="profile img-responsive">
                        <span class="name-profile">Yoda Kamashi</span>
                        <a class="logout" href="">Sair</a>
                     </div>
                  </span>
            </div>
         </div>
      </nav>

      <div class="container">
         <div class="header text-center">
            <h1>Estoque</h1>
            <p>Aventura</p>
            <a class="btn btn-primary btn-sm" href="../../../pages/verEstoque.php">Selecionar outro gênero</a>
            <a class="btn btn-info btn-sm" href="../../../index.php">Home</a>
            <a class="btn btn-secondary btn-sm" href="../../../pages/adicionarLivro.php">Adicionar mais livros</a>
         </div> 
         <div class="row">
            <div class="col-md-12">
               <table id="employee_data" class="table table-striped table-bordered">
                  <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Preço</th> 
                        <th>Quantidade</th> 
                        <th>Ilustrações</th>
                        <th>Opções</th> 
                  </thead>
                  <tbody>
                     <?php while($linha = $resultadoAventura->fetch_array()){ ?>
                        <tr>
                           <td><?php echo $linha['id_aventura'] ?></td>
                           <td><?php echo $linha['nome'] ?></td>
                           <td>R$ <?php echo $linha['valor'] ?>,00</td>
                           <td><?php echo $linha['quantidade'] ?></td>
                           <td>
                              <?php
                                 $resultadoIlustracoes = mysqli_query($conectador, "SELECT ilustracao FROM ilustracoes AS i WHERE i.id_aventura = ". $linha['id_aventura']);
                                 while($illustration = $resultadoIlustracoes->fetch_array()){
                                    echo $illustration['ilustracao'].', ';
                                 }
                              ?>
                           </td>
                           <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdventure<?php echo $linha['id_aventura'] ?>"><i class="fas fa-pen"></i></button>
                              <a href="../delete.php?id_aventura=<?php echo $linha['id_aventura']?>" class="btn btn-info"><i class="far fa-trash-alt"></i></a> 
                           </td>
                        </tr>

                        <!-- Modal Adventure-->
                        <div class="modal fade" id="modalAdventure<?php echo $linha['id_aventura'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header text-center">
                                    <h5 class="modal-title" id="exampleModalLabel">Aventura</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                       <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                 </div>
                                 <form action="../edit.php" method="POST">
                                    <div class="modal-body row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="codigo">Código</label>
                                             <input type="number" class="form-control" name="id_aventura" value="<?php echo $linha['id_aventura'] ?>" readonly=“true”>
                                          </div>
                                          <div class="form-group">
                                             <label for="name">Nome</label>
                                             <input type="text" value="<?php echo $linha['nome'] ?>" id="nome" name="nome" class="form-control mb-4" placeholder="Nome" required>
                                          </div>
                                          <div class="form-row mb-4">
                                             <div class="col">
                                                <div class="form-group">
                                                   <label for="price">Preço</label>
                                                   <input type="number" value="<?php echo $linha['valor'] ?>" id="valor" name="valor" class="form-control" onKeyPress="return(moeda(this,'.',',',event))" min="0" placeholder="Valor" required>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="form-group">
                                                   <label for="price">Quantidade</label>
                                                   <input type="number" value="<?php echo $linha['quantidade'] ?>" id="quantidade" name="quantidade" class="form-control" placeholder="Quantidade" min="0" required>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                       <button type="submit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </body> 

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
   <script src="../../../assets/js/dataTable.js"></script>  
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
   <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</html>
