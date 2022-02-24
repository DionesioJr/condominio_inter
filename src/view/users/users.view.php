<header>
    <div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight">Usuários</h1>
                </div>
                <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                    <div class="hstack gap-2 justify-content-sm-end">
                        <a href="<?php echo BASE_URL; ?>/users/cadastro" class="btn btn-sm btn-primary">
                            <span class="pe-2"><i class="bi bi-plus-square-dotted"></i> </span><span>Cadastrar novo usuário</span>
                        </a>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs overflow-x border-0">
                <li class="nav-item"><a href="#" class="nav-link active">Todos os usuários</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Usuários ativos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Usuários atrasados</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Usuários desativados</a></li>
            </ul>
        </div>
    </div>
</header>
<main class="py-6 bg-surface-secondary">
    <div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
        <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
            <h5 class="offcanvas-title" id="offcanvasCreateLabel">Create a new user</h5><button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body vstack gap-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <div><label class="form-label">First name</label> <input type="text" class="form-control"></div>
                </div>
                <div class="col-md-6">
                    <div><label class="form-label">Last name</label> <input type="text" class="form-control"></div>
                </div>
            </div>
            <div><label class="form-label">Bio</label> <textarea class="form-control" placeholder="Your email" rows="2"></textarea></div>
            <div><label class="form-label" for="formInputExample">Photo</label>
                <div class="d-flex align-items-center"><a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white"><img alt="..." src="/img/people/img-6.jpg"></a>
                    <div class="ms-5"><label for="file-upload" class="btn btn-sm btn-neutral"><span>Upload</span> <input type="file" name="file-upload" id="file-upload" class="visually-hidden"></label> <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger"><span class="pe-2"><i class="bi bi-trash"></i> </span><span>Remove</span></a></div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6"><label class="form-label" for="last_name">Email address</label> <input type="email" class="form-control"></div>
                <div class="col-md-6"><label class="form-label" for="last_name">Phone number</label> <input type="tel" class="form-control"></div>
            </div>
            <div>
                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="switchMakeAdmin" id="switchMakeAdmin"> <label class="form-check-label ms-2" for="switchMakeAdmin">Make admin</label></div>
            </div>
        </div>
        <div class="modal-footer py-2 bg-surface-secondary"><button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> <button type="button" class="btn btn-sm btn-primary">Save</button></div>
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
                        <div class="form-check form-switch me-n2"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="checked"> <label class="form-check-label" for="flexSwitchCheckChecked"></label></div>
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
                        <div class="input-group input-group-inline"><input type="email" class="form-control" placeholder="username" value="https://webpixels.io/your-amazing-link"> <span class="input-group-text"><i class="bi bi-clipboard"></i></span></div><span class="mt-2 valid-feedback">Looks good!</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="me-auto"><a href="#" class="text-sm font-semibold"><i class="bi bi-clipboard me-2"></i>Copy link</a></div><button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-sm btn-success">Share file</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="vstack gap-4">
            <div class="d-flex justify-content-between flex-column flex-sm-row gap-3">
                <div class="hstack gap-2">
                    <div class="input-group input-group-sm input-group-inline"><span class="input-group-text pe-2"><i class="bi bi-search"></i> </span><input type="email" class="form-control" placeholder="Search" aria-label="Search"></div>
                    <div><button type="button" class="btn btn-sm px-3 btn-neutral d-flex align-items-center"><i class="bi bi-funnel me-2"></i> <span>Filters</span> <span class="vr opacity-20 mx-3"></span> <span class="text-xs text-primary">2</span></button></div>
                </div>
                <div class="btn-group"><a href="#" class="btn btn-sm btn-neutral"><i class="bi bi-cloud-download me-2"></i>Download all </a><a href="#" class="btn btn-sm btn-neutral"><i class="bi bi-gear-wide me-2"></i>Settings</a></div>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Position</th>
                                <th scope="col">Worked hours</th>
                                <th scope="col">Performance</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img alt="..." src="/img/people/img-3.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Robert Fox</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="success" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexchartsol6b8kgq" class="apexcharts-canvas apexchartsol6b8kgq apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg1557" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1559" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1558">
                                                            <clipPath id="gridRectMaskol6b8kgq">
                                                                <rect id="SvgjsRect1565" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskol6b8kgq"></clipPath>
                                                            <clipPath id="nonForecastMaskol6b8kgq"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskol6b8kgq">
                                                                <rect id="SvgjsRect1566" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1564" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1581" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1582" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1595" class="apexcharts-grid">
                                                            <g id="SvgjsG1596" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine1598" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1599" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1600" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1601" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1602" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1603" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1597" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine1605" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1604" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1567" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1568" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1571" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1572" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1573" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1574" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1575" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1576" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1577" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1578" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1579" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1580" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskol6b8kgq)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG1569" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1611" r="0" cx="0" cy="0" class="apexcharts-marker wsidvte5q no-pointer-events" stroke="#ffffff" fill="#00cc88" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1570" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1606" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1607" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1608" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1609" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1610" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1563" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1594" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1560" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 204, 136);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><img alt="..." src="/img/people/img-1.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Darlene Robertson</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="warning" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexchartsfddgifys" class="apexcharts-canvas apexchartsfddgifys apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg1613" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1615" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1614">
                                                            <clipPath id="gridRectMaskfddgifys">
                                                                <rect id="SvgjsRect1621" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskfddgifys"></clipPath>
                                                            <clipPath id="nonForecastMaskfddgifys"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskfddgifys">
                                                                <rect id="SvgjsRect1622" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1620" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1637" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1638" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1651" class="apexcharts-grid">
                                                            <g id="SvgjsG1652" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine1654" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1655" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1656" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1657" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1658" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1659" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1653" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine1661" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1660" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1623" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1624" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1627" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1628" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1629" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1630" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1631" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1632" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1633" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1634" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1635" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1636" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfddgifys)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG1625" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1667" r="0" cx="0" cy="0" class="apexcharts-marker w1o8ba6ue no-pointer-events" stroke="#ffffff" fill="#ff8c00" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1626" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1662" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1663" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1664" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1665" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1666" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1619" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1650" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1616" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 140, 0);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><img alt="..." src="/img/people/img-2.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Theresa Webb</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="success" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexchartse2f7rjyk" class="apexcharts-canvas apexchartse2f7rjyk apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg1669" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1671" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1670">
                                                            <clipPath id="gridRectMaske2f7rjyk">
                                                                <rect id="SvgjsRect1677" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaske2f7rjyk"></clipPath>
                                                            <clipPath id="nonForecastMaske2f7rjyk"></clipPath>
                                                            <clipPath id="gridRectMarkerMaske2f7rjyk">
                                                                <rect id="SvgjsRect1678" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1676" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1693" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1694" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1707" class="apexcharts-grid">
                                                            <g id="SvgjsG1708" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine1710" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1711" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1712" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1713" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1714" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1715" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1709" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine1717" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1716" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1679" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1680" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1683" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1684" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1685" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1686" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1687" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1688" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1689" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1690" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1691" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1692" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaske2f7rjyk)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG1681" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1723" r="0" cx="0" cy="0" class="apexcharts-marker waqf60ijef no-pointer-events" stroke="#ffffff" fill="#00cc88" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1682" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1718" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1719" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1720" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1721" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1722" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1675" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1706" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1672" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 204, 136);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><img alt="..." src="/img/people/img-3.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Kristin Watson</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="warning" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexchartsqtp92x31" class="apexcharts-canvas apexchartsqtp92x31 apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg1725" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1727" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1726">
                                                            <clipPath id="gridRectMaskqtp92x31">
                                                                <rect id="SvgjsRect1733" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskqtp92x31"></clipPath>
                                                            <clipPath id="nonForecastMaskqtp92x31"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskqtp92x31">
                                                                <rect id="SvgjsRect1734" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1732" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1749" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1750" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1763" class="apexcharts-grid">
                                                            <g id="SvgjsG1764" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine1766" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1767" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1768" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1769" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1770" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1771" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1765" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine1773" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1772" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1735" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1736" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1739" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1740" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1741" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1742" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1743" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1744" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1745" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1746" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1747" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1748" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqtp92x31)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG1737" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1779" r="0" cx="0" cy="0" class="apexcharts-marker w0tulvvaq no-pointer-events" stroke="#ffffff" fill="#ff8c00" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1738" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1774" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1775" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1776" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1777" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1778" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1731" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1762" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1728" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 140, 0);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><img alt="..." src="/img/people/img-4.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Cody Fisher</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="success" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexchartsds34z5a4" class="apexcharts-canvas apexchartsds34z5a4 apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg1781" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1783" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1782">
                                                            <clipPath id="gridRectMaskds34z5a4">
                                                                <rect id="SvgjsRect1789" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskds34z5a4"></clipPath>
                                                            <clipPath id="nonForecastMaskds34z5a4"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskds34z5a4">
                                                                <rect id="SvgjsRect1790" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1788" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1805" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1806" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1819" class="apexcharts-grid">
                                                            <g id="SvgjsG1820" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine1822" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1823" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1824" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1825" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1826" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1827" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1821" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine1829" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1828" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1791" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1792" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1795" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1796" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1797" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1798" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1799" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1800" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1801" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1802" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1803" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1804" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskds34z5a4)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG1793" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1835" r="0" cx="0" cy="0" class="apexcharts-marker w7ygt2iod no-pointer-events" stroke="#ffffff" fill="#00cc88" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1794" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1830" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1831" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1832" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1833" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1834" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1787" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1818" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1784" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 204, 136);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><img alt="..." src="/img/people/img-2.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Robert Fox</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="warning" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexchartsr4wxh7di" class="apexcharts-canvas apexchartsr4wxh7di apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg1837" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1839" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1838">
                                                            <clipPath id="gridRectMaskr4wxh7di">
                                                                <rect id="SvgjsRect1845" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskr4wxh7di"></clipPath>
                                                            <clipPath id="nonForecastMaskr4wxh7di"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskr4wxh7di">
                                                                <rect id="SvgjsRect1846" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1844" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1861" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1862" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1875" class="apexcharts-grid">
                                                            <g id="SvgjsG1876" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine1878" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1879" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1880" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1881" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1882" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1883" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1877" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine1885" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1884" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1847" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1848" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1851" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1852" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1853" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1854" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1855" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1856" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1857" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1858" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1859" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1860" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(255,140,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr4wxh7di)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG1849" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1891" r="0" cx="0" cy="0" class="apexcharts-marker w6vefphbmf no-pointer-events" stroke="#ffffff" fill="#ff8c00" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1850" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1886" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1887" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1888" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1889" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1890" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1843" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1874" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1840" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 140, 0);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><img alt="..." src="/img/people/img-1.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Darlene Robertson</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="success" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexcharts4ti44yjt" class="apexcharts-canvas apexcharts4ti44yjt apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg1893" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1895" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1894">
                                                            <clipPath id="gridRectMask4ti44yjt">
                                                                <rect id="SvgjsRect1901" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask4ti44yjt"></clipPath>
                                                            <clipPath id="nonForecastMask4ti44yjt"></clipPath>
                                                            <clipPath id="gridRectMarkerMask4ti44yjt">
                                                                <rect id="SvgjsRect1902" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1900" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1917" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1918" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1931" class="apexcharts-grid">
                                                            <g id="SvgjsG1932" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine1934" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1935" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1936" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1937" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1938" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1939" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1933" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine1941" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1940" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1903" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1904" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1907" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1908" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1909" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1910" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1911" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1912" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1913" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1914" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1915" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1916" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4ti44yjt)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG1905" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1947" r="0" cx="0" cy="0" class="apexcharts-marker wobbkuqpq no-pointer-events" stroke="#ffffff" fill="#00cc88" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1906" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1942" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1943" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1944" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1945" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1946" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1899" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1930" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1896" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 204, 136);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><img alt="..." src="/img/people/img-2.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Theresa Webb</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="success" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexcharts4z9zuv52" class="apexcharts-canvas apexcharts4z9zuv52 apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg1949" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1951" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1950">
                                                            <clipPath id="gridRectMask4z9zuv52">
                                                                <rect id="SvgjsRect1957" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask4z9zuv52"></clipPath>
                                                            <clipPath id="nonForecastMask4z9zuv52"></clipPath>
                                                            <clipPath id="gridRectMarkerMask4z9zuv52">
                                                                <rect id="SvgjsRect1958" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1956" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1973" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1974" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1987" class="apexcharts-grid">
                                                            <g id="SvgjsG1988" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine1990" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1991" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1992" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1993" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1994" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1995" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1989" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine1997" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1996" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1959" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1960" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1963" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1964" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1965" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1966" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1967" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1968" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1969" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1970" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1971" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath1972" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4z9zuv52)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG1961" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle2003" r="0" cx="0" cy="0" class="apexcharts-marker wn1xoy43c no-pointer-events" stroke="#ffffff" fill="#00cc88" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1962" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1998" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1999" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2000" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2001" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2002" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1955" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1986" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1952" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 204, 136);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><img alt="..." src="/img/people/img-3.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Kristin Watson</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="success" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexcharts4zj6pqev" class="apexcharts-canvas apexcharts4zj6pqev apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg2005" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG2007" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs2006">
                                                            <clipPath id="gridRectMask4zj6pqev">
                                                                <rect id="SvgjsRect2013" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask4zj6pqev"></clipPath>
                                                            <clipPath id="nonForecastMask4zj6pqev"></clipPath>
                                                            <clipPath id="gridRectMarkerMask4zj6pqev">
                                                                <rect id="SvgjsRect2014" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine2012" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG2029" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG2030" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2043" class="apexcharts-grid">
                                                            <g id="SvgjsG2044" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine2046" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2047" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2048" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2049" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2050" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2051" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2045" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine2053" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2052" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2015" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG2016" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2019" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2020" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2021" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2022" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2023" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2024" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2025" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2026" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2027" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2028" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4zj6pqev)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG2017" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle2059" r="0" cx="0" cy="0" class="apexcharts-marker wvb6mm6e5 no-pointer-events" stroke="#ffffff" fill="#00cc88" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2018" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2054" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2055" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2056" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2057" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2058" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect2011" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG2042" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG2008" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 204, 136);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><img alt="..." src="/img/people/img-4.jpg" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading text-primary-hover font-semibold" href="#">Cody Fisher</a></td>
                                <td>Feb 15, 2021</td>
                                <td><span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">Web Developer</span></td>
                                <td>180 hrs</td>
                                <td>
                                    <div class="w-20">
                                        <div data-toggle="spark-chart" data-type="line" data-height="30" data-color="success" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]" style="min-height: 30px;">
                                            <div id="apexchartsk4kdmdq3j" class="apexcharts-canvas apexchartsk4kdmdq3j apexcharts-theme-light" style="width: 80px; height: 30px;"><svg id="SvgjsSvg2061" width="80" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG2063" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs2062">
                                                            <clipPath id="gridRectMaskk4kdmdq3j">
                                                                <rect id="SvgjsRect2069" width="86" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskk4kdmdq3j"></clipPath>
                                                            <clipPath id="nonForecastMaskk4kdmdq3j"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskk4kdmdq3j">
                                                                <rect id="SvgjsRect2070" width="84" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine2068" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG2085" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG2086" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2099" class="apexcharts-grid">
                                                            <g id="SvgjsG2100" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine2102" x1="0" y1="0" x2="80" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2103" x1="0" y1="6" x2="80" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2104" x1="0" y1="12" x2="80" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2105" x1="0" y1="18" x2="80" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2106" x1="0" y1="24" x2="80" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2107" x1="0" y1="30" x2="80" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2101" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine2109" x1="0" y1="30" x2="80" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2108" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2071" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG2072" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2075" d="M 0 30" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 0 NaNC 2.8 NaN 5.2 1.8000000000000007 9 1.8000000000000007" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2076" d="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 8 1.8000000000000007C 10.8 1.8000000000000007 13.2 22.8 17 22.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2077" d="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 16 22.8C 18.8 22.8 21.2 24.6 25 24.6" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2078" d="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 24 24.6C 26.8 24.6 29.2 22.2 33 22.2" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2079" d="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 32 22.2C 34.8 22.2 37.2 10.5 41 10.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2080" d="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 40 10.5C 42.8 10.5 45.2 20.700000000000003 49 20.700000000000003" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2081" d="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 48 20.700000000000003C 50.8 20.700000000000003 53.2 15.9 57 15.9" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2082" d="M 56 15.9C 58.8 15.9 61.2 27 65 27" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 56 15.9C 58.8 15.9 61.2 27 65 27" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2083" d="M 64 27C 66.8 27 69.2 16.8 73 16.8" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 64 27C 66.8 27 69.2 16.8 73 16.8" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <path id="SvgjsPath2084" d="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" fill="none" fill-opacity="1" stroke="rgba(0,204,136,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk4kdmdq3j)" pathTo="M 72 16.8C 74.8 16.8 77.2 16.5 81 16.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30L 72 30L 80 30"></path>
                                                                <g id="SvgjsG2073" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle2115" r="0" cx="0" cy="0" class="apexcharts-marker wm93lyb7d no-pointer-events" stroke="#ffffff" fill="#00cc88" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2074" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2110" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2111" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2112" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2113" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2114" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect2067" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG2098" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG2064" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 15px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 204, 136);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i> </a><button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer border-0 py-5"><span class="text-muted text-sm">Showing 10 items out of 250 results found</span></div>
            </div>
        </div>
    </div>
</main>
</div>