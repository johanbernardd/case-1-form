<?php
require_once(__DIR__ . '/../models/Jadwal.php');

require_once(__DIR__ . '/../models/Dokter.php');

class JadwalController
{
    public $jadwals;
    public $jadwalData;
    public function index()
    {
        $jadwal = new Jadwal();
        $result = $jadwal->readAll();
        $this->jadwals = $result->fetchAll(PDO::FETCH_ASSOC);
        require_once(__DIR__ .'/../views/jadwal/index.php');
    }

    public function create()
    {
        // $dokter = new Dokter();
        // $dokters = $dokter->readAll()->fetchAll(PDO::FETCH_ASSOC);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $jadwal = new Jadwal();
            // $jadwal->dokter_id = $_POST['dokter_id'];
            $jadwal->nama_dokter = $_POST['nama_dokter'];
            $jadwal->tanggal = $_POST['tanggal'];
            $jadwal->jam_mulai = $_POST['jam_mulai'];
            $jadwal->jam_selesai = $_POST['jam_selesai'];

            if ($jadwal->create()) {
                header("Location: router.php?controller=jadwal&action=index");
            }
        }
        require_once(__DIR__ .'/../views/jadwal/index.php');
    }

    public function edit($id)
    {
        $jadwal = new Jadwal();
        $dokter = new Dokter();
        $dokters = $dokter->readAll()->fetchAll(PDO::FETCH_ASSOC);
        $jadwalData = $jadwal->readOne($id);
        if ($_POST) {
            $jadwal->dokter_id = $_POST['dokter_id'];
            $jadwal->nama_dokter = $_POST['nama_dokter'];
            $jadwal->tanggal = $_POST['tanggal'];
            $jadwal->jam_mulai = $_POST['jam_mulai'];
            $jadwal->jam_selesai = $_POST['jam_selesai'];

            if ($jadwal->update($id)) {
                header("Location: router.php?controller=jadwal&action=index");
            }
        }
        require_once(__DIR__ .'/../views/jadwal/edit.php');
    }

    public function delete($id)
    {
        $jadwal = new Jadwal();
        if ($jadwal->delete($id)) {
            header("Location: router.php?controller=jadwal&action=index");
        }
    }
}
