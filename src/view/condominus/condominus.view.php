<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight"><?php echo $data['header']['title']; ?></h1>
                </div>
                <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                    <div class="hstack gap-2 justify-content-sm-end">
                        <a href="<?php echo BASE_URL; ?>/condominus/create" class="btn btn-sm btn-primary">
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
                                <th scope="col">Sindico</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($data['condominiums'] as $key => $value) {

                            ?>
                                <tr>
                                    <td>
                                        <a class="text-heading text-primary-hover font-semibold" href="#"><?php echo $value['name']; ?></a>
                                    </td>
                                    <td><span class="text-heading text-primary-hover font-semibold">marcia</span></td>
                                    <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill"><?php echo $value['address_id'] ?></span></td>
                                    <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill"><?php echo $value['status_name'] ?></span></td>
                                    <td class="text-end">
                                        <a href="<?php echo BASE_URL; ?>/condominus/edit/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a>
                                        <a href="<?php echo BASE_URL; ?>/condominus/destroy/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></a>
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