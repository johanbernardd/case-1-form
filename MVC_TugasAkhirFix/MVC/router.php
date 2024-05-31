<?php

require_once 'config/database.php';
require_once 'controllers/ObatController.php';
require_once 'controllers/ResepController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'obat';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'obat':
        $obatController = new ObatController();
        switch ($action) {
            case 'index':
                $obatController->index();
                break;
            case 'create':
                $obatController->create();
                break;
            case 'edit':
                $obatController->edit($_GET['id']);
                break;
            case 'delete':
                $obatController->delete($_GET['id']);
                break;
        }
        break;

    case 'resep':
        $resepController = new ResepController();
        switch ($action) {
            case 'index':
                $resepController->index();
                break;
            case 'create':
                $resepController->create();
                break;
            case 'edit':
                $resepController->edit($_GET['id']);
                break;
            case 'delete':
                $resepController->delete($_GET['id']);
                break;
        }
        break;
}
