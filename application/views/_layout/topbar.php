<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" style="background-color: #609966;">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow mx-1" id="notifikasi">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Notifikasi
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('element/weekly_report'); ?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">31 July 2023</div>
                                Ada update baru di Contractor Weekly Report.
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('element/improvement'); ?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">25 July 2023</div>
                                Project Improvement baru telah di submit.
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('element/ppa'); ?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-danger">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">25 July 2023</div>
                                Perhatian!! Terdapat kondisi AWAS pada area settling pond.
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('element/notifikasi'); ?>">Tampilkan Semua Notifikasi</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1" id="pesanMasuk">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <span class="badge badge-warning badge-counter">2</span>
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Inbox Feedback Terbaru
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="assets/img/boy.png" style="max-width: 60px" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="">
                                <div class="text-truncate">Jangan lupa bayar pajak</div>
                                <div class="small text-gray-500">Arif Mustaqim · 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="assets/img/girl.png" style="max-width: 60px" alt="">
                                <div class="status-indicator bg-default"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Jangan lupa report progress masing - masing hari ini ya...</div>
                                <div class="small text-gray-500">Nursiya · 15m</div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Tampilkan Semua Pesan.</a>
                    </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/boy.png" style="max-width: 60px">
                        <span class="ml-2 d-none d-lg-inline text-white small">Tito Aulia Saleh</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('element/login'); ?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Topbar -->