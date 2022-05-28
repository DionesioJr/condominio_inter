<!doctype html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="Conquiste condominios no condominiointer para aumentar a visibilidade do seu negócio usando o Inter condomínios" class="next-head" />
  <meta property="og:url" content="<?php echo BASE_URL; ?>" class="next-head" />
  <meta property="og:type" content="website" class="next-head" />
  <meta property="og:title" content="Inter condomínios | Login" class="next-head" />
  <meta property="og:description" content="Conquiste condominios no condominiointer para aumentar a visibilidade do seu negócio usando o Inter condomínios" class="next-head" />
  <meta property="og:image" content="<?php echo BASE_URL; ?>/assets/img/logo.png" class="next-head" />
  <meta property="og:image:alt" content="Inter condomínios" class="next-head" />
  <meta property="og:image:width" content="1200" class="next-head" />
  <meta property="og:image:height" content="1200" class="next-head" />
  <meta property="og:locale" content="pt_BR" class="next-head" />
  <meta property="og:site_name" content="Inter condomínios" class="next-head" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/main.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/utilities.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <!-- Alerta Notificação -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <title>Inter condomínios | Login</title>
  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.ico" />
</head>

<body>

  <?php
  Alert::show();
  ?>
  <div class="px-5 py-5 p-lg-0 h-screen bg-surface-secondary d-flex flex-column justify-content-center">
    <div class="d-flex justify-content-center">
      <div class="col-12 col-md-9 col-lg-6 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
        <div class="row">
          <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
            <div class="text-center mb-12">
              <h3 class="display-5">🔐</h3>
              <h1 class="ls-tight font-bolder mt-6">Redefinição de senha</h1>
              <p class="mt-2">Digite seu e-mail e enviaremos um link de redefinição</p>
            </div>
            <form action="<?php echo  BASE_URL; ?>/email/recoverPassword" method="POST">
              <div class="mb-5"><label class="form-label" for="email">Endereço de email</label> <input type="email" name="email" class="form-control" id="email" placeholder="Seu endereço de email"></div>
              <div><button class="btn btn-primary w-full">Enviar</button></div>
            </form>
            <div class="position-lg-absolute bottom-0 end-0 my-8 mx-12 text-center text-lg-end">
              <small>Já tem uma conta?</small>
              <a href="<?php echo BASE_URL; ?>/logins" class="text-warning text-sm font-semibold">Entrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>