<?php
class PembayaranController extends Controller

{
    public function index()
    {
        $pembayaranModel = $this->loadModel('PembayaranModel');
        $pembayaran = $pembayaranModel->getAll();
        $this->loadView('Pembayaran','posts', ['pembayaran' => $pembayaran]);
    }

    public function create_form()
    {
        $pembayaranModel = $this->loadModel('PembayaranModel');
        $rekamMedis = $pembayaranModel->getAllRekamMedis();
        $this->loadView('Pembayaran','insert_post', ['rekamMedis' => $rekamMedis]);
    }
    
    public function create_process()
    {
        $pembayaranModel = $this->loadModel('PembayaranModel');
        $rekam_medis_id = $_POST['rekam_medis_id'];
        $jumlah_bayar = $_POST['jumlah_bayar'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
    
        $pembayaranModel->insert($rekam_medis_id, $jumlah_bayar, $metode_pembayaran);
        header('Location: ?c=PembayaranController');
        exit;
    }
    

    public function edit()
    {
        $id = $_GET['id'];

        if (!$id) header('Location: index.php?c=PembayaranController');

        $pembayaranModel = $this->loadModel('PembayaranModel');
        $pembayaran = $pembayaranModel->getById($id);

        if (!$pembayaran->num_rows) header('Location: index.php?c=PembayaranController');

        $this->loadView('Pembayaran','edit', ['pembayaran' => $pembayaran->fetch_object()]);
    }

    public function update()
    {
        $pembayaranModel = $this->loadModel('PembayaranModel');

        $id = $_POST['id'];
        $rekam_medis_id = $_POST['rekam_medis_id'];
        $jumlah_bayar = $_POST['jumlah_bayar'];
        $metode_pembayaran = $_POST['metode_pembayaran'];

        $pembayaranModel->update($id, $rekam_medis_id, $jumlah_bayar, $metode_pembayaran);
        header('Location: ?c=PembayaranController');
    }

    public function delete()
    {
        $id = $_POST['id'];

        $pembayaranModel = $this->loadModel('PembayaranModel');
        $pembayaranModel->delete($id);

        header('location:?c=PembayaranController');
    }
}
?>
