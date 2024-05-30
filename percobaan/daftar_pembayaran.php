<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Daftar Pembayaran</h1>
        <div class="data-table">
            <?php
            if (isset($_POST['angka']) && isset($_POST['jumlah_bayar']) && isset($_POST['metode_pembayaran'])) {
                $angka = $_POST['angka'];
                $jm = $_POST['jumlah_bayar'];
                $pm = $_POST['metode_pembayaran'];

                $_SESSION['data'] = array(
                    'angka' => $angka,
                    'jumlah_bayar' => $jm,
                    'metode_pembayaran' => $pm
                );

                echo '<table>';
                echo '<tr><th>Rekam Medis ID</th><th>Jumlah Bayar</th><th>Metode Pembayaran</th></tr>';
                echo "<tr><td>$angka</td><td>$jm</td><td>$pm</td></tr>";
                echo '</table>';

                echo '<p><a href="tambah_pembayaran.php">Tambah Pembayaran</a></p>';

            } else {
                echo '<div class="alert alert-warning" role="alert">Masukkan data terlebih dahulu.</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
