<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Obat</title>
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
            <!-- <a href="home.php">⬅️Back</a>  -->
            <a href="index.php?c=ResepController&m=index">Next➡️</a>
        </div>
        <h1>Daftar Obat</h1>
        <a href="?c=ObatController&m=create">Tambah Obat</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($obats as $key => $obat) : ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $obat['nama']; ?></td>
                        <td><?php echo 'Rp ' . number_format($obat['harga'], 0, ',', '.'); ?></td>
                        <td class="action-links">
                            <a href="?c=ObatController&m=edit&id=<?php echo $obat['id']; ?>">Edit</a>
                            <a href="?c=ObatController&m=delete&id=<?php echo $obat['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus obat ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>