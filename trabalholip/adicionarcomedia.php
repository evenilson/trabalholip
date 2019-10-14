
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Sistema Blibliotecário</title>
  <link rel="shortcut icon" href="Imagens/icon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <script type="text/javascript" src="js/scripts.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
</head>
<body>
<div class="container galeria">
    <h1 align="center" class="padding-h1">Sistema Blibliotecário</h1>
    <!-- Default form register -->
    <div class="row">
        <div class="col-sm-6 center">
        
        <form class="text-center border border-dark p-5" action="ManipulaComedia.php" method="post">

        <p class="h4 mb-4">Cadastro: livro de Comédia</p>

        <!-- Nome -->
        <input type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Nome" >

        <div class="form-row mb-4">
            <div class="col">
                <!-- Valor -->
                <input type="text" id="valor" name="valor" class="form-control" onKeyPress="return(moeda(this,'.',',',event))" placeholder="Valor">
            </div>
            <div class="col">
                <!-- Quantidade -->
                <input type="text" id="quantidade" name="quantidade" class="form-control" placeholder="Quantidade">
            </div>
        </div>

        <!-- Tem capa brochura -->
        <div class="form-check ">
            <input class="form-check-input" type="radio" name="temCapaBrochura" id="temCapaBrochura" value="sim" checked>
            <label class="form-check-label" for="temCapaBrochura">
                Tem capa brochura
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input " type="radio" name="temCapaBrochura" id="temCapaBrochura" value="não">
            <label class="form-check-label" for="temCapaBrochura">
                Não tem capa brochura
            </label>
        </div>

        <!-- Botão de cadastrar -->
        <button class="btn btn-info my-4 btn-block" type="submit">Cadastrar</button>

        </form>
      </div>
    </div>
    <center><a href="adicionarlivro.php" ><button type="button" class="btn btn-outline-primary padding-bottom">Voltar</button></center></a>
</div>
</body>
</html>