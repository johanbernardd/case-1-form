<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Tambah Pembayaran</h1>
        <form method="post" action="daftar_pembayaran.php">
            <div class="mb-3">
                <label for="angka" class="form-label">Rekam Medis ID</label>
                <input type="number" class="form-control" name="angka" id="angka" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                <input type="number" class="form-control" name="jumlah_bayar" id="jumlah_bayar" required>
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <select class="form-select" name="metode_pembayaran" id="metode_pembayaran" required>
                    <option value="cash">Cash</option>
                    <option value="kredit">Kredit</option>
                    <option value="debit">Debit</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Tambah Pembayaran</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
