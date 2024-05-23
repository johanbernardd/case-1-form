<?php ob_start(); ?>
<div class="container">
    <h1 class="mb-4">Daftar Dokter</h1>
    <a href="index.php?controller=dokters&action=create" class="btn btn-primary mb-3">Tambah Dokter Baru</a>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Spesialisasi</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dokters as $index => $dokter): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $dokter['nama']; ?></td>
                    <td><?php echo $dokter['spesialisasi']; ?></td>
                    <td><?php echo $dokter['telepon']; ?></td>
                    <td>
                        <a href="index.php?controller=dokters&action=edit&id=<?php echo $dokter['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?controller=dokters&action=delete&id=<?php echo $dokter['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $view = ob_get_clean(); ?>
<?php include 'views/layouts/main.php'; ?>
