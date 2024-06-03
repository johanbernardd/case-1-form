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
    <h1>Pembayaran</h1>
    <a href="?c=PembayaranController&m=create_form">Tambah Pembayaran Baru</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Rekam Medis ID</th>
            <th>Jumlah Bayar</th>
            <th>Metode Pembayaran</th>
            <th>Tanggal Pembayaran</th>
            <th>Action</th>
        </tr>
        <?php foreach ($pembayaran as $p) : ?>
            <tr>
                <td><?php echo $p['id']; ?></td>
                <td><?php echo $p['rekam_medis_id']; ?></td>
                <td><?php echo $p['jumlah_bayar']; ?></td>
                <td><?php echo $p['metode_pembayaran']; ?></td>
                <td><?php echo $p['created_at']; ?></td>
                <td>
                    <form action="?c=PembayaranController&m=edit&id=<?php echo $p['id']; ?>" method="get" style="display:inline;">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="?c=PembayaranController&m=delete" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>