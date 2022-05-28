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

  <div class="px-5 py-5 p-lg-0 min-h-screen bg-surface-secondary d-flex flex-column justify-content-center">
    <div class="d-flex justify-content-center">
      <div class="col-lg-5 col-xl-4 p-12 p-xl-20 position-fixed start-0 top-0 h-screen overflow-y-hidden bg-primary d-none d-lg-flex flex-column">
        <a class="d-block" href="#"><img src="<?php echo BASE_URL; ?>/assets/img/logo-blue.png" class="" style="width: 14rem;" alt="Inter condomínios" /></a>
        <div class="mt-32 mb-20">
          <h1 class="ls-tight font-bolder display-6 text-white mb-5">
            Vamos construir algo incrível hoje.
          </h1>
          <p class="text-white text-opacity-80">
            Vem com a gente! Juntos iremos realizar o gerenciamento do seu condomínio.
        </div>
      </div>
      <div class="col-12 col-md-9 col-lg-7 offset-lg-5 border-left-lg min-h-screen d-flex flex-column justify-content-center position-relative">
        <div class="py-lg-16 px-lg-20">
          <div class="row">
            <div class="col-lg-10 col-md-9 col-xl-6 mx-auto ms-xl-0">
              <div class="mt-10 mt-lg-5 mb-6 d-lg-block">
                <span class="d-inline-block d-lg-block h1 mb-4 mb-lg-6 me-3">👋</span>
                <h1 class="ls-tight font-bolder h2">É bom te ver!</h1>
              </div>

              <form action="<?php echo  BASE_URL; ?>/logins/authentication" method="POST">
                <div class="mb-5">
                  <label class="form-label" for="email">Email </label>
                  <input type="email" class="form-control" name="email" id="email" value="" placeholder="" />
                </div>
                <div class="mb-5">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <label class="form-label" for="password">Senha</label>
                    </div>
                    <div class="mb-2">
                      <a href="<?php echo  BASE_URL; ?>/logins/recover" class="text-sm text-muted text-primary-hover text-underline">Esqueceu a senha?</a>
                    </div>
                  </div>
                  <input type="password" class="form-control" name="password" id="password" autocomplete="current-password" />
                </div>
                <div>
                  <button class="btn btn-primary w-full">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="position-lg-absolute bottom-0 end-0 my-8 mx-12 text-center text-lg-end">
          <small>Ainda não tem uma conta ? </small>
          <a href="<?php echo BASE_URL; ?>/logins/create" class="text-warning text-sm font-semibold">Inscrever-se</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>