<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight"><?php echo $data['header']['title']; ?></h1>
                    <br>
                </div>
                <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                    <div class="hstack gap-2 justify-content-sm-end">
                        <a href="<?php echo BASE_URL; ?>/condominiums/create" class="btn btn-sm btn-primary">
                            <span class="pe-2"><i class="bi bi-plus-square-dotted"></i> </span><span>Cadastrar condomínio</span>
                        </a>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs overflow-x border-0 mb-5">
                <!-- <li class="nav-item"><a href="#" class="nav-link active">View all</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Most recent</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Popular</a></li> -->
            </ul>
        </div>
    </div>
</header>

<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="vstack gap-4">

            <div class="card">
                <div class="card-header border-bottom d-flex align-items-center">
                    <h5 class="me-auto">Todos os condomínios</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($data['condominiums'] as $key => $value) {

                                $value['address']['street'] = $value['address']['street'] ?? '';
                                $value['address']['number'] = $value['address']['number'] ?? '';
                            ?>
                                <tr>
                                    <td>
                                        <a class="text-heading text-primary-hover font-semibold" href="#"><?php echo $value['name']; ?></a>
                                    </td>
                                    <td><span class="text-heading text-primary-hover font-semibold"><?php echo $value['description'] ?></span></td>
                                    <td><span class=" "><?php echo "{$value['address']['street']} {$value['address']['number']}"; ?></span></td>
                                    <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill"><?php echo $value['status_name'] ?></span></td>
                                    <td class="text-end">
                                        <a href="<?php echo BASE_URL; ?>/condominiums/edit/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a>
                                        <a href="<?php echo BASE_URL; ?>/condominiums/destroy/?id=<?php echo $value['id']; ?>" data-bs-toggle="modal" data-bs-target="#excluir-modal-<?php echo $value['id']; ?>" type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></a>

                                        <div class="modal fade" id="excluir-modal-<?php echo $value['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Você quer deletar este condomínio ?</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <a href="<?php echo BASE_URL; ?>/condominiums/destroy/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-danger">Sim, deletar condomínio</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <!-- <div class="card-footer border-0 py-5"><span class="text-muted text-sm">Showing 10 items out of 250 results found</span></div> -->
            </div>
        </div>
    </div>
</main>