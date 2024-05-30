<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>
<body>
    <div class="form-container">
        <h1>Tambah Rekam Medis Baru</h1>
        <form method="post" action="daftar_rekam_medis.php">
            <div class="mb-3">
                <label for="id_pasien" class="form-label">ID Pasien</label>
                <input type="text" class="form-control" name="id_pasien" id="id_pasien" required>
            </div>
            <div class="mb-3">
                <label for="id_dokter" class="form-label">ID Dokter</label>
                <input type="text" class="form-control" name="id_dokter" id="id_dokter" required>
            </div>
            <div class="mb-3">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="diagnosa">Diagnosa</label>
                <textarea name="diagnosa" id="diagnosa" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tindakan">Tindakan</label>
                <textarea name="tindakan" id="tindakan" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" >Tambah Rekam Medis Baru</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
