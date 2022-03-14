<form action="<?php echo BASE_URL; ?>/users/store" method="post">
    <header class="position-sticky top-0 overlap-10 bg-surface-primary border-bottom">
        <div class="container-fluid py-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4">
                        <div>
                            <a href="<?php echo BASE_URL; ?>/users">
                                <button type="button" class="btn-close text-xs" aria-label="Close"></button>
                            </a>
                        </div>
                        <div class="vr opacity-20 my-1"></div>
                        <h1 class="h4 ls-tight">Cadastrar um novo usuário</h1>
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
            <div><label class="form-label">Nome completo</label> <input type="text" name="name" class="form-control" placeholder="Digite o nome completo"></div>
            <div><label class="form-label">Email</label> <input type="email" name="email" class="form-control" placeholder="Digite um email"></input></div>
            <div><label class="form-label">Senha</label> <input type="password" name="password" class="form-control" placeholder="Digite uma senha"></input></div>
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
                            <h6 class="mb-1 lh-relaxed">Atrasado</h6>
                        </div>
                    </div>
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio" value="3" name="status">
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Desativado</h6>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
            </div>
            <div class="vstack gap-4">
                <div><label class="form-label">Tipo de perfil</label>
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio" value="1" name="is_admin" checked="checked">
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Condômino</h6>
                        </div>
                    </div>
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio" value="2" name="is_admin">
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Administrador</h6>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
            </div>
        </div>

    </main>
</form>