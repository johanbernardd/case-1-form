<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Schedule</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Add Schedule</h1>
        <form action="index.php?action=create" method="post">
            <div class="form-group">
                <label for="dokter_id">Dokter ID:</label>
                <input type="text" class="form-control" id="dokter_id" name="dokter_id" required>
            </div>
            <div class="form-group">
                <label for="hari">Hari:</label>
                <input type="text" class="form-control" id="hari" name="hari" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="jam_mulai">Jam Mulai:</label>
                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
            </div>
            <div class="form-group">
                <label for="jam_selesai">Jam Selesai:</label>
                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Schedule</button>
        </form>
    </div>
</body>
</html>
