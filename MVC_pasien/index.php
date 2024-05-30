<?php
require_once 'config/database.php';
require_once 'controllers/PatientController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'patient';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($controller) {
    case 'patient':
        $patientController = new PatientController();
        if ($action == 'index') {
            $patientController->index();
        } elseif ($action == 'create') {
            $patientController->create();
        } elseif ($action == 'store') {
            $patientController->store();
        } elseif ($action == 'edit') {
            $patientController->edit($id);
        } elseif ($action == 'update') {
            $patientController->update($id);
        } elseif ($action == 'delete') {
            $patientController->delete($id);
        } else {
            echo "Action not found!";
        }
        break;
    default:
        echo "Controller not found!";
        break;
}
?>

