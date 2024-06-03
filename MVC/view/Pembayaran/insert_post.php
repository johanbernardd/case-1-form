<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <title>Tambah Pembayaran</title>
</head>

<body>
    <h1>Tambah Pembayaran</h1>
    <form action="?c=PembayaranController&m=create_process" method="POST">
        <label for="rekam_medis">Rekam Medis ID:</label>
        <select name="rekam_medis_id" id="rekam_medis">
            <?php foreach ($rekamMedis as $rekam_medis) : ?>
                <option value="<?php echo $rekam_medis['id']; ?>"><?php echo $rekam_medis['id']; ?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="jumlah_bayar">Jumlah Bayar:</label>
        <input type="number" id="jumlah_bayar" name="jumlah_bayar" step="0.01" required><br>
        <label for="metode_pembayaran">Metode Pembayaran:</label>
        <select id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="Cash">Cash</option>
            <option value="Debit">Debit</option>
            <option value="Credit">Credit</option>
        </select><br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>