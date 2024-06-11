<?php
// require_once 'models/Resep.php';
// require_once 'models/Obat.php'; 

class ResepController extends Controller
{

    private $resepModel;

    public function __construct()
    {
        $this->resepModel = $this->loadModel('ResepModel');
    }

    public function index()
    {
        $resepModel = $this->loadModel('ResepModel');
        $reseps = $resepModel->readAll();
        $this->loadView('resep/index', ['reseps' => $reseps]);
    }

    public function create()
    {
        $obatModel = $this->loadModel('ObatModel');
        $obats = $obatModel->readAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $resepModel = $this->loadModel('ResepModel');
            $resepModel->create($_POST['obat_id'], $_POST['nama_obat'], $_POST['tanggal'], $_POST['jumlah']);
            header("Location: index.php?c=ResepController&m=index");
            exit();
        }
        $this->loadView('resep/create', ['obats' => $obats]);
    }

    public function edit($id)
    {
        $obatModel = $this->loadModel('ObatModel');
        $obats = $obatModel->readAll();
        $resepData = $this->resepModel->readOne($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->resepModel->update($id, $_POST['obat_id'], $_POST['nama_obat'], $_POST['tanggal'], $_POST['jumlah']);
            header("Location: index.php?c=ResepController&m=index");
            exit();
        }

        $this->loadView('resep/edit', ['obats' => $obats, 'resepData' => $resepData]);
    }

    public function delete($id)
    {
        $resepModel = $this->loadModel('ResepModel');
        $resepModel->delete($id);
        header("Location: index.php?c=ResepController&m=index");
        exit();
    }
}
