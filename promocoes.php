<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> 
    <link href="css/features.css" rel="stylesheet">
    <script defer src="js/all.js"></script>
    <title>Promoções</title>
    <link rel="icon" href="img/icons8-carro-64.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Velharia TECH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historia.php">Nossa história</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="promocoes.php">Promoções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>
        <form class="d-flex">                   
          <a href="login.php" class="btn btn-outline-danger" type="submit">Acesso</a>
        </form>
      </div>
    </div>
  </nav>
</header>
<main>
<div class="pricing p-5 pb-md-3 mx-auto text-center mt-5 ml-1 ml-2">
    <h2 class="display-4 fw-normal">Nossos planos</h2>
    <p class="fs-5 text-muted">Escolha um dos nossos planos para você cuidar do seu velhinho todo mês</p>
</div>


    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center ml-1 ml-2">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Avulso</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$119.99<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Lavagem</li>
              <li>Aspiração</li>
              <li></li>
              <li></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-danger">Quero esse!</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Mensal</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$159.99<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Lavagem</li>
              <li>Aspiração</li>
              <li>Enceramento</li>
              <li></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-danger">Quero esse!</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3 text-white bg-danger border-danger">
            <h4 class="my-0 fw-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$229.99<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Lavagem</li>
              <li>Aspiração</li>
              <li>Enceramento</li>
              <li>Polimento</li>
              <li>Check-up do motor</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-danger">Quero esse!</button>
          </div>
        </div>
      </div>
    </div>

  <!-- FOOTER -->
  <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-danger">
  <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://pt-br.facebook.com/"><i class="fab fa-facebook-square"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.google.com/intl/pt/gmail/about/#"><i class="fas fa-envelope-square"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php"><i class="fas fa-phone-square"></i></a>
        </li>
      </ul>
  </div>
</nav>
</main>
  <!-- Bootstrap  -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>     
  </body>
</html>
