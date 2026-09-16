<?php

/** @var array $dtakun3 */ ?>
<?= $this->extend('layout/backend') ?>

<?= $this->section('title') ?>
Kode Akun 3
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Kode Akun 3</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Kode Akun 3 (Rincian Akun)</h4>
                <div class="card-header-action">
                    <a href="<?= site_url('akun3/new') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body">

                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="table-responsive">
                    <table class="table table-striped table-md" id="table-1">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Kode Akun 3</th>
                                <th>Nama Akun 3</th>
                                <th>Sub-Akun 2</th>
                                <th>Header Akun 1</th>
                                <th class="text-center" width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dtakun3 as $key => $value) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= esc($value['kode_akun3']) ?></td>
                                    <td><?= esc($value['nama_akun3']) ?></td>
                                    <td><?= esc($value['kode_akun2'] . ' - ' . $value['nama_akun2']) ?></td>
                                    <td><?= esc($value['kode_akun1'] . ' - ' . $value['nama_akun1']) ?></td>
                                    <td class="text-center">
                                        <a href="<?= site_url('akun3/' . $value['id_akun3'] . '/edit') ?>" class="btn btn-warning btn-sm" title="Edit Data"><i class="fas fa-pencil-alt"></i></a>

                                        <form action="<?= site_url('akun3/' . $value['id_akun3']) ?>" method="post" class="d-inline form-delete">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>