<?php
require_once 'models/Pasien.php';

class PatientController
{
    public function index()
    {
        $pasien = new Pasien();
        $result = $pasien->readAll();
        $patients = $result->fetchAll(PDO::FETCH_ASSOC);
        require_once 'views/patient/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pasien = new Pasien();
            $pasien->name = $_POST['name'];
            $pasien->dob = $_POST['dob'];
            $pasien->gender = $_POST['gender'];
            $pasien->address = $_POST['address'];
            $pasien->create();
            header('Location: index.php');
        }
        require_once 'views/patient/create.php';
    }

    public function edit($id)
    {
        $pasien = new Pasien();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pasien->name = $_POST['name'];
            $pasien->dob = $_POST['dob'];
            $pasien->gender = $_POST['gender'];
            $pasien->address = $_POST['address'];
            $pasien->update($id);
            header('Location: index.php');
        } else {
            $patientData = $pasien->readOne($id);
            require_once 'views/patient/edit.php';
        }
    }

    public function delete($id)
    {
        $pasien = new Pasien();
        $pasien->delete($id);
        header('Location: index.php');
    }
}
