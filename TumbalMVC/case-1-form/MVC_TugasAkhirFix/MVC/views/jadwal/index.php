<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Jadwal</title>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            /* Warna putih */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #00796b;
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            color: #00796b;
            text-decoration: none;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #b2dfdb;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #00796b;
            color: #ffffff;
        }

        td {
            background-color: #e0f7fa;
        }

        .action-links a {
            color: #00796b;
        }

        .action-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="button-container">
            <a href="router.php?controller=dokter&action=index">⬅️Back</a>
        </div>
        <h1>Daftar Jadwal</h1>
        <a href="./create.php">Tambah Jadwal</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once (__DIR__ . '/../../controllers/JadwalController.php');

                // Membuat instance dari DokterController dan memanggil metode index
                $jadwalController = new JadwalController();
                $jadwalController->index();

                // Pastikan $dokters didefinisikan setelah pemanggilan metode index
                $jadwals = $jadwalController->jadwals;
                foreach ($jadwals as $key => $jadwal): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $jadwal['nama_dokter']; ?></td>
                        <td><?php echo $jadwal['tanggal']; ?></td>
                        <td><?php echo $jadwal['jam_mulai']; ?></td>
                        <td><?php echo $jadwal['jam_selesai']; ?></td>
                        <td class="action-links">
                            <a href="router.php?controller=jadwal&action=edit&id=<?php echo $jadwal['id']; ?>">Edit</a>
                            <a href="router.php?controller=jadwal&action=delete&id=<?php echo $jadwal['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>