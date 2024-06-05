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
    <h1>Edit Rekam Medis</h1>
    <form action="?c=RekamMedisController&m=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $rekamMedis['id']; ?>">

        <label for="pasien_id">ID Pasien:</label>
        <select name="pasien_id" id="pasien_id">
            <?php foreach ($pasien as $p) : ?>
                <option value="<?php echo $p['id']; ?>" <?php echo $p['id'] == $rekamMedis['pasien_id'] ? 'selected' : ''; ?>><?php echo $p['nama']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="dokter_id">ID Dokter:</label>
        <select name="dokter_id" id="dokter_id">
            <?php foreach ($dokter as $d) : ?>
                <option value="<?php echo $d['id']; ?>" <?php echo $d['id'] == $rekamMedis['dokter_id'] ? 'selected' : ''; ?>><?php echo $d['nama']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" value="<?php echo $rekamMedis['tanggal']; ?>"><br>

        <label for="diagnosa">Diagnosa:</label>
        <input type="text" name="diagnosa" id="diagnosa" value="<?php echo $rekamMedis['diagnosa']; ?>"><br>

        <label for="tindakan">Tindakan:</label>
        <input type="text" name="tindakan" id="tindakan" value="<?php echo $rekamMedis['tindakan']; ?>"><br>

        <button type="submit">Update</button>
    </form>
</body>

</html>