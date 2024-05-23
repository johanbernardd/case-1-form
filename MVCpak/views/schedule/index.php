<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schedule List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Schedule List</h1>
        <a href="index.php?action=create" class="btn btn-primary mb-3">Add Schedule</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dokter ID</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schedules as $schedule): ?>
                <tr>
                    <td><?php echo $schedule['id']; ?></td>
                    <td><?php echo $schedule['dokter_id']; ?></td>
                    <td><?php echo $schedule['hari']; ?></td>
                    <td><?php echo $schedule['tanggal']; ?></td>
                    <td><?php echo $schedule['jam_mulai']; ?></td>
                    <td><?php echo $schedule['jam_selesai']; ?></td>
                    <td><?php echo $schedule['created_at']; ?></td>
                    <td><?php echo $schedule['updated_at']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
