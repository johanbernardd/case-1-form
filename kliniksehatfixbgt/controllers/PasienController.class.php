<?php

class PasienController extends Controller
{
    private $pasienModel;

    public function __construct()
    {
        $this->pasienModel = $this->loadModel('PasienModel');
    }

    public function index()
    {
        $result = $this->pasienModel->readAll();
        $this->loadView('pasien/index', ['result' => $result]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $this->pasienModel->create($name, $dob, $gender, $address);
            header('Location: index.php?c=PasienController&m=index');
            exit();
        }
        $this->loadView('pasien/create');
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $this->pasienModel->update($id, $name, $dob, $gender, $address);
            header('Location: index.php?c=PasienController&m=index');
            exit();
        } else {
            $patientData = $this->pasienModel->readOne($id);
            $this->loadView('pasien/edit', ['patientData' => $patientData]);
        }
    }

    public function delete($id)
    {
        $this->pasienModel->delete($id);
        header('Location: index.php?c=PasienController&m=index');
        exit();
    }
}
