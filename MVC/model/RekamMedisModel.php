<?php
class RekamMedisModel extends Model
{
    public function getAll()
    {
        $sql = "SELECT * FROM rekam_medis";
        $result = $this->conn->query($sql);
        
        $rekamMedis = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rekamMedis[] = $row;
            }
        }
        
        return $rekamMedis;
    }

    public function insert($pasien_id, $dokter_id, $tanggal, $diagnosa, $tindakan)
    {
        $sql = "INSERT INTO rekam_medis (pasien_id, dokter_id, tanggal, diagnosa, tindakan) VALUES ('$pasien_id', '$dokter_id', '$tanggal', '$diagnosa', '$tindakan')";
        $this->conn->query($sql);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM rekam_medis WHERE id='$id'";
        return $this->conn->query($sql);
    }

    public function update($id, $pasien_id, $dokter_id, $tanggal, $diagnosa, $tindakan)
    {
        $sql = "UPDATE rekam_medis SET pasien_id='$pasien_id', dokter_id='$dokter_id', tanggal='$tanggal', diagnosa='$diagnosa', tindakan='$tindakan' WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function delete($id)
    {
        $this->conn->begin_transaction();

        try {
            $sql = "DELETE FROM rekam_medis WHERE id='$id'";
            $this->conn->query($sql);

            $sql = "CREATE TEMPORARY TABLE tmp_rekam_medis AS SELECT * FROM rekam_medis";
            $this->conn->query($sql);

            $sql = "TRUNCATE TABLE rekam_medis";
            $this->conn->query($sql);

            $sql = "INSERT INTO rekam_medis SELECT * FROM tmp_rekam_medis";
            $this->conn->query($sql);

            $sql = "DROP TEMPORARY TABLE tmp_rekam_medis";
            $this->conn->query($sql);

            $this->conn->commit();
        } catch (Exception $e) {
            $this->conn->rollback();
            throw $e;
        }
    }

    public function getAllPasien()
    {
        $sql = "SELECT id, nama FROM pasien";
        $result = $this->conn->query($sql);

        $pasien = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pasien[] = $row;
            }
        }

        return $pasien;
    }

    public function getAllDokter()
    {
        $sql = "SELECT id, nama FROM dokter";
        $result = $this->conn->query($sql);

        $dokter = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dokter[] = $row;
            }
        }

        return $dokter;
    }
}
?>
