<?php
   require_once '../../../config/conexaobanco.php';
   $conectador = conexao();
   $sql = "SELECT * FROM comedia";
   $resultado = mysqli_query($conectador, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>YODALivraria</title>
      <link rel="shortcut icon" href="../../../assets/img/icon.png">
      <link rel="stylesheet" type="text/css" href="../../../assets/css/estilo.css">
      <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
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
         <div class="jumbotron">
            <h1>Livros de comédia</h1>
            <a class="btn btn-warning" href="../../../pages/venderLivro.php"><i class="fas fa-chevron-left"></i> Voltar</a>
         </div> 
         <div class="row">
            <div class="col-md-12">
               <table id="employee_data" class="text-center p-5 table table-bordered table-hover table table-sm table-responsive{-sm|-md|-lg|-xl} table-striped">
                  <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Preço</th> 
                        <th>Quantidade</th> 
                        <th>Capa brochura</th>
                        <th>Vender</th> 
                  </thead>
                  <tbody>
                     <?php while($linha = $resultado->fetch_array()){ ?>
                        <tr>
                           <td><?php echo $linha['id_comedia'] ?></td>
                           <td><?php echo $linha['nome'] ?></td>
                           <td>R$ <?php echo $linha['valor'] ?>,00</td>
                           <td><?php echo $linha['quantidade'] ?></td>
                           <td><?php echo $linha['capa_brochura'] ?></td>
                           <td>
                              <?php  
                                 if($linha['quantidade'] == 0){
                                    echo '<button type="button" style="cursor: not-allowed;" class="btn btn-primary disabled"><i class="fas fa-coins"></i> Vender</button>';
                                 }else{
                              ?>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalVender<?php echo $linha['id_comedia'] ?>"><i class="fas fa-coins"></i> Vender</button>   
                              <?php
                                 }
                              ?>
                              </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="modalVender<?php echo $linha['id_comedia'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header text-center">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $linha['nome']; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                       <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                 </div>
                                 <form action="../salesFunction.php" method="POST">
                                    <div class="modal-body row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="qtd">Código</label>
                                             <input type="number" class="form-control" name="id_comedia" value="<?php echo $linha['id_comedia'] ?>" readonly=“true”>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="qtd">Quantidade em estoque: <?php echo $linha['quantidade'] ?></label>
                                             <input type="number" class="form-control" name="qtdVender" required placeholder="<?php echo $linha['quantidade'] ?>" max="<?php echo $linha['quantidade'] ?>" min="0">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                       <button type="submit" class="btn btn-primary" id="vender">Vender</button>
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
   <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
   <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
