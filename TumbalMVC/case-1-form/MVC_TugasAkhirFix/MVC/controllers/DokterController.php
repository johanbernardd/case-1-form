<?php
require_once(__DIR__ . '/../models/Dokter.php');

class DokterController
{
    public $dokters;
    public $dokterData;
    public function index()
    {
        $dokter = new Dokter();
        $result = $dokter->readAll();
        $this->dokters = $result->fetchAll(PDO::FETCH_ASSOC);
        require_once(__DIR__ . '/../views/dokter/index.php');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dokter = new Dokter();
            $dokter->nama = $_POST['nama'];
            $dokter->spesialisasi = $_POST['spesialisasi'];
            $dokter->telepon = $_POST['telepon'];
            if ($dokter->create()) {
                header("Location: ./router.php?controller=dokter&action=index");
            }
        }
        header('Location:views/dokter/index.php');
    }       

    public function update($id)
    {
        $dokter = new Dokter();
        $dokterData = $dokter->readOne($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dokter = new Dokter();
            $dokter->nama = $_POST['nama'];
            $dokter->spesialisasi = $_POST['spesialisasi'];
            $dokter->telepon = $_POST['telepon'];
            if ($dokter->update($id)) {
                header("Location: ./router.php?controller=dokter&action=index");
            } else {
                header("Location: /router.php?controller=dokter&action=edit&id=$id");
            }
        }
    }

    public function edit($id) {
        $dokter = new Dokter();
        $this->dokterData = $dokter->readOne($id);
        require_once(__DIR__ . '/../views/dokter/edit.php');
    }


    public function delete($id)
    {
        $dokter = new Dokter();
        if ($dokter->delete($id)) {
            header("Location: router.php?controller=dokter&action=index");
        }
    }
}
