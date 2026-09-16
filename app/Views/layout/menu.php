<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li>
        <a class="nav-link" href="<?= base_url() ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
    </li>

    <li class="menu-header">Master Data</li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i> <span>Kode Akun</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= site_url('akun1') ?>">Kode Akun 1</a></li>
            <li><a class="nav-link" href="<?= site_url('akun2') ?>">Kode Akun 2</a></li>
            <li><a class="nav-link" href="<?= site_url('akun3') ?>">Kode Akun 3</a></li>
        </ul>
    </li>

    <li class="menu-header">Transaksi Akuntansi</li>
    <li><a class="nav-link" href="#"><i class="fas fa-book"></i> <span>Jurnal Umum</span></a></li>
    <li><a class="nav-link" href="#"><i class="fas fa-file-invoice"></i> <span>Posting</span></a></li>
    <li><a class="nav-link" href="#"><i class="fas fa-balance-scale"></i> <span>Neraca Saldo</span></a></li>
    <li><a class="nav-link" href="#"><i class="fas fa-table"></i> <span>Neraca Lajur</span></a></li>
    <li><a class="nav-link" href="#"><i class="fas fa-exchange-alt"></i> <span>Penyesuaian</span></a></li>

    <li class="menu-header">Laporan</li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Laporan Keuangan</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="#">Laba Rugi</a></li>
            <li><a class="nav-link" href="#">Perubahan Modal</a></li>
            <li><a class="nav-link" href="#">Neraca</a></li>
            <li><a class="nav-link" href="#">Arus Kas</a></li>
        </ul>
    </li>
</ul>