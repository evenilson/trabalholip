<?php
   require_once '../config/conexaobanco.php';
   $conectador = conexao();
   $qtdAdventure = mysqli_fetch_row(mysqli_query($conectador, "SELECT COUNT(id_aventura) FROM aventura WHERE quantidade > 0"));
   $qtdComedy = mysqli_fetch_row(mysqli_query($conectador, "SELECT COUNT(id_comedia) FROM comedia WHERE quantidade > 0"));
   $qtdDrama = mysqli_fetch_row(mysqli_query($conectador, "SELECT COUNT(id_drama) FROM drama WHERE quantidade > 0"));
?>
