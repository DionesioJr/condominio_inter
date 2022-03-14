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
                    <input type="hidden" id="id" name="id" value="<?php echo $data['users']['id']; ?>">

                    <fieldset>
                        <legend>Dados Pessoais</legend>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="Nome Completo">Nome Completo</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['users']['name']; ?>" required placeholder="João Alves">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" required class="form-control">
                                    <option value="1" <?php if ($data['users']['status'] == '1') echo "selected"; ?>>Ativo</option>
                                    <option value="2" <?php if ($data['users']['status'] == '2') echo "selected"; ?>>Atraso</option>
                                    <option value="0" <?php if ($data['users']['status'] == '0') echo "selected"; ?>>Desativado</option>
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
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['users']['email']; ?>" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Senha</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['users']['senha']; ?>" placeholder="Senha">
                            </div>
                        </div>

                        <label for="">Tipo da conta</label>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="users" name="is_admin" checked value="0" class="custom-control-input" <?php if ($data['users']['is_admin'] == 0) echo "checked"; ?>>
                                    <label class="custom-control-label" for="users">Condômino</label><br>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="admin" name="is_admin" value="1" class="custom-control-input" <?php if ($data['users']['is_admin'] == 1) echo "checked"; ?>>
                                    <label class="custom-control-label" for="admin">Adminstrador</label><br>
                                </div>

                            </div>
                        </div>

                    </fieldset>

                    <br>
                    <button type="submit" class="btn btn-warning"><?php echo $data['button_submit'] ?></button>
                </form>

            </div>
        </div>

    </div>
</div>


<h5 class="offcanvas-title" id="offcanvasCreateLabel">Create a new user</h5><button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body vstack gap-5">
    <div class="row g-5">
        <div class="col-md-6">
            <div><label class="form-label">First name</label> <input type="text" class="form-control"></div>
        </div>
        <div class="col-md-6">
            <div><label class="form-label">Last name</label> <input type="text" class="form-control"></div>
        </div>
    </div>
    <div><label class="form-label">Bio</label> <textarea class="form-control" placeholder="Your email" rows="2"></textarea></div>
    <div><label class="form-label" for="formInputExample">Photo</label>
        <div class="d-flex align-items-center"><a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white"><img alt="..." src="/img/people/img-6.jpg"></a>
            <div class="ms-5"><label for="file-upload" class="btn btn-sm btn-neutral"><span>Upload</span> <input type="file" name="file-upload" id="file-upload" class="visually-hidden"></label> <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger"><span class="pe-2"><i class="bi bi-trash"></i> </span><span>Remove</span></a></div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6"><label class="form-label" for="last_name">Email address</label> <input type="email" class="form-control"></div>
        <div class="col-md-6"><label class="form-label" for="last_name">Phone number</label> <input type="tel" class="form-control"></div>
    </div>
    <div>
        <div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="switchMakeAdmin" id="switchMakeAdmin"> <label class="form-check-label ms-2" for="switchMakeAdmin">Make admin</label></div>
    </div>
</div>
<div class="modal-footer py-2 bg-surface-secondary"><button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> <button type="button" class="btn btn-sm btn-success">Save</button></div>
</div>