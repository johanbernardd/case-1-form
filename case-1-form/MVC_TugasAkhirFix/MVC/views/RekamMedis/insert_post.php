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
    <h1>Tambah Rekam Medis</h1>
    <form action="?c=RekamMedisController&m=create_process" method="POST">
        <label for="pasien_id">ID Pasien:</label>
        <select name="pasien_id" id="pasien_id">
            <?php foreach ($pasien as $p) : ?>
                <option value="<?php echo $p['id']; ?>"><?php echo $p['nama']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="dokter_id">ID Dokter:</label>
        <select name="dokter_id" id="dokter_id">
            <?php foreach ($dokter as $d) : ?>
                <option value="<?php echo $d['id']; ?>"><?php echo $d['nama']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal"><br>

        <label for="diagnosa">Diagnosa:</label>
        <input type="text" name="diagnosa" id="diagnosa"><br>

        <label for="tindakan">Tindakan:</label>
        <input type="text" name="tindakan" id="tindakan"><br>

        <button type="submit">Tambah</button>
    </form>
</body>

</html>