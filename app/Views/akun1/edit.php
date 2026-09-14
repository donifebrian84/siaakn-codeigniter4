<?php

/** @var array $akun1 */ ?>
<?= $this->extend('layout/backend') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Edit Kode Akun 1</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit Kode Akun 1</h4>
            </div>
            <div class="card-body">

                <!-- Notifikasi Error Validasi Server Side -->
                <?php if (session()->getFlashdata('errors')) : ?>
                    <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                            <ul>
                                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Form mengarah ke route update (POST dengan Spoofing PUT) -->
                <form action="<?= site_url('akun1/update/' . $akun1['id_akun1']) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT"> <!-- Method Spoofing untuk PUT -->

                    <div class="form-group">
                        <label>Kode Akun 1</label>
                        <input type="text" name="kode_akun1" class="form-control" value="<?= old('kode_akun1', $akun1['kode_akun1']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Akun 1</label>
                        <input type="text" name="nama_akun1" class="form-control" value="<?= old('nama_akun1', $akun1['nama_akun1']) ?>" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Update Data</button>
                        <a href="<?= site_url('akun1') ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>