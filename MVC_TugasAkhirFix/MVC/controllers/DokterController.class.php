<?php

class DokterController extends Controller
{
    private $dokterModel;

    public function __construct()
    {
        $this->dokterModel = $this->loadModel('DokterModel');
    }

    public function index()
    {
        $dokters = $this->dokterModel->readAll();
        $this->loadView('dokter/index', ['dokters' => $dokters]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'] ?? '';
            $spesialisasi = $_POST['spesialisasi'] ?? '';
            $telepon = $_POST['telepon'] ?? '';
            $gambar = '';

            if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
                $gambar = file_get_contents($_FILES['gambar']['tmp_name']);
            }

            if (!empty($nama) && !empty($spesialisasi) && !empty($telepon) && !empty($gambar)) {
                if ($this->dokterModel->create($nama, $spesialisasi, $telepon, $gambar)) {
                    header("Location: index.php?c=DokterController&m=index");
                    exit();
                } else {
                    $error = "Error creating dokter.";
                }
            } else {
                $error = "Please fill in all fields.";
            }
        }

        $this->loadView('dokter/create', ['error' => $error ?? null]);
    }

    public function edit($id)
    {
        $dokterData = $this->dokterModel->readOne($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['nama'] = $_POST['nama'];
            $data['spesialisasi'] = $_POST['spesialisasi'];
            $data['telepon'] = $_POST['telepon'];
            $data['gambar'] = $dokterData['gambar'];

            if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
                $data['gambar'] = file_get_contents($_FILES['gambar']['tmp_name']);
            }

            if (!empty($data['nama']) && !empty($data['spesialisasi']) && !empty($data['telepon']) && !empty($data['gambar'])) {
                if ($this->dokterModel->update($id, $data)) {
                    header("Location: index.php?c=DokterController&m=index");
                    exit();
                } else {
                    $error = "Error updating dokter.";
                }
            } else {
                $error = "Please fill in all fields.";
            }
        }

        $this->loadView('dokter/edit', ['dokterData' => $dokterData, 'error' => $error ?? null]);
    }

    public function delete($id)
    {
        if ($this->dokterModel->delete($id)) {
            header("Location: index.php?c=DokterController&m=index");
            exit();
        } else {
            $error = "Error deleting dokter.";
            $dokters = $this->dokterModel->readAll();
            $this->loadView('dokter/index', ['dokters' => $dokters, 'error' => $error]);
        }
    }
}
