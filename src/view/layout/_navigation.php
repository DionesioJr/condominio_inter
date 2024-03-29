<style>
  @media (min-width: 992px) {
    .navbar-expand-lg .navbar-brand img {
      height: 200px;
    }
  }

  /* .nav-link {
    color: #fff !important;
  }

  .bi {
    color: #fff !important;
  } */
</style>

<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg scrollbar" id="sidebar">
  <div class="container-fluid">
    <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand d-inline-block py-lg-2 mb-lg-5 px-lg-6 me-0 d-none d-sm-block d-md-block text-white " href="<?php echo BASE_URL; ?>">
      <div class="align-middle">

        <h1 class="font-weight-bold" style="color: #222222 !important;">INTER</h1>
        <h4 class="font-weight-light" style="color: #222222 !important;">Condomínios</h4>

      </div>

      <!-- <img src="<?php echo BASE_URL; ?>/assets/img/logo2.png" style="height: 13rem;" alt="..."> -->
    </a>
    <div class="navbar-user d-lg-none">
      <div class="dropdown"><a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar-parent-child"><img alt="..." src="" class="avatar avatar- rounded-circle"> <span class="avatar-child avatar-badge bg-success"></span></div>
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar"><a href="#" class="dropdown-item">Profile</a> <a href="#" class="dropdown-item">Settings</a> <a href="#" class="dropdown-item">Billing</a>
          <hr class="dropdown-divider"><a href="#" class="dropdown-item">Logout</a>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="sidebarCollapse">
      <ul class="navbar-nav">

        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/messages"><i class="bi bi-envelope"></i>Mensagem</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/finance""><i class=" bi bi-cash"></i>Financeiro</a></li>
        <?php

        if (!empty($_SESSION['user']['is_admin'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>/condominiums"> <i class="bi bi-briefcase"></i> Condomínios</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/users"><i class="bi bi-people"></i> Usuários</a></li>
        <?php } ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/settings"><i class="bi bi-gear"></i> Configuração</a></li>
      </ul>
      <!-- <hr class="navbar-divider my-4 opacity-70"> -->

    </div>
  </div>
</nav>