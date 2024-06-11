<?php
class JadwalController extends Controller
{
    private $jadwalModel;
    private $dokterModel;

    public function __construct()
    {
        $this->jadwalModel = $this->loadModel('JadwalModel');
        $this->dokterModel = $this->loadModel('DokterModel');
    }

    public function index()
    {
        $jadwals = $this->jadwalModel->readAll();
        $this->loadView('jadwal/index', ['jadwals' => $jadwals]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dokter_id = $_POST['dokter_id'] ?? '';
            $tanggal = $_POST['tanggal'] ?? '';
            $jam_mulai = $_POST['jam_mulai'] ?? '';
            $jam_selesai = $_POST['jam_selesai'] ?? '';

            if (!empty($dokter_id) && !empty($tanggal) && !empty($jam_mulai) && !empty($jam_selesai)) {
                if ($this->jadwalModel->create($dokter_id, $tanggal, $jam_mulai, $jam_selesai)) {
                    header("Location: index.php?c=JadwalController&m=index");
                    exit();
                } else {
                    $error = "Error creating jadwal.";
                }
            } else {
                $error = "Please fill in all fields.";
            }
        }

        $dokters = $this->dokterModel->readAll();
        $this->loadView('jadwal/create', ['dokters' => $dokters, 'error' => $error ?? null]);
    }

    public function edit($id)
    {
        $jadwalData = $this->jadwalModel->readOne($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['dokter_id'] = $_POST['dokter_id'];
            $data['tanggal'] = $_POST['tanggal'];
            $data['jam_mulai'] = $_POST['jam_mulai'];
            $data['jam_selesai'] = $_POST['jam_selesai'];

            if (!empty($data['dokter_id']) && !empty($data['tanggal']) && !empty($data['jam_mulai']) && !empty($data['jam_selesai'])) {
                if ($this->jadwalModel->update($id, $data)) {
                    header("Location: index.php?c=JadwalController&m=index");
                    exit();
                } else {
                    $error = "Error updating jadwal.";
                }
            } else {
                $error = "Please fill in all fields.";
            }
        }

        $dokters = $this->dokterModel->readAll();
        $this->loadView('jadwal/edit', ['jadwalData' => $jadwalData, 'dokters' => $dokters, 'error' => $error ?? null]);
    }

    public function delete($id)
    {
        if ($this->jadwalModel->delete($id)) {
            header("Location: index.php?c=JadwalController&m=index");
            exit();
        } else {
            $error = "Error deleting jadwal.";
            $jadwals = $this->jadwalModel->readAll();
            $this->loadView('jadwal/index', ['jadwals' => $jadwals, 'error' => $error]);
        }
    }
}
