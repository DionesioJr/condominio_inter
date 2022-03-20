<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight">Messages</h1>
                </div>
                <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                    <div class="hstack gap-2 justify-content-sm-end">
                        <a href="#" class="btn btn-sm btn-primary">
                            <span class="pe-2"><i class="bi bi-plus-square-dotted"></i> </span><span>Enviar mensagen</span>
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
    <div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
        <div class="offcanvas-header border-bottom py-5 bg-surface-secondary">
            <h5 class="offcanvas-title" id="offcanvasCreateLabel">Create a new task</h5><button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="vstack gap-8"><input type="text" class="form-control form-control-flush text-lg font-bold" placeholder="Enter your task name ..." value="Click here and start typing 😎">
                <div class="border rounded">
                    <div>
                        <div class="textarea-autosize"><textarea class="form-control border-0 shadow-none p-4" rows="3" placeholder="Enter description" oninput="this.parentNode.dataset.replicatedValue = this.value"></textarea></div>
                        <div class="d-flex align-items-center px-6 py-3 border-top">
                            <div class="flex-fill d-flex align-items-center">
                                <h6 class="font-semibold text-xs text-muted text-opacity-60">Markdown formatting</h6>
                            </div>
                            <div class="text-end">
                                <div class="hstack gap-5 align-items-center"><a href="#!" class="text-lg text-muted text-primary-hover"><i class="bi bi-images"></i> </a><a href="#!" class="text-lg text-muted text-primary-hover"><i class="bi bi-emoji-smile"></i> </a><a href="#!" class="text-lg text-muted text-primary-hover"><i class="bi bi-paperclip"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="mb-4">Subtasks</h6>
                    <div class="vstack gap-3">
                        <div>
                            <div class="form-check form-check-linethrough"><input class="form-check-input w-5 h-5 mt-0 rounded-circle border-dashed flex-none" type="checkbox" checked="checked"> <a href="#offcanvas-show-task" class="form-check-label font-regular ms-2" data-bs-toggle="offcanvas">Keep my mentality healthy by taking walks outside</a></div>
                        </div>
                        <div>
                            <div class="form-check form-check-linethrough"><input class="form-check-input w-5 h-5 mt-0 rounded-circle border-dashed flex-none" type="checkbox"> <a href="#offcanvas-show-task" class="form-check-label font-regular ms-2" data-bs-toggle="offcanvas">Reunião do condomínio</a></div>
                        </div>
                        <div>
                            <div class="form-check form-check-linethrough"><input class="form-check-input w-5 h-5 mt-0 rounded-circle border-dashed flex-none" type="checkbox"> <a href="#offcanvas-show-task" class="form-check-label font-regular ms-2" data-bs-toggle="offcanvas">Festividade no dia das mães</a></div>
                        </div>
                        <div>
                            <div class="form-check form-check-linethrough"><input class="form-check-input w-5 h-5 mt-0 rounded-circle border-dashed flex-none" type="checkbox"> <a href="#offcanvas-show-task" class="form-check-label font-regular ms-2" data-bs-toggle="offcanvas">Vaga no estacionamento</a></div>
                        </div>
                    </div>
                    <div><input type="text" class="form-control form-control-sm mt-4 mb-3" placeholder="Add another subtask">
                        <div class="d-flex gap-3"><button type="button" class="btn btn-link p-0 text-muted text-danger-hover text-sm font-semibold">Cancel</button> <button type="button" class="btn btn-link p-0 link-success text-sm font-semibold">Save task</button></div>
                    </div>
                </div>
                <hr class="m-0">
                <div>
                    <h6 class="mb-3">Attachments</h6>
                    <div>
                        <div class="rounded border-2 border-dashed border-primary-hover position-relative">
                            <div class="d-flex justify-content-center px-5 py-5"><label for="file_upload" class="position-absolute w-full h-full top-0 start-0 cursor-pointer"><input id="file_upload" name="file_upload" type="file" class="visually-hidden"></label>
                                <div class="text-center">
                                    <div class="text-2xl text-muted"><i class="bi bi-upload"></i></div>
                                    <div class="d-flex text-sm mt-3">
                                        <p class="font-semibold">Upload a file or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 3MB</p>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush mt-2">
                            <div class="list-group-item py-3 d-flex align-items-center">
                                <div class="flex-fill"><span class="d-block h6 text-sm font-semibold mb-1">task-img-1.png</span><span class="d-block text-xs text-muted">350 kb</span></div>
                                <div class="ms-auto">
                                    <div class="dropdown"><a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>
                                        <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action </a><a href="#!" class="dropdown-item">Another action </a><a href="#!" class="dropdown-item">Something else here</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item py-3 d-flex align-items-center">
                                <div class="flex-fill"><span class="d-block h6 text-sm font-semibold mb-1">task-img-1.png</span><span class="d-block text-xs text-muted">350 kb</span></div>
                                <div class="ms-auto">
                                    <div class="dropdown"><a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>
                                        <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action </a><a href="#!" class="dropdown-item">Another action </a><a href="#!" class="dropdown-item">Something else here</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item py-3 d-flex align-items-center">
                                <div class="flex-fill"><span class="d-block h6 text-sm font-semibold mb-1">task-img-1.png</span><span class="d-block text-xs text-muted">350 kb</span></div>
                                <div class="ms-auto">
                                    <div class="dropdown"><a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>
                                        <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action </a><a href="#!" class="dropdown-item">Another action </a><a href="#!" class="dropdown-item">Something else here</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer py-2 bg-surface-secondary"><button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> <button type="button" class="btn btn-sm btn-su">Save</button></div>
    </div>
    <div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="modalExport" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header">
                    <div class="icon icon-shape rounded-3 bg-soft-primary text-primary text-lg me-4"><i class="bi bi-globe"></i></div>
                    <div>
                        <h5 class="mb-1">Share to web</h5><small class="d-block text-xs text-muted">Publish and share link with anyone</small>
                    </div>
                    <div class="ms-auto">
                        <div class="form-check form-switch me-n2"><input class="form-check-input" type="checkbox" id="switchShareToWeb" checked="checked"> <label class="form-check-label" for="switchShareToWeb"></label></div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-5">
                        <div>
                            <p class="text-sm">Anyone with this link <span class="font-bold text-heading">can view</span></p>
                        </div>
                        <div class="ms-auto"><a href="#" class="text-sm font-semibold">Settings</a></div>
                    </div>
                    <div>
                        <div class="input-group input-group-inline"><input type="email" class="form-control" placeholder="username" value="https://clever.io/your-amazing-link"> <span class="input-group-text"><i class="bi bi-clipboard"></i></span></div><span class="mt-2 valid-feedback">Looks good!</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="me-auto"><a href="#" class="text-sm font-semibold"><i class="bi bi-clipboard me-2"></i>Copy link</a></div><button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-sm btn-primary">Share file</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid vstack gap-3">
        <div class="card">
            <div class="px-4 px-md-8">

                <div class="d-flex align-items-center py-5 border-bottom">
                    <h5 class="font-semibold"><span class="me-1">✨</span> <span>Hoje</span></h5>
                    <div class="hstack gap-3 ms-auto"><a href="#" class="p-1 text-muted"><i class="bi bi-calendar-event"></i> </a><a href="#" class="p-1 text-muted"><i class="bi bi-three-dots"></i></a></div>
                </div>
                <div class="list-group list-group-flush">

                    <div class="list-group-item py-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-sm-6 col-12 d-flex">
                                <div class="form-check form-check-linethrough"><input class="form-check-input w-5 h-5 mt-0 rounded-circle border-dashed flex-none" type="checkbox" id="check-do-today-2"> <a href="#offcanvasCreate" class="form-check-label font-regular ms-2" data-bs-toggle="offcanvas">Reunião do condomínio</a></div>
                            </div>
                            <div class="col-sm-auto col-12 ms-sm-auto">
                                <div class="hstack gap-5 justify-content-end">
                                    <div><span class="badge bg-soft-success text-success">Novo</span></div>
                                    <div class="position-relative text-sm"><i class="bi bi-check-circle-fill text-success"></i> <span class="d-inline-block w-8 text-muted text-end">83%</span></div>
                                    <div class="position-relative text-sm"><i class="bi bi-files-alt text-muted me-1"></i> <a href="#" class="text-muted text-primary-hover stretched-link">18</a></div>
                                    <div class="position-relative d-flex rounded-pill align-items-center d-inline-flex bg-secondary bg-secondary-hover bg-opacity-20"><span class="avatar avatar-xs rounded-circle bg-primary text-white">JM</span>
                                        <div class="ps-2 pe-4"><a href="#" class="mb-0 text-sm text-muted text-primary-hover stretched-link">+3</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center py-5 border-bottom">
                    <h5 class="font-semibold"><span class="me-1">📬</span> <span>Abertas</span></h5>
                    <div class="hstack gap-3 ms-auto"><a href="#" class="p-1 text-muted"><i class="bi bi-calendar-event"></i> </a><a href="#" class="p-1 text-muted"><i class="bi bi-three-dots"></i></a></div>
                </div>
                <div class="list-group list-group-flush">
                    <div class="list-group-item py-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-sm-6 col-12 d-flex">
                                <div class="form-check form-check-linethrough"><input class="form-check-input w-5 h-5 mt-0 rounded-circle border-dashed flex-none" type="checkbox" id="check-new-tasks-1"> <a href="#offcanvasCreate" class="form-check-label font-regular ms-2" data-bs-toggle="offcanvas">Festa dia das mães</a></div>
                            </div>
                            <div class="col-sm-auto col-12 ms-sm-auto">
                                <div class="hstack gap-5 justify-content-end">
                                    <div><span class="badge bg-soft-warning text-warning">Importante</span></div>
                                    <div class="position-relative text-sm"><i class="bi bi-check-circle-fill text-success"></i> <span class="d-inline-block w-8 text-muted text-end">74%</span></div>
                                    <div class="position-relative text-sm"><i class="bi bi-files-alt text-muted me-1"></i> <a href="#" class="text-muted text-primary-hover stretched-link">18</a></div>
                                    <div class="position-relative d-flex rounded-pill align-items-center d-inline-flex bg-secondary bg-secondary-hover bg-opacity-20"><span class="avatar avatar-xs rounded-circle bg-primary text-white">JM</span>
                                        <div class="ps-2 pe-4"><a href="#" class="mb-0 text-sm text-muted text-primary-hover stretched-link">+3</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex align-items-center py-5 border-bottom">
                    <h5 class="font-semibold"><span class="me-1">✍</span> <span>Fechadas</span></h5>
                    <div class="hstack gap-3 ms-auto"><a href="#" class="p-1 text-muted"><i class="bi bi-calendar-event"></i> </a><a href="#" class="p-1 text-muted"><i class="bi bi-three-dots"></i></a></div>
                </div>
                <div class="list-group list-group-flush">

                    <div class="list-group-item py-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-sm-6 col-12 d-flex">
                                <div class="form-check form-check-linethrough"><input class="form-check-input w-5 h-5 mt-0 rounded-circle border-dashed flex-none" type="checkbox" id="check-in-progress-3" checked="checked"> <a href="#offcanvasCreate" class="form-check-label font-regular ms-2" data-bs-toggle="offcanvas">Estacionamento lotado</a></div>
                            </div>
                            <div class="col-sm-auto col-12 ms-sm-auto">
                                <div class="hstack gap-5 justify-content-end">
                                    <div><span class="badge bg-soft- text-"></span></div>
                                    <div class="position-relative text-sm"><i class="bi bi-check-circle-fill text-danger"></i> <span class="d-inline-block w-8 text-muted text-end">4%</span></div>
                                    <div class="position-relative text-sm"><i class="bi bi-files-alt text-muted me-1"></i> <a href="#" class="text-muted text-primary-hover stretched-link">18</a></div>
                                    <div class="position-relative d-flex rounded-pill align-items-center d-inline-flex bg-secondary bg-secondary-hover bg-opacity-20"><span class="avatar avatar-xs rounded-circle bg-primary text-white">JM</span>
                                        <div class="ps-2 pe-4"><a href="#" class="mb-0 text-sm text-muted text-primary-hover stretched-link">+3</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</main>