<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Dokter</title>
    <style>
        body {
            /*blue*/
            background-color: #e0f7fa;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            /*green*/
            color: #00796b;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            /*white*/
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
            /*old-green when hover*/
            background-color: #004d40;
            transform: scale(1.05);
        }

        input[type="submit"]:active {
            background-color: #00332a;
        }
    </style>
    <!-- Load Bootstrap from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+zX25n0HfjemglF/5I6B1FQkTk9PwOz5g4l5xoT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tambah Jadwal</h1>
        <?php if (!empty($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <form method="post" action="?c=JadwalController&m=create">
            <label for="dokter_id">Dokter</label>
            <select name="dokter_id" id="dokter_id">
                <option value="">Pilih Dokter</option>
                <?php foreach ($dokters as $dokter): ?>
                    <option value="<?= $dokter['id'] ?>"><?= htmlspecialchars($dokter['nama']) ?></option>
                <?php endforeach; ?>
            </select>
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" required>
            <label for="jam_mulai">Jam Mulai</label>
            <input type="time" name="jam_mulai" id="jam_mulai" required>
            <label for="jam_selesai">Jam Selesai</label>
            <input type="time" name="jam_selesai" id="jam_selesai" required>
            <input type="submit" value="Tambah">
        </form>
    </div>
</body>

</html>