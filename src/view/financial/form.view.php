<form action="<?php echo $data['action']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $data['financial']['id']; ?>">
    <header class="position-sticky top-0 overlap-10 bg-surface-primary border-bottom">
        <div class="container-fluid py-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4">
                        <div>
                            <a href="<?php echo BASE_URL; ?>/finance">
                                <button type="button" class="btn-close text-xs" aria-label="Close"></button>
                            </a>
                        </div>
                        <div class="vr opacity-20 my-1"></div>
                        <h1 class="h4 ls-tight"><?php echo $data['title'] ?></h1>
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
            <div><label class="form-label">Nome completo</label> <input type="text" name="name" class="form-control" value="<?php echo $data['financial']['name']; ?>"></div>
            <div><label class="form-label">Descrição</label> <input type="text" name="description" class="form-control" value="<?php echo $data['financial']['description']; ?>"></div>
            <div><label class="form-label">Custo</label> <input type="number" name="cost" class="form-control" value="<?php echo $data['financial']['cost']; ?>"></input></div>
            <div><label class="form-label">Custo Adicionarl</label> <input type="text" name="additional_charge" class="form-control" value="<?php echo $data['financial']['additional_charge']; ?>"></input></div>
            <div><label class="form-label">Data de Pagamento</label> <input type="date" name="due_Date" class="form-control" value="<?php echo ($data['financial']['due_date']); ?>"></input></div>

        </div>

    </main>
</form>