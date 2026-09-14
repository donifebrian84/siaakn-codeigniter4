<?php

/** @var array $akun2 */ ?>
<?php /** @var array $dtakun1 */ ?>

<?= $this->extend('layout/backend') ?>

<?= $this->section('title') ?>
Edit Kode Akun 2
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Edit Kode Akun 2</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit Sub-Akun</h4>
            </div>
            <div class="card-body">

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

                <form action="<?= site_url('akun2/' . $akun2['id_akun2']) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label>Header Akun 1</label>
                        <select name="id_akun1" class="form-control selectric" required>
                            <option value="">-- Pilih Akun Header --</option>
                            <?php foreach ($dtakun1 as $row) : ?>
                                <option value="<?= $row['id_akun1'] ?>" <?= old('id_akun1', $akun2['id_akun1']) == $row['id_akun1'] ? 'selected' : '' ?>>
                                    <?= $row['kode_akun1'] ?> - <?= $row['nama_akun1'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kode Akun 2</label>
                        <input type="text" name="kode_akun2" class="form-control" value="<?= old('kode_akun2', $akun2['kode_akun2']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Akun 2</label>
                        <input type="text" name="nama_akun2" class="form-control" value="<?= old('nama_akun2', $akun2['nama_akun2']) ?>" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Update Data</button>
                        <a href="<?= site_url('akun2') ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>