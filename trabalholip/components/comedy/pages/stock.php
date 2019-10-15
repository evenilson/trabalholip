<?php
    require_once '../../../config/conexaobanco.php';
    $conectador = conexao();
    $sql = "SELECT * FROM comedia";
    $resultado = mysqli_query($conectador, $sql);
?>

<!DOCTYPE html>
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
               <h1>Estoque - comédia</h1>
               <a class="btn btn-warning" href="../../../pages/venderLivro.php"><i class="fas fa-chevron-left"></i> Voltar</a>
            </div> 
            <div class="row">
               <div class="col-md-12">
                  <table id="employee_data" class="text-center p-5 table table-bordered table-dark table-hover table table-sm table-responsive{-sm|-md|-lg|-xl} table-striped">
                  <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Preço</th> 
                        <th>Quantidade</th> 
                        <th>Capa brochura</th> 
                  </thead>
                  <tbody>
                        <?php 
                           while($linha = $resultado->fetch_array())
                           {
                              echo '<tr>';
                              echo '<td>'. $linha['id_comedia'] .'</td>';
                              echo '<td>'. $linha['nome'] .'</td>';
                              echo '<td>'.'R$ '. $linha['valor']. ',00'.'</td>';
                              echo '<td>'. $linha['quantidade'] .'</td>';
                              echo '<td>'. $linha['capa_brochura'] .'</td>';
                              echo '</tr>';   
                           }
                           mysqli_close($conectador);
                        ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
   <script src="../../../assets/js/dataTable.js"></script>  
   <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
   <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>          
</html>
