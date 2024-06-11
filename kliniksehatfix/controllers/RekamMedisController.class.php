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
        $rekamMedis = $this->rekamMedisModel->getAllWithNames();
        $this->loadView('RekamMedis/posts', ['rekamMedis' => $rekamMedis]);
    }

    public function create_form()
    {
        $pasien = $this->rekamMedisModel->getAllPasien();
        $dokter = $this->rekamMedisModel->getAllDokter();
        $this->loadView('RekamMedis/insert_post', ['pasien' => $pasien, 'dokter' => $dokter]);
    }

    public function create_process()
    {
        $pasien_id = $_POST['pasien_id'];
        $dokter_id = $_POST['dokter_id'];
        $tanggal = $_POST['tanggal'];
        $diagnosa = addslashes($_POST['diagnosa']);
        $tindakan = addslashes($_POST['tindakan']);

        $this->rekamMedisModel->insert($pasien_id, $dokter_id, $tanggal, $diagnosa, $tindakan);
        header('Location: ?c=RekamMedisController&m=index');
        exit;
    }

    public function edit()
    {
        $id = $_GET['id'];

        if (!$id) header('Location: index.php?c=RekamMedisController&m=index');

        $rekamMedis = $this->rekamMedisModel->getById($id);
        $pasien = $this->rekamMedisModel->getAllPasien();
        $dokter = $this->rekamMedisModel->getAllDokter();

        if (!$rekamMedis) header('Location: index.php?c=RekamMedisController&m=index');

        $this->loadView('RekamMedis/edit', [
            'rekamMedis' => $rekamMedis,
            'pasien' => $pasien,
            'dokter' => $dokter
        ]);
    }

    public function update()
    {
        $id = $_POST['id'];
        $pasien_id = $_POST['pasien_id'];
        $dokter_id = $_POST['dokter_id'];
        $tanggal = $_POST['tanggal'];
        $diagnosa = addslashes($_POST['diagnosa']);
        $tindakan = addslashes($_POST['tindakan']);

        $this->rekamMedisModel->update($id, $pasien_id, $dokter_id, $tanggal, $diagnosa, $tindakan);
        header('Location: ?c=RekamMedisController&m=index');
    }

    public function delete()
    {
        $id = $_POST['id'];

        $this->rekamMedisModel->delete($id);
        header('Location: ?c=RekamMedisController&m=index');
    }
}
