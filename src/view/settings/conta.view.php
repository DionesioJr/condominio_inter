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


            <form action="<?php echo $data['action']; ?>" method="post">

              <fieldset>
                <legend>Dados Pessoais</legend>
                <div class="form-row">
                  <div class="form-group mb-5 col-md-8">
                    <label for="Nome Completo">Nome Completo</label>
                    <input type="text" class="form-control" id="" required placeholder="João Alves">
                  </div>
                  <div class="form-group mb-5 col-md-6">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="" placeholder="Email">
                  </div>
                  <div class="form-group mb-5 col-md-6">
                    <label for="">Senha</label>
                    <input type="password" class="form-control" id="" placeholder="Senha">
                  </div>
                </div>

              </fieldset>

              <br>
              <button type="submit" class="btn btn-primary">Salvar</button>
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
                  <form action="<?php echo BASE_URL; ?>/profile/updatepassword" method="POST">

                    <!-- New password -->
                    <div class="form-group mb-5">

                      <!-- Label -->
                      <label>
                        Nova senha
                      </label>

                      <!-- Input -->
                      <input type="password" name="password_1" class="form-control">

                    </div>

                    <!-- Confirm new password -->
                    <div class="form-group mb-5">

                      <!-- Label -->
                      <label>
                        Confirme a nova senha
                      </label>

                      <!-- Input -->
                      <input type="password" name="password_2" class="form-control">

                    </div>

                    <!-- Submit -->
                    <input class="btn btn-block btn-primary lift" type="submit" value="Atualizar Senha">


                  </form>

                </div>
              </div> <!-- / .row -->

              <!-- Divider -->
              <hr class="my-5">      
            </div>
        
          </div>


          <div class="row justify-content-between ">
            <div class="col-12 col-md-6">

              <!-- Heading -->
              <h4>
                Deletar sua conta
              </h4>

              <!-- Text -->
              <p class="small text-muted mb-md-0">
                A exclusão de sua conta é uma ação permanente e não será recuperável após a conclusão.
              </p>

            </div>
            <div class="col-auto">

              <!-- Button -->
              <a href="configuracao/apagar" class="btn btn-danger">
                Apagar conta
              </a>

            </div>
          </div>


          <br><br>

        </div>
      </div> <!-- / .row -->
    </div>
  </div>
</main>