<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Promoções</title>
    <link rel="icon" href="../img/icons8-carro-64.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/all.css" rel="stylesheet">
    <script defer src="../js/all.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">  

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

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
  <form action="cadastropromocoes.php" method="POST">
    <h1 class="h3 mb-3 fw-normal">Cadastrar e-mail</h1>
    <div class="form-floating">
      <input type="email" class="form-control border border-danger" id="floatingInput" name="cxemail" placeholder="name@example.com" required>
      <label for="floatingInput">E-mail...</label>
    </div>
    <div class="form-floating mb-3">
      <input type="name" class="form-control border border-danger rounded-0 rounded-bottom" id="floatingPassword" name="cxnome" placeholder="Password" required>
      <label for="floatingPassword">Nome...</label>
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