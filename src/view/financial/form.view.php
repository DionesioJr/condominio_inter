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
            <div class="row">
                <div class="col-12 mb-5"><label class="form-label">Nome completo</label> <input type="text" name="name" class="form-control" value="<?php echo $data['financial']['name']; ?>"></div>
                <div class="col-12 mb-5"><label class="form-label">Descrição</label> <input type="text" name="description" class="form-control" value="<?php echo $data['financial']['description']; ?>"></div>
                <div class="col-6 mb-5"><label class="form-label">Custo</label> <input type="number" name="cost" class="form-control" value="<?php echo $data['financial']['cost']; ?>"></input></div>
                <div class="col-6 mb-5"><label class="form-label">Custo Adicionarl</label> <input type="text" name="additional_charge" class="form-control" value="<?php echo $data['financial']['additional_charge']; ?>"></input></div>
                <div class="col-6 mb-5"><label class="form-label">Data de Pagamento</label> <input type="date" name="due_Date" class="form-control" value="<?php echo ($data['financial']['due_date']); ?>"></input></div>


                <div class="col-6 mb-5"><label class="form-label">Status do pagamento</label>
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="checkbox" value="1" name="status" <?php

                                                                                                                                            if ($data['financial']['status'] == 1) {
                                                                                                                                                echo 'checked';
                                                                                                                                            }
                                                                                                                                            ?>>
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Pago</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</form>