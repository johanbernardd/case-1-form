<?php
require_once 'models/Obat.php';

class ObatController
{
    public function index()
    {
        $obat = new Obat();
        $result = $obat->readAll();
        $obats = $result->fetchAll(PDO::FETCH_ASSOC);
        require_once 'views/obat/index.php';
    }

    public function create()
    {
        if ($_POST) {
            $obat = new Obat();
            $obat->nama = $_POST['nama'];
            $obat->harga = $_POST['harga'];
            if ($obat->create()) {
                header("Location: index.php?controller=obat&action=index");
            }
        }
        require_once 'views/obat/create.php';
    }

    public function edit($id)
    {
        $obat = new Obat();
        $obatData = $obat->readOne($id);
        if ($_POST) {
            $obat->nama = $_POST['nama'];
            $obat->harga = $_POST['harga'];
            if ($obat->update($id)) {
                header("Location: index.php?controller=obat&action=index");
            }
        }
        require_once 'views/obat/edit.php';
    }

    public function delete($id)
    {
        $obat = new Obat();
        if ($obat->delete($id)) {
            header("Location: index.php?controller=obat&action=index");
        }
    }
}
