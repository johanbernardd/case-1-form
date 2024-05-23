<?php ob_start(); ?>
<h1>Edit Dokter</h1>
<form action="index.php?controller=dokters&action=update&id=<?php echo $dokter['id']; ?>" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dokter['nama']; ?>" required>
    </div>
    <div class="form-group">
        <label for="spesialisasi">Spesialisasi</label>
        <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" value="<?php echo $dokter['spesialisasi']; ?>" required>
    </div>
    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $dokter['telepon']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php $view = ob_get_clean(); ?>
<?php include 'views/layouts/main.php'; ?>
