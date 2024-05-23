<?php
require_once 'models/Resep.php';
require_once 'models/Obat.php';

class ResepController
{
    public function index()
    {
        $resep = new Resep();
        $result = $resep->readAll();
        $reseps = $result->fetchAll(PDO::FETCH_ASSOC);
        require_once 'views/resep/index.php';
    }

    public function create()
    {
        $obat = new Obat();
        $obats = $obat->readAll()->fetchAll(PDO::FETCH_ASSOC);
        if ($_POST) {
            $resep = new Resep();
            $resep->obat_id = $_POST['obat_id'];
            $resep->nama_obat = $_POST['nama_obat'];
            $resep->tanggal = $_POST['tanggal'];
            $resep->jumlah = $_POST['jumlah'];
            if ($resep->create()) {
                header("Location: index.php?controller=resep&action=index");
            }
        }
        require_once 'views/resep/create.php';
    }

    public function edit($id)
    {
        $resep = new Resep();
        $obat = new Obat();
        $obats = $obat->readAll()->fetchAll(PDO::FETCH_ASSOC);
        $resepData = $resep->readOne($id);
        if ($_POST) {
            $resep->obat_id = $_POST['obat_id'];
            $resep->nama_obat = $_POST['nama_obat'];
            $resep->tanggal = $_POST['tanggal'];
            $resep->jumlah = $_POST['jumlah'];
            if ($resep->update($id)) {
                header("Location: index.php?controller=resep&action=index");
            }
        }
        require_once 'views/resep/edit.php';
    }

    public function delete($id)
    {
        $resep = new Resep();
        if ($resep->delete($id)) {
            header("Location: index.php?controller=resep&action=index");
        }
    }
}
