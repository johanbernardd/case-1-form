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
    <div class="container mt-5">
        <h1>Tambah Pembayaran</h1>
        <?php if (!empty($error)) : ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        <form action="?c=PembayaranController&m=create_process" method="POST">
            <div class="mb-3">
                <label for="rekam_medis_id" class="form-label">Rekam Medis ID</label>
                <select name="rekam_medis_id" id="rekam_medis_id" class="form-select">
                    <?php foreach ($rekamMedis as $rm) : ?>
                        <option value="<?php echo htmlspecialchars($rm['id']); ?>"><?php echo htmlspecialchars($rm['id']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                <input type="number" name="jumlah_bayar" id="jumlah_bayar" class="form-control">
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Pembayaran</button>
        </form>
    </div>
</body>

</html>