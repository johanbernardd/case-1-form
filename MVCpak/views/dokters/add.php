<?php ob_start(); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            Tambah Dokter
        </div>
        <div class="card-body">
            <form action="index.php?controller=dokters&action=store" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="spesialisasi">Spesialisasi</label>
                    <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" required>
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?php $view = ob_get_clean(); ?>
<?php include 'views/layouts/main.php'; ?>
