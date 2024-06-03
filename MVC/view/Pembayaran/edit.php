<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <title>Edit Pembayaran</title>
</head>
<body>
    <h1>Edit Pembayaran</h1>
    <form action="?c=PembayaranController&m=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $pembayaran->id; ?>">
        <label for="rekam_medis_id">Rekam Medis ID:</label>
        <input type="number" id="rekam_medis_id" name="rekam_medis_id" value="<?php echo $pembayaran->rekam_medis_id; ?>" required><br><br>
        <label for="jumlah_bayar">Jumlah Bayar:</label>
        <input type="number" id="jumlah_bayar" name="jumlah_bayar" value="<?php echo $pembayaran->jumlah_bayar; ?>" step="0.01" required><br><br>
        <label for="metode_pembayaran">Metode Pembayaran:</label>
        <select id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="Cash" <?php if ($pembayaran->metode_pembayaran === 'Cash') echo 'selected'; ?>>Cash</option>
            <option value="Debit" <?php if ($pembayaran->metode_pembayaran === 'Debit') echo 'selected'; ?>>Debit</option>
            <option value="Credit" <?php if ($pembayaran->metode_pembayaran === 'Credit') echo 'selected'; ?>>Credit</option>
        </select><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

