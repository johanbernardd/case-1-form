<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Jadwal</title>
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

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            color: #00796b;
        }

        input,
        select {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #b2dfdb;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #00796b;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #004d40;
        }

        .error {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Jadwal</h1>
        <?php if (isset($error)) : ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="index.php?c=JadwalController&m=create" method="post">
            <label for="dokter_id">Dokter</label>
            <select name="dokter_id" id="dokter_id">
                <?php foreach ($dokters as $dokter) : ?>
                    <option value="<?php echo $dokter['id']; ?>"><?php echo $dokter['nama']; ?></option>
                <?php endforeach; ?>
            </select>

            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" required>

            <label for="jam_mulai">Jam Mulai</label>
            <input type="time" name="jam_mulai" id="jam_mulai" required>

            <label for="jam_selesai">Jam Selesai</label>
            <input type="time" name="jam_selesai" id="jam_selesai" required>

            <button type="submit">Tambah</button>
        </form>
    </div>
</body>

</html>