<div class="page-header">
    <div class="row">
        <div class="col">
            <h3><?php echo $data['title'] ?></h3>
        </div>
        <div class="row justify-content-end">
            <div class="col">
                <a href="javascript:history.back()" type="button" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>

<div class=" bs-docs-section">
    <div class="row">
        <div class="col-lg-12">
            <div class="bs-component">
                <form action="<?php echo $data['action']; ?>" method="post">
                    <input type="hidden" id="id" name="id" value="<?php echo $data['condominio']['id']; ?>">

                    <fieldset>
                        <legend>Dados Pessoais</legend>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="Nome Completo">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $data['condominio']['nome']; ?>" required placeholder="João Alves">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Nome Completo">Idade</label>
                                <input type="number" class="form-control" required id="idade" name="idade" value="<?php echo $data['condominio']['idade']; ?>" placeholder="18">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="Nome Completo">Peso</label>
                                <input type="number" class="form-control" required id="peso" name="peso" value="<?php echo $data['condominio']['peso']; ?>" placeholder="70">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="Nome Completo">Altura</label>
                                <input type="number" class="form-control" required id="altura" name="altura" value="<?php echo $data['condominio']['altura']; ?>" placeholder="188">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="sexo">Sexo</label>
                                <select id="sexo" name=sexo required class="form-control">
                                    <option value="m" <?php if ($data['condominio']['sexo'] == 'm') echo "selected"; ?>>Masculino</option>
                                    <option value="f" <?php if ($data['condominio']['sexo'] == 'f') echo "selected"; ?>>Feminino</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" required class="form-control">
                                    <option value="1" <?php if ($data['condominio']['status'] == '1') echo "selected"; ?>>Ativo</option>
                                    <option value="2" <?php if ($data['condominio']['status'] == '2') echo "selected"; ?>>Atraso</option>
                                    <option value="0" <?php if ($data['condominio']['status'] == '0') echo "selected"; ?>>Desativado</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <br>
                    <hr>
                    <br>


                    <fieldset>
                        <legend>Dados da Conta</legend>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['condominio']['email']; ?>" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $data['condominio']['senha']; ?>" placeholder="Senha">
                            </div>
                        </div>

                        <label for="">Tipo da conta</label>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="condominio" name="tipo" checked value="1" class="custom-control-input" <?php if ($data['condominio']['tipo'] == 1) echo "checked"; ?>>
                                    <label class="custom-control-label" for="condominio">Condomínio</label><br>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="admin" name="tipo" value="2" class="custom-control-input" <?php if ($data['condominio']['tipo'] == 2) echo "checked"; ?>>
                                    <label class="custom-control-label" for="admin">Adminstrador</label><br>
                                </div>

                            </div>
                        </div>

                    </fieldset>

                    <!-- <br>
                    <hr>
                    <br>
                    <fieldset>
                        <legend>Endereço</legend>
                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado</label>
                                <select id="inputEstado" class="form-control">
                                    <option selected>Escolher...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCEP">CEP</label>
                                <input type="text" class="form-control" id="inputCEP">
                            </div>
                        </div>
                    </fieldset> -->

                    <br>
                    <button type="submit" class="btn btn-warning"><?php echo $data['button_submit'] ?></button>
                </form>

            </div>
        </div>

    </div>
</div>