<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/main.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/utilities.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <!-- Alerta Notificação -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <title>Inter condomínios</title>
  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.ico" />

</head>

<body cz-shortcut-listen="true">
  <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <?php include_once '_navigation.php'; ?>

    <div class="flex-lg-1 h-screen overflow-y-lg-auto">
      <?php include_once '_navigationtop.php'; ?>
      <?php
      Alert::show();
      new LoadingView($view, $data);
      ?>

      <?php include_once '_footer.php'; ?>
    </div>

  </div>





  <!-- JAVASCRIPT
    ================================================== -->

  <script src="<?php echo BASE_URL; ?>/assets/js/main.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>