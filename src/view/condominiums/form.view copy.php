<div class="offcanvas offcanvas-end w-full w-lg-2/5" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
    <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
        <h5 class="offcanvas-title" id="offcanvasCreateLabel">Adicionar condomínio </h5><button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body vstack gap-5">
        <div>
            <label class="form-label" for="formInputExample">Logo</label>
            <div class="d-flex align-items-center">
                <a href="#" class="avatar avatar-lg rounded-circle bg-secondary  text-white">
                    <img src="<?php echo BASE_URL; ?>/assets/img/logo2.png" alt="...">
                </a>
                <div class="ms-5">
                    <label for="file-upload" class="btn btn-sm btn-neutral"><span>Atualizar</span>
                        <input type="file" name="file-upload" id="file-upload" class="visually-hidden">
                    </label>
                    <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger">
                        <span class="pe-2"><i class="bi bi-trash"></i> </span>
                        <span>Remover</span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row g-5">
            <div class="col-md-12">
                <div><label class="form-label">Nome</label> <input type="text" name="name" class="form-control"></div>
            </div>

        </div>
        <div>
            <label class="form-label">Descrição</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6"><label class="form-label" for="last_name">Email address</label> <input type="email" class="form-control"></div>
            <div class="col-md-6"><label class="form-label" for="last_name">Phone number</label> <input type="tel" class="form-control"></div>
        </div>
        <div>
            <div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="switchMakeAdmin" id="switchMakeAdmin"> <label class="form-check-label ms-2" for="switchMakeAdmin">Make admin</label></div>
        </div>
        <div class="row">
            <labal class="form-label" data-bs-toggle="collapse" href="#endereco" role="button" aria-expanded="false" aria-controls="endereco">
                Endereço
            </labal>
            <div class="collapse mt-3" id="endereco">
                <div class="">

                    <div class="row g-5">
                        <div class="col-md-10">
                            <div><label class="form-label">Rua</label> <input type="text" name="name" class="form-control"></div>
                        </div>
                        <div class="col-md-2">
                            <div><label class="form-label">Número</label> <input type="text" name="name" class="form-control"></div>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-6">
                            <div><label class="form-label">Bairro</label> <input type="text" name="name" class="form-control"></div>
                        </div>
                        <div class="col-md-6">
                            <div><label class="form-label">Cidade</label> <input type="text" name="name" class="form-control"></div>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-6">
                            <div><label class="form-label">Estado</label> <input type="text" name="name" class="form-control"></div>
                        </div>
                        <div class="col-md-6">
                            <div><label class="form-label">Pais</label> <input type="text" name="name" class="form-control"></div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer py-2 bg-surface-secondary">
        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Cancelar</button>
        <button type="button" class="btn btn-sm btn-success">Cadastrar</button>
    </div>
</div>