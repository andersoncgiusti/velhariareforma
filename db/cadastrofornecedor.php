<?php
  SESSION_START();
  if(isset($_SESSION["nomeusuario"])){
    $use = $_SESSION["nomeusuario"];  
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/icons8-carro-64.png">
    <title>Cadastro fornecedor</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <!-- Principal CSS do Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/all.css" rel="stylesheet">
    <script defer src="../js/all.js"></script>
    <!-- Estilos customizados para esse template -->
    <link href="../form-validation.css" rel="stylesheet">
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
              <a href="cadastrar.php" class="btn btn-outline-primary ml-2" type="submit">Voltar <i class="fas fa-undo-alt"></i></a>       
              <a href="fimsessao.php" class="btn btn-outline-light" type="submit">Sair</a>            
          </div>
        </div>
      </nav>
    </header>

  <body class="bg-light">


    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4">
        <h2>Formulário de cadastro para fornecedores</h2>
        <p class="lead">Realize seu cadastro e forneça seus serviços</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">       

          
        </div>
        <div class="col-md-10-center order-md-1">
          <h4 class="mb-3-center text-warning">Cadastre seus dados abaixo:</h4>

          <form action="inserirdadosfornecedor.php" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome</label>
                <input type="text" class="form-control border-warning" id="primeiroNome" name="cxnome" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control border-warning" id="sobrenome" name="cxsobrenome" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="rg">RG</label>
                <input type="text" class="form-control border-warning" id="sobrenome" name="cxrg" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="rg">CPF</label>
                <input type="text" class="form-control border-warning" id="sobrenome" name="cxcpf" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="nickname">Nickname</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text border-warning bg-warning text-light">@</span>
                </div>
                <input type="text" class="form-control border-warning" id="nickname" name="cxnickname" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Seu nickname é obrigatório.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control border-warning" id="email" name="cxemail" placeholder="fulano@exemplo.com" required>
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
              </div>
            </div>

            <div class="mb-3">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control border-warning" id="endereco" name="cxendereco" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="cep">Cidade</label>
                <input type="text" class="form-control border-warning" id="cep" name="cxcidade" required>
                <div class="invalid-feedback">
                  É obrigatório inserir uma cidade.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="cep">Estado</label>
                <input type="text" class="form-control border-warning" id="cep" name="cxestado" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um estado.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control border-warning" id="cep" name="cxcep" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um CEP.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            
         
            <button class="btn btn-warning btn-lg btn-block" type="submit">CADASTRAR</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021</p>        
      </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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