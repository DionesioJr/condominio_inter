<div class="page-header">
    <div class="row">
        <div class="col-md-11 col-sm-6 ">
            <h3><?php echo $data['condominio']['nome']; ?></h3>
        </div>

        <?php
        if ($_SESSION['user']['tipo'] == 2) {
        ?>
            <div class="row justify-content-end">
                <div class="col">
                    <a href="javascript:history.back()" type="button" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<br>
<hr>
<br>

<!-- <fieldset>
    <legend>Dados do condominio</legend>
    <br>
</fieldset>
<br>
<hr>
<br> -->

<fieldset>
    <div class="row">
        <div class="col-md-10 col-sm-6">
            <h4>Ficha de treinos</h4>
        </div>

        <?php
        if ($_SESSION['user']['tipo'] == 2) {
        ?>
            <div class="row justify-content-end">
                <div class="col">
                    <a href="<?php echo BASE_URL; ?>/treino/cadastro/?condominio_id=<?php echo $data['condominio']['id']; ?>" type="button" class="btn btn-warning"> Adicionar Treino</a>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">

            <div>

                <!-- <div class=" list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start  active">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Membros Inferiores</h5>
                        <small>Até 25 de abril de 2021</small>
                    </div>
                </a>
            </div>
            <br> -->

                <?php
                foreach ($data['treinos'] as $key => $value) {
                ?>

                    <div class="list-group">

                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="row">
                                <div class="col-md-11 col-sm-10">
                                    <a href="<?php echo BASE_URL; ?>/treino/ficha/?id=<?php echo $value['id']; ?>" class="list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><?php echo $value['nome']; ?></h5>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                if ($_SESSION['user']['tipo'] == 2) {
                                ?>
                                    <div class="col-md-1 col-sm-2">
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#excluir-modal"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="excluir-modal" tabindex="-1" role="dialog" aria-labelledby="excluir-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Você quer deletar este treino?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="col-sm-12 text-center">

                                            <p>Atenção! Ao excluir todos os dados serão apagados.</p>

                                            <br />
                                            <img src="<?php echo BASE_URL; ?>/assets/img/illustration/undraw_warning_cyit.svg" width="200px" class="img-responsive" alt="">
                                            <br />
                                            <br />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <a href="<?php echo BASE_URL; ?>/treino/excluir/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-danger">Sim, deletar treino</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <br>




                <?php
                }
                ?>

            </div>
        </div>

    </div>
</fieldset>