
  <nav class="navbar navbar-light position-lg-sticky top-lg-0 d-none d-lg-block overlap-10 flex-none bg-white border-bottom px-0 py-3" id="topbar">
    <div class="container-fluid">
      <div class="hstack gap-2">
      </div>
      <div class="navbar-user d-none d-sm-block">
        <div class="hstack gap-3 ms-4">

          <div class="dropdown"><a class="d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
              <div>
                <div class="avatar avatar-sm bg-warning rounded-circle text-white"><img alt="..." src="<?php echo BASE_URL; ?>/assets/img/avata.png"></div>
              </div>
              <div class="d-none d-sm-block ms-3"><span class="h6"><?php echo $_SESSION['user']['name'] ?? ''; ?></span></div>
              <div class="d-none d-md-block ms-md-2"><i class="bi bi-chevron-down text-muted text-xs"></i></div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>/"><i class="bi bi-house me-3"></i>Inicio </a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo BASE_URL; ?>/settings"><i class="bi bi-gear me-3"></i>Configuração </a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo BASE_URL; ?>/logins/logout"><i class="bi bi-reply me-3"></i>Sair</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>