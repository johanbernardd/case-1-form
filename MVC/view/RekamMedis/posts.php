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
    <h1>Rekam Medis</h1>
    <a href="?c=RekamMedisController&m=create_form">Tambah Rekam Medis Baru</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Pasien</th>
            <th>ID Dokter</th>
            <th>Tanggal</th>
            <th>Diagnosa</th>
            <th>Tindakan</th>
            <th>Action</th>
        </tr>
        <?php if (isset($rekamMedis) && count($rekamMedis) > 0): ?>
            <?php foreach ($rekamMedis as $rekam_medis): ?>
            <tr>
                <td><?php echo $rekam_medis['id']; ?></td>
                <td><?php echo $rekam_medis['pasien_id']; ?></td>
                <td><?php echo $rekam_medis['dokter_id']; ?></td>
                <td><?php echo $rekam_medis['tanggal']; ?></td>
                <td><?php echo $rekam_medis['diagnosa']; ?></td>
                <td><?php echo $rekam_medis['tindakan']; ?></td>
                <td>
                    <form action="" method="GET" style="display: inline;">
                        <input type="hidden" name="c" value="RekamMedisController">
                        <input type="hidden" name="m" value="edit">
                        <input type="hidden" name="id" value="<?php echo $rekam_medis['id']; ?>">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="?c=RekamMedisController&m=delete" method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?php echo $rekam_medis['id']; ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>
</html>
