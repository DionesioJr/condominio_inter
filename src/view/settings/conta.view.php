<main class="py-6 bg-surface-secondary">
  <div class="container">

    <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="mb-2">
            Configuração
          </h2>

        </div>
      </div>
    </div>

    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">

          <div class="bs-component">


            <form action="<?php echo BASE_URL ;?>/settings/updateNameAndEmail" method="post">

              <fieldset>
                <legend>Dados Pessoais</legend>
                <div class="form-row">
                  <div class="form-group mb-5 col-md-8">
                    <label for="Nome Completo">Nome Completo</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $data['users']['name']; ?>" id="" required>
                  </div>
                  <div class="form-group mb-5 col-md-6">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $data['users']['email']; ?>" id="">
                  </div>

                </div>

              </fieldset>

              <br>
              <button type="submit" class="btn btn-primary">Atualizar</button>
              <hr>

              <br>
            </form>

          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-12">

          <fieldset>
            <legend>
              Atualize sua senha
            </legend>
          </fieldset>

          <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-12">
              <div class="row">
                <div class="col-12 col-md-6 order-md-2">

                  <!-- Card -->
                  <div class="card bg-light border ml-md-4">
                    <div class="card-body">

                      <!-- Text -->
                      <p class="mb-2">
                        Atenção
                      </p>

                      <!-- Text -->
                      <p class="small text-muted mb-2">
                        A senha deve ser modificada com a mesma senha usada para fazer login no condominiointer, para que a automação não pare.
                      </p>

                    </div>
                  </div>

                </div>

                <div class="col-12 col-md-6">

                  <!-- Form -->
                  <form action="<?php echo BASE_URL; ?>/settings/updatepassword" method="POST">

                    <!-- New password -->
                    <div class="form-group mb-5">

                      <!-- Label -->
                      <label>
                        Nova senha
                      </label>

                      <!-- Input -->
                      <input type="password" name="password1" class="form-control" onblur="validate();" name="password1" id="password1" value="">

                    </div>

                    <!-- Confirm new password -->
                    <div class="form-group mb-5">

                      <!-- Label -->
                      <label>
                        Confirme a nova senha
                      </label>

                      <!-- Input -->
                      <input type="password" name="password2" class="form-control" onblur="validate();" name="password2" id="password2" value="">

                    </div>

                    <!-- Submit -->
                    <input class="btn btn-block btn-primary lift" type="submit" id="update_password" disabled value="Atualizar Senha">


                  </form>

                </div>
              </div> <!-- / .row -->

              <!-- Divider -->
              <hr class="my-5">
            </div>

          </div>


          <div class="row justify-content-between ">
            <div class="col-12 col-md-6">


              <fieldset>
                <legend>
                  Deletar sua conta
                </legend>
              </fieldset>

              <!-- Text -->
              <p class="small text-muted mb-md-0">
                A exclusão de sua conta é uma ação permanente e não será recuperável após a conclusão.
              </p>

            </div>
            <div class="col-auto">

              <a data-bs-toggle="modal" data-bs-target="#excluir-conta-modal" type="button" class="btn btn-danger">Apagar conta</a>

              <div class="modal fade" id="excluir-conta-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Você quer deletar definitivamente essa conta ?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <div class="col-sm-12 text-center">

                        <p>Atenção! Ao excluir todos os dados serão apagados, impossivel de ser revertidos.</p>

                        <br />
                        <img src="<?php echo BASE_URL; ?>/assets/img/illustration/undraw_warning_cyit.svg" width="200px" class="img-responsive" alt="">
                        <br />
                        <br />
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <a href="<?php echo BASE_URL; ?>/settings/destroy/" type="button" class="btn btn-danger">Sim, deletar condomínio</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>


          <br><br>

        </div>
      </div> <!-- / .row -->
    </div>
  </div>
</main>

<script>
  function validate() {

    let password1 = $('#password1').val();
    let password2 = $('#password2').val();

    if (password1 === password2 & password1 != undefined) {
      $('#update_password').prop('disabled', false);
    } else {
      $('#update_password').prop('disabled', true);

    }

  }

  $(document).ready(function() {

    $("#password2").bind('paste', function(e) {
      e.preventDefault();
    });

  });
</script>