<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background-color: #40513B;" href="index.html">
        <div class="sidebar-brand-text mx-3">I-GSC System</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item" id="liPeople">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeople" aria-expanded="true" aria-controls="collapsePeople">
            <i class="fa fa-users"></i>
            <span>People</span>
        </a>
        <div id="collapsePeople" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('element/organization_chart'); ?>">Organization Chart</a>
            </div>
        </div>
    </li>
    <li class="nav-item" id="liSystem">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystem" aria-expanded="true" aria-controls="collapseSystem">
            <i class="fa fa-vector-square"></i>
            <span>System</span>
        </a>
        <div id="collapseSystem" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('element/igsc_dashboard'); ?>">I-GSC Dashboard</a>
            </div>
        </div>
    </li>
    <li class="nav-item" id="liProcess">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProcess" aria-expanded="true" aria-controls="collapseProcess">
            <i class="fa fa-server"></i>
            <span>Process</span>
        </a>
        <div id="collapseProcess" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Process</h6>
                <a class="collapse-item" href="<?= base_url('element/ppa'); ?>">PPA</a>
                <a class="collapse-item" href="<?= base_url('element/ppu'); ?>">PPU</a>
                <a class="collapse-item" href="<?= base_url('element/plb3'); ?>">PLB3</a>
                <a class="collapse-item" href="<?= base_url('element/kkl'); ?>">KKL</a>
                <a class="collapse-item" href="<?= base_url('element/enviro_incident'); ?>">Environmental Incident</a>
                <a class="collapse-item" href="<?= base_url('element/weekly_report'); ?>">Weekly Report</a>
            </div>
        </div>
    </li>
    <li class="nav-item" id="liImprovement">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContinual" aria-expanded="true" aria-controls="collapseContinual">
            <i class="fa fa-users-cog"></i>
            <span>Continual Improvement</span>
        </a>
        <div id="collapseContinual" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Continual Improvement</h6>
                <a class="collapse-item" href="<?= base_url('element/improvement'); ?>">Project Improvement</a>
            </div>
        </div>
    </li>
    <li class="nav-item" id="liMisc">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMiscellaneous" aria-expanded="true" aria-controls="collapseMiscellaneous">
            <i class="fas fa-puzzle-piece"></i>
            <span>Miscellaneous</span>
        </a>
        <div id="collapseMiscellaneous" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Miscellaneous</h6>
                <a class="collapse-item" href="<?= base_url('element/gallery'); ?>">Gallery</a>
                <a class="collapse-item" href="<?= base_url('element/publication'); ?>">Publication</a>
                <a class="collapse-item" href="<?= base_url('element/mailbox'); ?>">Mailbox</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->