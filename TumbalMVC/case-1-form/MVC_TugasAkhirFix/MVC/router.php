<?php

require_once 'config/database.php';
// require_once 'controllers/ObatController.php';
// require_once 'controllers/ResepController.php';
require_once 'controllers/DokterController.php';
require_once 'controllers/JadwalController.php';

//$controller = isset($_GET['controller']) ? $_GET['controller'] : 'dokter'; //'obat'
// $action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = ($_GET['controller']);
$action = ($_GET['action']);


switch ($controller) {
    case 'dokter':
        $dokterController = new DokterController();
        switch ($action) {
            case 'index':
                $dokterController->index();
                break;
            case 'create':
                $dokterController->create();
                break;
            case 'edit':
                $dokterController->edit($_GET['id']);
                break;
            case 'update':
                $dokterController->update($_GET['id']);
                break;
            case 'delete':
                $dokterController->delete($_GET['id']);
                break;
        }
        break;

    case 'jadwal':
        $jadwalController = new JadwalController();
        switch ($action) {
            case 'index':
                $jadwalController->index();
                break;
            case 'create':
                $jadwalController->create();
                break;
            case 'edit':
                $jadwalController->edit($_GET['id']);
                break;
            case 'delete':
                $jadwalController->delete($_GET['id']);
                break;
        }
        break;
    
}
