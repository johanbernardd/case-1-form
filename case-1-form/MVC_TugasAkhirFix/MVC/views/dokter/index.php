<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Dokter</title>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
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
            <a href="index.php">⬅️Back</a>
            <a href="index.php?c=JadwalController&m=index">Next➡️</a>
        </div>
        <h1>Daftar Dokter</h1>
        <a href="?c=DokterController&m=create">Tambah Dokter</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Spesialisasi</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // //  require_once (__DIR__ . './DokterController.php'); 
                // // Membuat instance dari DokterController dan memanggil metode index
                // $dokterController = new DokterController();
                // $dokterController->index();

                // // Pastikan $dokters didefinisikan setelah pemanggilan metode index
                // $dokters = $dokterController->dokters;
                foreach ($dokters as $key => $dokter): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $dokter['nama']; ?></td>
                        <td><?php echo $dokter['spesialisasi']; ?></td>
                        <td><?php echo $dokter['telepon']; ?></td>
                        <td class="action-links">
                            <a href="?c=DokterController&m=edit&id=<?php echo $dokter['id']; $_GET['id'] = $dokter['id']?>"> Edit</a>
                            <a href="?c=DokterController&m=delete&id=<?php echo $dokter['id']; ?>"
                                onclick="return confirm('Anda yakin ingin menghapus dokter ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
