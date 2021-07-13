<?php
  SESSION_START();
  if(isset($_SESSION["nomeusuario"])){
    $use = $_SESSION["nomeusuario"];  
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Cadastro</title>
    <link rel="icon" href="../img/icons8-carro-64.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/all.css" rel="stylesheet">
    <script defer src="../js/all.js"></script>   

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a href="menu.php" class="navbar-brand">MENU</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a href="menu.php" class="nav-link text-light">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="listarcliente.php">Dados usuários</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-warning" href="listarfornecedor.php">Dados fornecedores</a>
              </li>
            </ul>      
              <a href="fimsessao.php" class="btn btn-outline-light" type="submit">Sair</a>
          </div>
        </div>
      </nav>
    </header>
  <body>
    
<main class="form-signin text-center">
  <form>
    <img class="mb-4">
    <a href="cadastrocliente.php" class="w-100 btn btn-lg btn-danger">CLIENTE</a>
    <a href="cadastrofornecedor.php" class="mt-5 w-100 btn btn-lg btn-warning" type="submit">FORNECEDOR</a>    
  </form>
</main> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  }else{
    echo "<script>
            alert('Acesso negado, efetue o login!');
            window.location.href = '../login.php'; 
          </script>";
      };
?>