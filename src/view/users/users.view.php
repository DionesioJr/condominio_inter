<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight">Usuários</h1>
                </div>
                <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                    <div class="hstack gap-2 justify-content-sm-end">
                        <a href="<?php echo BASE_URL; ?>/users/create" class="btn btn-sm btn-primary">
                            <span class="pe-2"><i class="bi bi-plus-square-dotted"></i> </span><span>Cadastrar novo usuário</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
        <div class="vstack gap-4">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap" id="table">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tipo de perfil</th>
                                <th scope="col">Email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['users'] as $key => $value) {

                            ?>
                                <tr>
                                    <td>
                                        <img alt="..." src="<?php echo BASE_URL; ?>/assets/img/avata.png" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading text-primary-hover font-semibold" href="#"><?php echo $value['name']; ?></a>
                                    </td>
                                    <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill"><?php echo $value['status_name'] ?></span></td>
                                    <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill"><?php echo $value['admin_name'] ?></span></td>
                                    <td><?php echo $value['email']; ?></td>
                                    <td class="text-end">
                                        <a href="<?php echo BASE_URL; ?>/users/edit/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a>
                                        <a href="<?php echo BASE_URL; ?>/users/destroy/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                </table>
            </div>
            <div class="card-footer border-0 py-5"><span class="text-muted text-sm">Showing 10 items out of 250 results found</span></div>
        </div>
    </div>
    </div>
</main>
</div>

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>