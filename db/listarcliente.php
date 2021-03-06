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
    <title>Menu - Cliente</title>
    <link rel="icon" href="../img/icons8-carro-64.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <!-- Principal CSS do Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/all.css" rel="stylesheet">
    <script defer src="../js/all.js"></script>
    <!-- Estilos customizados para esse template -->
    <link href="../form-validation.css" rel="stylesheet">

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
                <a class="nav-link text-danger" href="listarcliente.php">Dados usu??rios</a>
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
    <body> 
    
    
    <?php 
      $consultar = "SELECT *from tbcadcliente";
      $executar = mysqli_query($conn, $consultar);
      while ($linha = mysqli_fetch_array($executar)) {
    ?>

    <form class="row g-5 needs-validation mt-0 ml-1 ml-2" novalidate action="alterarcliente.php" method="POST">
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">ID</label>
        <input type="text" class="form-control bg-danger border-danger text-light" id="validationCustom01" name="cxid" value="<?php echo $linha['id']; ?>" readonly>    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nome</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxnome" value="<?php echo $linha['nome']; ?>" >    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Sobrenome</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxsobrenome" value="<?php echo $linha['sobrenome']; ?>" >    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">RG</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxrg" value="<?php echo $linha['rg']; ?>" >    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">CPF</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxcpf" value="<?php echo $linha['cpf']; ?>" >    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nickname</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxnickname" value="<?php echo $linha['nickname']; ?>" >    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">E-mail</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxemail" value="<?php echo $linha['email']; ?>" >    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Endere??o</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxendereco" value="<?php echo $linha['endereco']; ?>" >    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Cidade</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxcidade" value="<?php echo $linha['cidade']; ?>" >    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Estado</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxestado" value="<?php echo $linha['estado']; ?>" >    
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">CEP</label>
        <input type="text" class="form-control border-danger" id="validationCustom01" name="cxcidade" value="<?php echo $linha['cep']; ?>" >    
      </div>
      <div class="col-md-4 mb-3 mt-0">
            <button class="btn btn-outline-success" name="cxbusca" type="submit">Alterar <i class="fas fa-pen-alt"></i></button>
          <a href="excluircliente.php?id=<?php echo $linha['id']; ?>" class="btn btn-outline-danger" type="submit">Deletar <i class="fas fa-trash-alt"></i></a>      
      </div>
      <hr class="mb-1">
      <?php } ?>
    </form><!--listar-->


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