<?= $this->extend('layout/backend') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Tambah Kode Akun 1</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah Kode Akun 1</h4>
            </div>
            <div class="card-body">

                <!-- Pesan Error Validasi Server Side -->
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

                <form action="<?= site_url('akun1') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label>Kode Akun 1</label>
                        <input type="text" name="kode_akun1" class="form-control" value="<?= old('kode_akun1') ?>" placeholder="Masukkan Kode Akun">
                    </div>

                    <div class="form-group">
                        <label>Nama Akun 1</label>
                        <input type="text" name="nama_akun1" class="form-control" value="<?= old('nama_akun1') ?>" placeholder="Masukkan Nama Akun">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="<?= site_url('akun1') ?>" class="btn btn-warning">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>