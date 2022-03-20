<form action="<?php echo BASE_URL; ?>/condominiums/store" method="post">
    <header class="position-sticky top-0 overlap-10 bg-surface-primary border-bottom">
        <div class="container-fluid py-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4">
                        <div>
                            <a href="<?php echo BASE_URL; ?>/condominio">
                                <button type="button" class="btn-close text-xs" aria-label="Close"></button>
                            </a>
                        </div>
                        <div class="vr opacity-20 my-1"></div>
                        <h1 class="h4 ls-tight">Cadastrar um novo condomínio</h1>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" name="save" value="1" class="btn btn-sm btn-neutral border-base d-none d-md-block"><span>Salvar e cadastrar outro</span></button>
                        <button type="submit" name="save" value="2" class="btn btn-sm btn-primary"><span>Salvar</span></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="py-6 bg-surface-secondary">

        <div class="container-fluid max-w-screen-md vstack gap-5">
            <div><label class="form-label">Nome</label> <input type="text" name="name" value="<?php echo $data['condominium']['name'] ?? ''; ?>" class="form-control" placeholder="Nome do Condomínio"></div>
            <div><label class="form-label">Descrição</label> <textarea name="description" <?php echo $data['condominium']['description'] ?? ''; ?> class="form-control" placeholder="Descrição do condomínio..." rows="2"></textarea></div>
            <div><label class="form-label">CNPJ</label> <input type="number" name="cnpj" <?php echo $data['condominium']['cnpj'] ?? ''; ?> class="form-control" placeholder="Apenas números"></input></div>
            <hr class="my-0">
            <div class="vstack gap-4">
                <div><label class="form-label">Status</label>
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio" value="1" name="status" checked="checked">
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Ativo</h6>
                        </div>
                    </div>
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio" value="2" name="status">
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Inativo</h6>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="row gx-4 gy-5">
                    <label class="form-label">Endereço</label>
                    <div class="col-md-6">
                        <label class="form-label">Rua</label>
                        <div><input type="text" name="street" class="form-control" placeholder="Rua, AV., etc..."></div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Número</label>
                            <div><input type="text" name="number" class="form-control" placeholder="Número da residência"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Bairro</label>
                            <div><input type="text" name="district" class="form-control" placeholder="EX.: Imbiribeira"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Cidade</label>
                            <div><input type="text" name="city" class="form-control" placeholder="EX.: Recife"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Estado</label>
                            <div><input type="text" name="state" class="form-control" placeholder="EX.: Pernambuco"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Código-Postal</label>
                            <div><input type="text" name="code" class="form-control" placeholder="Somente números"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</form>