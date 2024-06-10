<?php
class ObatController extends Controller
{
    private $obatModel;

    public function __construct()
    {
        $this->obatModel = $this->loadModel('ObatModel');
    }

    public function index()
    {
        $obats = $this->obatModel->readAll();
        $this->loadView('obat/index', ['obats' => $obats]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'] ?? '';
            $harga = $_POST['harga'] ?? '';

            if (!empty($nama) && !empty($harga)) {
                if ($this->obatModel->create($nama, $harga)) {
                    header("Location: index.php?c=ObatController&m=index");
                    exit();
                } else {
                    $error = "Error creating obat.";
                }
            } else {
                $error = "Please fill in all fields.";
            }
        }

        $this->loadView('obat/create', ['error' => $error ?? null]);
    }

    public function edit($id)
    {
        $obatData = $this->obatModel->readOne($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['nama'] = $_POST['nama'];
            $data['harga'] = $_POST['harga'];

            if (!empty($data['nama']) && !empty($data['harga'])) {
                if ($this->obatModel->update($id, $data)) {
                    header("Location: index.php?c=ObatController&m=index");
                    exit();
                } else {
                    $error = "Error updating obat.";
                }
            } else {
                $error = "Please fill in all fields.";
            }
        }

        $this->loadView('obat/edit', ['obatData' => $obatData, 'error' => $error ?? null]);
    }

    public function delete($id)
    {
        if ($this->obatModel->delete($id)) {
            header("Location: index.php?c=ObatController&m=index");
            exit();
        } else {
            $error = "Error deleting obat.";
            $obats = $this->obatModel->readAll();
            $this->loadView('obat/index', ['obats' => $obats, 'error' => $error]);
        }
    }
}
