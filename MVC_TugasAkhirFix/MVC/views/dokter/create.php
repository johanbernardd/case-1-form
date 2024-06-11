<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Dokter</title>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #00796b;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #00796b;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #b2dfdb;
            border-radius: 5px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #00796b;
            box-shadow: 0 0 5px rgba(0, 121, 107, 0.5);
        }

        input[type="submit"] {
            background-color: #00796b;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: block;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #004d40;
            transform: scale(1.05);
        }

        input[type="submit"]:active {
            background-color: #00332a;
        }
    </style>
</head>

<body>
    <form action="index.php?c=DokterController&m=create" method="POST" enctype="multipart/form-data">
        <h1>Tambah Dokter</h1>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
        <label for="spesialisasi">Spesialisasi:</label>
        <input type="text" name="spesialisasi" id="spesialisasi" class="form-control" required>
        <label for="telepon">Telepon:</label>
        <input type="text" name="telepon" id="telepon" class="form-control" required>
        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" id="gambar" required>
        <input type="submit" value="Simpan" class="btn btn-primary">
    </form>
    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>

</html>