<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jadwal Dokter</title>
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
        <h1>Jadwal Dokter</h1>
        <a href="index.php?c=JadwalController&m=create">Tambah Jadwal</a>
        <table>
            <thead>
                <tr>
                    <th>Dokter</th>
                    <th>Tanggal</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jadwals as $jadwal) : ?>
                    <tr>
                        <td><?php echo $jadwal['dokter_nama']; ?></td>
                        <td><?php echo $jadwal['tanggal']; ?></td>
                        <td><?php echo $jadwal['jam_mulai']; ?></td>
                        <td><?php echo $jadwal['jam_selesai']; ?></td>
                        <td class="action-links">
                            <a href="index.php?c=JadwalController&m=edit&id=<?php echo $jadwal['id']; ?>">Edit</a>
                            <a href="index.php?c=JadwalController&m=delete&id=<?php echo $jadwal['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus jadwal ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php if (isset($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>

</html>