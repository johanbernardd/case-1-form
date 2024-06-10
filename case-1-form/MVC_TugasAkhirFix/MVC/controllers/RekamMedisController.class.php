<?php
class RekamMedisController extends Controller

{
    private $rekamMedisModel;

    public function __construct()
    {
        $this->rekamMedisModel = $this->loadModel('RekamMedisModel');
    }

    public function index()
    {
        $rekamMedisModel = $this->loadModel('RekamMedisModel');
        $rekamMedis = $rekamMedisModel->getAll();
        $this->loadView('RekamMedis/posts', ['rekamMedis' => $rekamMedis]);
    }

    public function create_form()
    {
        $rekamMedisModel = $this->loadModel('RekamMedisModel');
        $pasien = $rekamMedisModel->getAllPasien();
        $dokter = $rekamMedisModel->getAllDokter();
        $this->loadView('RekamMedis/insert_post', ['pasien' => $pasien, 'dokter' => $dokter]);
    }

    public function create_process()
    {
        $rekamMedisModel = $this->loadModel('RekamMedisModel');
        $pasien_id = $_POST['pasien_id'];
        $dokter_id = $_POST['dokter_id'];
        $tanggal = $_POST['tanggal'];
        $diagnosa = addslashes($_POST['diagnosa']);
        $tindakan = addslashes($_POST['tindakan']);

        $rekamMedisModel->insert($pasien_id, $dokter_id, $tanggal, $diagnosa, $tindakan);
        header('Location: ?c=RekamMedisController&m=index');
        exit;
    }

    public function edit()
    {
        $id = $_GET['id'];

        if (!$id) header('Location: index.php?c=RekamMedisController&m=index');

        $rekamMedisModel = $this->loadModel('RekamMedisModel');
        $rekamMedis = $rekamMedisModel->getById($id);
        $pasien = $rekamMedisModel->getAllPasien();
        $dokter = $rekamMedisModel->getAllDokter();

        if (!$rekamMedis->num_rows) header('Location: index.php?c=RekamMedisController&m=index');

        $this->loadView('RekamMedis/edit', ['rekamMedis' => $rekamMedis->fetch_assoc(), 'pasien' => $pasien, 'dokter' => $dokter]);
    }

    public function update()
    {
        $rekamMedisModel = $this->loadModel('RekamMedisModel');

        $id = $_POST['id'];
        $pasien_id = $_POST['pasien_id'];
        $dokter_id = $_POST['dokter_id'];
        $tanggal = $_POST['tanggal'];
        $diagnosa = addslashes($_POST['diagnosa']);
        $tindakan = addslashes($_POST['tindakan']);

        $rekamMedisModel->update($id, $pasien_id, $dokter_id, $tanggal, $diagnosa, $tindakan);
        header('Location: ?c=RekamMedisController&m=index');
    }

    public function delete()
    {
        $id = $_POST['id'];

        $rekamMedisModel = $this->loadModel('RekamMedisModel');
        $rekamMedisModel->delete($id);

        header('Location: ?c=RekamMedisController&m=index');
    }
}
