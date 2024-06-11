<?php
class PembayaranController extends Controller
{
    private $pembayaranModel;

    public function __construct()
    {
        $this->pembayaranModel = $this->loadModel('PembayaranModel');
    }

    public function index()
    {
        $pembayaran = $this->pembayaranModel->getAll();
        $this->loadView('Pembayaran/posts', ['pembayaran' => $pembayaran]);
    }

    public function create_form()
    {
        $rekamMedis = $this->pembayaranModel->getAllRekamMedis();
        $this->loadView('Pembayaran/insert_post', ['rekamMedis' => $rekamMedis]);
    }

    public function create_process()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $rekam_medis_id = $_POST['rekam_medis_id'] ?? null;
            $jumlah_bayar = $_POST['jumlah_bayar'] ?? null;
            $metode_pembayaran = $_POST['metode_pembayaran'] ?? null;

            if ($rekam_medis_id && $jumlah_bayar && $metode_pembayaran) {
                $this->pembayaranModel->insert($rekam_medis_id, $jumlah_bayar, $metode_pembayaran);
                header('Location: index.php?c=PembayaranController&m=index');
                exit;
            } else {
                $error = "All fields are required.";
                $rekamMedis = $this->pembayaranModel->getAllRekamMedis();
                $this->loadView('Pembayaran/insert_post', ['rekamMedis' => $rekamMedis, 'error' => $error]);
            }
        }
    }

    public function edit()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            header('Location: index.php?c=PembayaranController&m=index');
            exit;
        }

        $pembayaran = $this->pembayaranModel->getById($id);
        $rekamMedis = $this->pembayaranModel->getAllRekamMedis();

        if (!$pembayaran) {
            header('Location: index.php?c=PembayaranController&m=index');
            exit;
        }

        $this->loadView('Pembayaran/edit', ['pembayaran' => $pembayaran, 'rekamMedis' => $rekamMedis]);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            $rekam_medis_id = $_POST['rekam_medis_id'] ?? null;
            $jumlah_bayar = $_POST['jumlah_bayar'] ?? null;
            $metode_pembayaran = $_POST['metode_pembayaran'] ?? null;

            if ($id && $rekam_medis_id && $jumlah_bayar && $metode_pembayaran) {
                $this->pembayaranModel->update($id, $rekam_medis_id, $jumlah_bayar, $metode_pembayaran);
                header('Location: index.php?c=PembayaranController&m=index');
                exit;
            } else {
                $error = "All fields are required.";
                $pembayaran = $this->pembayaranModel->getById($id);
                $rekamMedis = $this->pembayaranModel->getAllRekamMedis();
                $this->loadView('Pembayaran/edit', ['pembayaran' => $pembayaran, 'rekamMedis' => $rekamMedis, 'error' => $error]);
            }
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;

            if ($id) {
                $this->pembayaranModel->delete($id);
            }

            header('Location: index.php?c=PembayaranController&m=index');
            exit;
        }
    }
}
