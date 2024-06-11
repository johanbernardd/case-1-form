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

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .profil-dokter {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="button-container">
            <!-- Add other navigation buttons if needed -->
            <a href="index.php?c=DokterController&m=create" class="btn">Tambah Dokter</a>
        </div>
        <h1>Daftar Dokter</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Spesialisasi</th>
                    <th>Telepon</th>
                    <th>Profil</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dokters as $dokter) : ?>
                    <tr>
                        <td><?php echo $dokter['id']; ?></td>
                        <td><?php echo $dokter['nama']; ?></td>
                        <td><?php echo $dokter['spesialisasi']; ?></td>
                        <td><?php echo $dokter['telepon']; ?></td>
                        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($dokter['gambar']); ?>" alt="Dokter Gambar" class="profil-dokter"></td>
                        <td class="action-links">
                            <a href="index.php?c=DokterController&m=edit&id=<?php echo $dokter['id']; ?>">Edit</a>
                            <a href="index.php?c=DokterController&m=delete&id=<?php echo $dokter['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus dokter ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php if (isset($error)) : ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>

</html>