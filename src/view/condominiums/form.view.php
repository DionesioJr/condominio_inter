<form action="<?php echo $data['action']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $data['condominiums']['id']; ?>">

    <header class="position-sticky top-0 overlap-10 bg-surface-primary border-bottom">
        <div class="container-fluid py-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4">
                        <div>
                            <a href="<?php echo BASE_URL; ?>/condominiums">
                                <button type="button" class="btn-close text-xs" aria-label="Close"></button>
                            </a>
                        </div>
                        <div class="vr opacity-20 my-1"></div>
                        <h1 class="h4 ls-tight"><?php echo $data['action_name'] ?></h1>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" name="save" value="1" class="btn btn-sm btn-primary"><span><?php echo $data['button_submit']; ?></span></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="py-6 bg-surface-secondary">

        <div class="container-fluid max-w-screen-md vstack gap-5">
            <div><label class="form-label">Nome</label> <input type="text" name="name" value="<?php echo $data['condominiums']['name']; ?>" class="form-control" placeholder="Nome do Condomínio"></div>
            <div><label class="form-label">Descrição</label> <input name="description" value="<?php echo $data['condominiums']['description']; ?>" class="form-control" placeholder="Descrição do condomínio..." rows="2"></input></div>
            <div><label class="form-label">CNPJ</label> <input type="number" name="cnpj" value="<?php echo $data['condominiums']['cnpj']; ?>" class="form-control" placeholder="Apenas números"></input></div>
            <hr class="my-0">
            <div class="vstack gap-4">
                <div><label class="form-label">Status</label>
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio" value="1" name="status" <?php

                                                                                                                                            if ($data['condominiums']['status'] == 1) {
                                                                                                                                                echo 'checked';
                                                                                                                                            } else if (empty($data['condominiums']['status']) && $data['condominiums']['status_default'] == 1) {
                                                                                                                                                echo 'checked';
                                                                                                                                            }
                                                                                                                                            ?>>
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Ativo</h6>
                        </div>
                    </div>
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio" value="2" name="status" <?php

                                                                                                                                            if ($data['condominiums']['status'] == 2) {
                                                                                                                                                echo 'checked';
                                                                                                                                            } else if (empty($data['condominiums']['status']) && $data['condominiums']['status_default'] == 2) {
                                                                                                                                                echo 'checked';
                                                                                                                                            }
                                                                                                                                            ?>>
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Inativo</h6>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="row gx-4 gy-5">
                    <label class="form-label">Endereço</label>
                    <input type="hidden" name="address_id" value="<?php echo $data['address']['id']; ?>">
                    <div class="col-md-6">
                        <label class="form-label">Rua</label>
                        <div><input type="text" name="street" class="form-control" value="<?php echo $data['address']['street']; ?>" placeholder="Rua, AV., etc..."></div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Número</label>
                            <div><input type="text" name="number" class="form-control" value="<?php echo $data['address']['number']; ?>" placeholder="Número da residência"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Bairro</label>
                            <div><input type="text" name="district" class="form-control" value="<?php echo $data['address']['district']; ?>" placeholder="EX.: Imbiribeira"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Cidade</label>
                            <div><input type="text" name="city" class="form-control" value="<?php echo $data['address']['city']; ?>" placeholder="EX.: Recife"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Estado</label>
                            <div><input type="text" name="state" class="form-control" value="<?php echo $data['address']['state']; ?>" placeholder="EX.: Pernambuco"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Código-Postal</label>
                            <div><input type="text" name="code" class="form-control" value="<?php echo $data['address']['code']; ?>" placeholder="Somente números"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</form>