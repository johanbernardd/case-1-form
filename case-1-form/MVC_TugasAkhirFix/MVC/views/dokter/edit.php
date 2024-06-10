<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Dokter</title>
    <style>
        body {
            /*young blue*/
            background-color: #e0f7fa;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            /*dark green*/
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
    <!-- Load Bootstrap from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+zX25n0HfjemglF/5I6B1FQkTk9PwOz5g4l5xoT" crossorigin="anonymous">
</head>

<body>
    <form action="index.php?c=DokterController&m=edit&id=<?php echo $_GET['id']; ?>" method="POST">
        <h1>Edit Dokter</h1>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $dokterData['nama']; ?>" required>
        <label for="spesialisasi">Spesialisasi:</label>
        <input type="text" name="spesialisasi" id="spesialisasi" class="form-control" value="<?php echo $dokterData['spesialisasi']; ?>" required>
        <label for="telepon">Telepon:</label>
        <input type="number" name="telepon" id="telepon" class="form-control" value="<?php echo $dokterData['telepon']; ?>" required>
        <input type="submit" value="Simpan" class="btn btn-primary">
    </form>

    <!-- Load script Bootstrap from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-RZMP4gA3I1Z4EuVYzRXnjsTFgdJXLQrUiv5KsyS+9Ct7Sc/AWEg8b1pBjl2Ogm8C" crossorigin="anonymous"></script>
</body>

</html>
