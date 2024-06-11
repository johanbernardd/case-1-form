<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Rekam Medis</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Rekam Medis</h1>
        <a href="?c=RekamMedisController&m=create_form" class="btn btn-primary mb-3">Tambah Rekam Medis Baru</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pasien</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal</th>
                    <th>Diagnosa</th>
                    <th>Tindakan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($rekamMedis) && count($rekamMedis) > 0) : ?>
                    <?php foreach ($rekamMedis as $rekam_medis) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($rekam_medis['id']); ?></td>
                            <td><?php echo htmlspecialchars($rekam_medis['pasien_nama']); ?></td>
                            <td><?php echo htmlspecialchars($rekam_medis['dokter_nama']); ?></td>
                            <td><?php echo htmlspecialchars($rekam_medis['tanggal']); ?></td>
                            <td><?php echo htmlspecialchars($rekam_medis['diagnosa']); ?></td>
                            <td><?php echo htmlspecialchars($rekam_medis['tindakan']); ?></td>
                            <td>
                                <form action="?c=RekamMedisController&m=edit" method="GET" style="display: inline;">
                                    <input type="hidden" name="c" value="RekamMedisController">
                                    <input type="hidden" name="m" value="edit">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($rekam_medis['id']); ?>">
                                    <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                                </form>
                                <form action="?c=RekamMedisController&m=delete" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($rekam_medis['id']); ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7">No records found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>