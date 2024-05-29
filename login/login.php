<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .logo{
    width: 100px;
    display: block;
    margin:0 auto 2rem;
  }
  .vh-100{
    min-height: 100vh;
  }
</style>
<body>
<section class="vh-100" style="background-color: #b1eb95;">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-sm-block">
              <img src="../imagens/logo.avif"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <form action="verify/logar.php" method="POST" data-parsley-validate>
          <label for="nome"></label>
          <input type="text" class="form-control mb-3" id="login" name="login" placeholder="nome" required>
          <label for="password"></label>
          <input type="password" class="form-control mb-3" id="senha" name="senha" placeholder="senha" required>
          <div class="row mb-4">
        <div class="col d-flex justify-content-center">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example31" />
          <label class="form-check-label" for="form2Example31"> mostra senha </label>
        </div>
    </div>
    <div class="pt-1 mb-4">
        <button type="submit" value="Entrar" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" >Logar</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


  <script src="../vendor/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../vendor/node_modules/parsleyjs/dist/parsley.min.js"></script>
  <script src="../vendor/node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
  <link rel="stylesheet" href="../vendor/node_modules/parsleyjs/src/parsley.css">
  </body>
</html>