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
    <title>Menu - Home</title>
    <link rel="icon" href="../img/icons8-carro-64.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <!-- Principal CSS do Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/all.css" rel="stylesheet">
    <script defer src="../js/all.js"></script>
    <!-- Estilos customizados para esse template -->
    <link href="../form-validation.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
    <?php include_once 'conexao.php'; ?>
  <head>   

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    

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
            <form class="d-flex" action="buscarclientenome.php" method="POST">
              <input class="form-control ml-2" type="text" placeholder="Pesquisa clientes.." name="cxbuscar" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0 ml-2" type="submit">Pesquisar</button>
               <a href="cadastrar.php" class="btn btn-outline-primary ml-2" type="submit">Cadastrar</a>      
              <a href="fimsessao.php" class="btn btn-outline-light" type="submit">Sair</a>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <body class="text-center">
    

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal">Olá, <?php echo $use ?></h1> 
      <h3 class="h3 mb-3 fw-normal text-danger">navegue pelo menu</h3>    
    </main> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="sidebars.js"></script>
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