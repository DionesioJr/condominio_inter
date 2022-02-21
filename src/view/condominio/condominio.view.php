<?php
include 'src/view/layout/_header.php';
?>
<main class="py-6 bg-surface-secondary">
    <?php
    include 'src/view/condominio/form.view.php';
    ?>
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
                            foreach ($data['condominios'] as $key => $value) {

                            ?>

                                <tr>
                                    <td>
                                        <img alt="..." src="<?php echo BASE_URL; ?>/assets/img/avata.png" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading text-primary-hover font-semibold" href="#"><?php echo $value['name']; ?></a>
                                    </td>
                                    <td><?php echo 'Mércia Souza'; ?></td>
                                    <td><?php echo 'Rodovia 15 - KM 16,5, nº 242, Centro - Paulista - PE - CEP: 53401-445'; ?></td>
                                    <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill"><?php echo $value['status'] ? 'Ativado' : 'Desativado'; ?></span></td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a>
                                        <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button>
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