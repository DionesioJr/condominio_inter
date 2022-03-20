<div class="page-header">
    <div class="row">
        <div class="col">
            <h3>Condomínios</h3>
        </div>
        <div class="row justify-content-end">
            <div class="col">
                <a href="<?php echo BASE_URL; ?>/condominiums/create" type="button" class="btn btn-warning">Adicionar</a>
            </div>
        </div>
    </div>
</div>

<div class="bs-docs-section">

    <div class="row">
        <div class="col-lg-12">

            <table class="table table-hover" id="tb_condominios">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col" width="15%">Idade</th>
                        <th scope="col" width="8%">Status</th>
                        <th scope="col" width="8%">Tipo</th>
                        <th width="15%"></th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach ($data['condominios'] as $key => $value) {

                        // validando o status

                        if ($value['status'] == 1) {
                            $value['status_name'] = "Ativo";
                        }
                        if ($value['status'] == 2) {
                            $value['status_name'] = "Pendente";
                        }
                        if ($value['status'] == 0) {
                            $value['status_name'] = "Inativo";
                        }

                        // validando o tipo
                        if ($value['tipo'] == 1) {
                            $value['tipo_name'] = "Condomínio";
                        }
                        if ($value['tipo'] == 2) {
                            $value['tipo_name'] = "Administrador";
                        }
                    ?>
                        <tr>
                            <td>
                                <img class="avatar-img rounded-circle" style="height: 40px;" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="...">
                                <span style="margin-left: 10px;"> <?php echo $value['nome']; ?></span>
                            </td>
                            <td><?php echo $value['idade']; ?></td>
                            <td><span class="badge badge-success"><?php echo $value['status_name']; ?></span></td>
                            <td><span class="badge badge-info"><?php echo $value['tipo_name']; ?></span></td>
                            <td class="text-right">
                                <a href="<?php echo BASE_URL; ?>/condominiums/ficha/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-file-alt"></i></a>
                                <a href="<?php echo BASE_URL; ?>/condominiums/edit/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i></a>
                                <a href="#" type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#excluir-modal-<?php echo $value['id']; ?>"><i class="far fa-trash-alt"></i></a>
                                <!-- <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <a href="<?php echo BASE_URL; ?>/condominiums/ficha/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-file-alt"></i></a> Ficha
                                            </li>
                                            <li class="list-group-item">
                                                <a href="<?php echo BASE_URL; ?>/condominiums/edit/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i></a> Editar
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#" type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#excluir-modal-<?php echo $value['id']; ?>"><i class="far fa-trash-alt"></i></a> Remover
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="excluir-modal-<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="excluir-modal-<?php echo $value['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Você quer deletar este condominio ?</h5>
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
                                        <a href="<?php echo BASE_URL; ?>/condominiums/destroy/?id=<?php echo $value['id']; ?>" type="button" class="btn btn-danger">Sim, deletar condominio</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    <?php

                    }

                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<style>
    #tb_condominios_filter {
        float: right;
    }

    #tb_condominios_paginate {
        float: right;
    }

    .page-item.disabled .page-link {
        color: #212529;
        background-color: #ecf0f1;
    }

    .page-item.active .page-link {
        background-color: #2C3E50;
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"></script>
<script>
    $(document).ready(function() {
        $('#tb_condominios').DataTable({
            language: {
                "emptyTable": "Nenhum registro encontrado",
                "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 até 0 de 0 registros",
                "infoFiltered": "(Filtrados de _MAX_ registros)",
                "infoThousands": ".",
                "loadingRecords": "Carregando...",
                "processing": "Processando...",
                "zeroRecords": "Nenhum registro encontrado",
                "search": "Pesquisar",
                "paginate": {
                    "next": "Próximo",
                    "previous": "Anterior",
                    "first": "Primeiro",
                    "last": "Último"
                },
                "aria": {
                    "sortAscending": ": Ordenar colunas de forma ascendente",
                    "sortDescending": ": Ordenar colunas de forma descendente"
                },
                "select": {
                    "rows": {
                        "_": "Selecionado %d linhas",
                        "0": "Nenhuma linha selecionada",
                        "1": "Selecionado 1 linha"
                    },
                    "1": "%d linha selecionada",
                    "_": "%d linhas selecionadas",
                    "cells": {
                        "1": "1 célula selecionada",
                        "_": "%d células selecionadas"
                    },
                    "columns": {
                        "1": "1 coluna selecionada",
                        "_": "%d colunas selecionadas"
                    }
                },
                "buttons": {
                    "copySuccess": {
                        "1": "Uma linha copiada com sucesso",
                        "_": "%d linhas copiadas com sucesso"
                    },
                    "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                    "colvis": "Visibilidade da Coluna",
                    "colvisRestore": "Restaurar Visibilidade",
                    "copy": "Copiar",
                    "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                    "copyTitle": "Copiar para a Área de Transferência",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Mostrar todos os registros",
                        "1": "Mostrar 1 registro",
                        "_": "Mostrar %d registros"
                    },
                    "pdf": "PDF",
                    "print": "Imprimir"
                },
                "autoFill": {
                    "cancel": "Cancelar",
                    "fill": "Preencher todas as células com",
                    "fillHorizontal": "Preencher células horizontalmente",
                    "fillVertical": "Preencher células verticalmente"
                },
                "lengthMenu": "Exibir _MENU_ resultados por página",
                "searchBuilder": {
                    "add": "Adicionar Condição",
                    "button": {
                        "0": "Construtor de Pesquisa",
                        "_": "Construtor de Pesquisa (%d)"
                    },
                    "clearAll": "Limpar Tudo",
                    "condition": "Condição",
                    "conditions": {
                        "date": {
                            "after": "Depois",
                            "before": "Antes",
                            "between": "Entre",
                            "empty": "Vazio",
                            "equals": "Igual",
                            "not": "Não",
                            "notBetween": "Não Entre",
                            "notEmpty": "Não Vazio"
                        },
                        "number": {
                            "between": "Entre",
                            "empty": "Vazio",
                            "equals": "Igual",
                            "gt": "Maior Que",
                            "gte": "Maior ou Igual a",
                            "lt": "Menor Que",
                            "lte": "Menor ou Igual a",
                            "not": "Não",
                            "notBetween": "Não Entre",
                            "notEmpty": "Não Vazio"
                        },
                        "string": {
                            "contains": "Contém",
                            "empty": "Vazio",
                            "endsWith": "Termina Com",
                            "equals": "Igual",
                            "not": "Não",
                            "notEmpty": "Não Vazio",
                            "startsWith": "Começa Com"
                        },
                        "array": {
                            "contains": "Contém",
                            "empty": "Vazio",
                            "equals": "Igual à",
                            "not": "Não",
                            "notEmpty": "Não vazio",
                            "without": "Não possui"
                        }
                    },
                    "data": "Data",
                    "deleteTitle": "Excluir regra de filtragem",
                    "logicAnd": "E",
                    "logicOr": "Ou",
                    "title": {
                        "0": "Construtor de Pesquisa",
                        "_": "Construtor de Pesquisa (%d)"
                    },
                    "value": "Valor"
                },
                "searchPanes": {
                    "clearMessage": "Limpar Tudo",
                    "collapse": {
                        "0": "Painéis de Pesquisa",
                        "_": "Painéis de Pesquisa (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Nenhum Painel de Pesquisa",
                    "loadMessage": "Carregando Painéis de Pesquisa...",
                    "title": "Filtros Ativos"
                },
                "searchPlaceholder": "Digite um termo para pesquisar",
                "thousands": ".",
                "datetime": {
                    "previous": "Anterior",
                    "next": "Próximo",
                    "hours": "Hora",
                    "minutes": "Minuto",
                    "seconds": "Segundo",
                    "amPm": [
                        "am",
                        "pm"
                    ],
                    "unknown": "-"
                },
                "editor": {
                    "close": "Fechar",
                    "create": {
                        "button": "Novo",
                        "submit": "Criar",
                        "title": "Criar novo registro"
                    },
                    "edit": {
                        "button": "Editar",
                        "submit": "Atualizar",
                        "title": "Editar registro"
                    },
                    "error": {
                        "system": "Ocorreu um erro no sistema (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Mais informações<\/a>)."
                    },
                    "multi": {
                        "noMulti": "Essa entrada pode ser editada individualmente, mas não como parte do grupo",
                        "restore": "Desfazer alterações",
                        "title": "Multiplos valores",
                        "info": "Os itens selecionados contêm valores diferentes para esta entrada. Para editar e definir todos os itens para esta entrada com o mesmo valor, clique ou toque aqui, caso contrário, eles manterão seus valores individuais."
                    },
                    "remove": {
                        "button": "Remover",
                        "confirm": {
                            "_": "Tem certeza que quer deletar %d linhas?",
                            "1": "Tem certeza que quer deletar 1 linha?"
                        },
                        "submit": "Remover",
                        "title": "Remover registro"
                    }
                },
                "decimal": ","
            }

        });


    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>