<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Rekam Medis</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Rekam Medis</h1>
        <form action="?c=RekamMedisController&m=update" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($rekamMedis['id']); ?>">

            <div class="mb-3">
                <label for="pasien_id" class="form-label">Nama Pasien:</label>
                <select name="pasien_id" id="pasien_id" class="form-select">
                    <?php foreach ($pasien as $p) : ?>
                        <option value="<?php echo htmlspecialchars($p['id']); ?>" <?php echo $p['id'] == $rekamMedis['pasien_id'] ? 'selected' : ''; ?>><?php echo htmlspecialchars($p['nama']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="dokter_id" class="form-label">Nama Dokter:</label>
                <select name="dokter_id" id="dokter_id" class="form-select">
                    <?php foreach ($dokter as $d) : ?>
                        <option value="<?php echo htmlspecialchars($d['id']); ?>" <?php echo $d['id'] == $rekamMedis['dokter_id'] ? 'selected' : ''; ?>><?php echo htmlspecialchars($d['nama']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo htmlspecialchars($rekamMedis['tanggal']); ?>">
            </div>

            <div class="mb-3">
                <label for="diagnosa" class="form-label">Diagnosa:</label>
                <input type="text" name="diagnosa" id="diagnosa" class="form-control" value="<?php echo htmlspecialchars($rekamMedis['diagnosa']); ?>">
            </div>

            <div class="mb-3">
                <label for="tindakan" class="form-label">Tindakan:</label>
                <input type="text" name="tindakan" id="tindakan" class="form-control" value="<?php echo htmlspecialchars($rekamMedis['tindakan']); ?>">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>