<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <title>Pembayaran</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Pembayaran</h1>
        <a href="?c=PembayaranController&m=create_form" class="btn btn-primary mb-3">Tambah Pembayaran Baru</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rekam Medis ID</th>
                    <th>Jumlah Bayar</th>
                    <th>Metode Pembayaran</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pembayaran as $p) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($p['id']); ?></td>
                        <td><?php echo htmlspecialchars($p['rekam_medis_id']); ?></td>
                        <td><?php echo htmlspecialchars($p['jumlah_bayar']); ?></td>
                        <td><?php echo htmlspecialchars($p['metode_pembayaran']); ?></td>
                        <td><?php echo htmlspecialchars($p['created_at']); ?></td>
                        <td>
                            <a href="?c=PembayaranController&m=edit&id=<?php echo htmlspecialchars($p['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="?c=PembayaranController&m=delete" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($p['id']); ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>