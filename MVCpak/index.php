<!-- index untuk memunculkan jadwal dokter
<!DOCTYPE html>
<html>
<head>
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 text-center">Jadwal Dokter</h1>
        <a href="views/doctors/add.php" class="btn btn-primary mb-4">Tambah Jadwal</a>
        <div> -->
<!--
        </div>
    </div>
    <div class="footer">
        <p>2023 &copy; Clinik Pweb Team</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html> -->

<?php
// require 'config/database.php';
// require 'controllers/DoktersController.php';

// $controller = isset($_GET['controller']) ? $_GET['controller'] : 'dokters';
// $action = isset($_GET['action']) ? $_GET['action'] : 'index';

// $doktersController = new DoktersController($pdo);

// if ($controller == 'dokters') {
//     switch ($action) {
//         case 'index':
//             $doktersController->index();
//             break;
//         case 'create':
//             $doktersController->create();
//             break;
//         case 'store':
//             $doktersController->store($_POST['nama'], $_POST['spesialisasi'], $_POST['telepon']);
//             break;
//         case 'edit':
//             $doktersController->edit($_GET['id']);
//             break;
//         case 'update':
//             $doktersController->update($_GET['id'], $_POST['nama'], $_POST['spesialisasi'], $_POST['telepon']);
//             break;
//         case 'delete':
//             $doktersController->delete($_GET['id']);
//             break;
//         default:
//             $doktersController->index();
//             break;
//     }
// }
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once 'config/Database.php';
    require_once 'C:\xampp\htdocs\MVCpak\controllers\ScheduleController.php';

    $controller = new ScheduleController();

    $action = isset($_GET['action']) ? $_GET['action'] : 'index';

    switch ($action) {
        case 'create':
            $controller->create();
            break;
        default:
            $controller->index();
            break;
    }

?>