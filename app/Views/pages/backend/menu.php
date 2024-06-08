<?= $this->extend('pages/backend/main'); ?>

<?= $this->section('menu'); ?>
<li class="nav-item">
    <a href="/dashboard" class="nav-link">
        <i class="nav-icon"><img src="<?= base_url(); ?>/assets/img/dashboard.png" style="width: 25px; height:20px" alt=""></i>
        <p>
            Dashboard
        </p>
    </a>
</li>
<li class="nav-header">MENU UTAMA</li>
<li class="nav-item menu-is-opening menu-open">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Master
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: block;">
        <li class="nav-item">
            <a href="/kategori" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Kategori</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/unit" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Unit</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/pelanggan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pelanggan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/supplier" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Supplier</p>
            </a>
        </li>
    </ul>
</li>
<?= $this->endSection(); ?>