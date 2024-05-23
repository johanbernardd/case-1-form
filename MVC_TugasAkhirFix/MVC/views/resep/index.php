<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Resep</title>
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
        <h1>Daftar Resep</h1>
        <a href="index.php?controller=resep&action=create">Tambah Resep</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reseps as $key => $resep) : ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $resep['nama_obat']; ?></td>
                        <td><?php echo $resep['tanggal']; ?></td>
                        <td><?php echo $resep['jumlah']; ?></td>
                        <td class="action-links">
                            <a href="index.php?controller=resep&action=edit&id=<?php echo $resep['id']; ?>">Edit</a>
                            <a href="index.php?controller=resep&action=delete&id=<?php echo $resep['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>