<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Cadastro sistema</title>
    <link rel="icon" href="../img/icons8-carro-64.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/all.css" rel="stylesheet">
    <script defer src="../js/all.js"></script>

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
    
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="cadsistema.php" method="POST">
    <h1 class="h3 mb-3 fw-normal">Cadastrar colaborador!</h1>
    <div class="form-floating">
      <input type="nome" class="form-control rounded-top border border-danger rounded-0 border-bottom-0" id="floatingInput" name="cxnome" placeholder="Anderson Giusti" required>
      <label for="floatingInput">Nome...</label>
    </div>
    <div class="form-floating">
      <input type="cargo" class="form-control border border-danger rounded-0 border-bottom-0" id="floatingInput" name="cxusuario" placeholder="Admistrador" required>
      <label for="floatingInput">Usuário...</label>
    </div>
    <div class="form-floating">
      <input type="cargo" class="form-control border border-danger rounded-0 border-bottom-0" id="floatingInput" name="cxcargo" placeholder="Admistrador" required>
      <label for="floatingInput">Cargo...</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control border border-danger rounded-0" id="floatingInput" name="cxlogin" placeholder="name@example.com" required>
      <label for="floatingInput">E-mail...</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control rounded-bottom border border-danger rounded-0" id="floatingPassword" name="cxsenha" placeholder="Password" required>
      <label for="floatingPassword">Senha...</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <a href="../index.php" class="text-danger text-decoration-none" type="submit">Home</a>
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-danger" type="submit">CADASTRAR</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
