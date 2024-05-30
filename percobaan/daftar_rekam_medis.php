<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <h1>Daftar Rekam Medis</h1>
        <div class="data-table">
            <?php
            if (isset($_POST['id_pasien']) && isset($_POST['id_dokter']) && isset($_POST['tanggal']) && isset($_POST['diagnosa']) && isset($_POST['tindakan'])) {
                $id_pasien = $_POST['id_pasien'];
                $id_dokter = $_POST['id_dokter'];
                $tanggal = $_POST['tanggal'];
                $diagnosa = $_POST['diagnosa'];
                $tindakan = $_POST['tindakan'];

                echo '<table>';
                echo '<tr><th>ID Pasien</th><th>ID Dokter</th><th>Tanggal</th><th>Diagnosa</th><th>Tindakan</th></tr>';
                echo "<tr><td>$id_pasien</td><td>$id_dokter</td><td>$tanggal</td><td>$diagnosa</td><td>$tindakan</td></tr>";
                echo '</table>';

                echo '<p><a href="tambah_pembayaran.php" class="btn btn-primary text-white">Tambah Pembayaran</a></p>';

            } else {
                echo '<div class="alert alert-warning" role="alert">Masukkan data terlebih dahulu.</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
