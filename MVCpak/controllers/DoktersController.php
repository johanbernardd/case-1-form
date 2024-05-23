<?php
require_once 'models/Dokter.php';

class DoktersController {
    private $dokterModel;

    public function __construct($pdo) {
        $this->dokterModel = new Dokter($pdo);
    }

    public function index() {
        $dokters = $this->dokterModel->getAllDokters();
        require 'views/dokters/index.php';
    }

    public function create() {
        require 'views/dokters/add.php';
    }

    public function store($nama, $spesialisasi, $telepon) {
        $this->dokterModel->addDokter($nama, $spesialisasi, $telepon);
        header("Location: index.php?controller=dokters&action=index");
    }

    public function edit($id) {
        $dokter = $this->dokterModel->getDokterById($id);
        require 'views/dokters/edit.php';
    }

    public function update($id, $nama, $spesialisasi, $telepon) {
        $this->dokterModel->updateDokter($id, $nama, $spesialisasi, $telepon);
        header("Location: index.php?controller=dokters&action=index");
    }

    public function delete($id) {
        $this->dokterModel->deleteDokter($id);
        header("Location: index.php?controller=dokters&action=index");
    }
}
?>
