<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Tambah Rekam Medis</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Tambah Rekam Medis</h1>
        <form action="?c=RekamMedisController&m=create_process" method="POST">
            <div class="mb-3">
                <label for="pasien_id" class="form-label">Nama Pasien:</label>
                <select name="pasien_id" id="pasien_id" class="form-select">
                    <?php foreach ($pasien as $p) : ?>
                        <option value="<?php echo htmlspecialchars($p['id']); ?>"><?php echo htmlspecialchars($p['nama']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="dokter_id" class="form-label">Nama Dokter:</label>
                <select name="dokter_id" id="dokter_id" class="form-select">
                    <?php foreach ($dokter as $d) : ?>
                        <option value="<?php echo htmlspecialchars($d['id']); ?>"><?php echo htmlspecialchars($d['nama']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control">
            </div>

            <div class="mb-3">
                <label for="diagnosa" class="form-label">Diagnosa:</label>
                <input type="text" name="diagnosa" id="diagnosa" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tindakan" class="form-label">Tindakan:</label>
                <input type="text" name="tindakan" id="tindakan" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>

</html>