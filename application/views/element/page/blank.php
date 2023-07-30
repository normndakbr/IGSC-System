<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $page_title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><?= $bc_item ?></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $bc_subitem ?></li>
        </ol>
    </div>

    <div class="text-center">
        <img src="<?= base_url('assets/'); ?>img/under-construction.jpg" style="max-height: 300px">
        <h4 class="pt-3">This page is under construction, can't wait to see you soon :)</h4>
    </div>


</div>
<!---Container Fluid-->