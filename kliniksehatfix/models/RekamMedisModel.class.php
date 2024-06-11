<?php
class RekamMedisModel extends Model
{
    public function getAllWithNames()
    {
        $sql = "SELECT rm.*, p.nama as pasien_nama, d.nama as dokter_nama 
                FROM rekam_medis rm 
                JOIN pasien p ON rm.pasien_id = p.id 
                JOIN dokter d ON rm.dokter_id = d.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($pasien_id, $dokter_id, $tanggal, $diagnosa, $tindakan)
    {
        $sql = "INSERT INTO rekam_medis (pasien_id, dokter_id, tanggal, diagnosa, tindakan) 
                VALUES (:pasien_id, :dokter_id, :tanggal, :diagnosa, :tindakan)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':pasien_id', $pasien_id);
        $stmt->bindParam(':dokter_id', $dokter_id);
        $stmt->bindParam(':tanggal', $tanggal);
        $stmt->bindParam(':diagnosa', $diagnosa);
        $stmt->bindParam(':tindakan', $tindakan);
        $stmt->execute();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM rekam_medis WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $pasien_id, $dokter_id, $tanggal, $diagnosa, $tindakan)
    {
        $sql = "UPDATE rekam_medis SET pasien_id = :pasien_id, 
                                       dokter_id = :dokter_id, 
                                       tanggal = :tanggal, 
                                       diagnosa = :diagnosa, 
                                       tindakan = :tindakan 
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':pasien_id', $pasien_id);
        $stmt->bindParam(':dokter_id', $dokter_id);
        $stmt->bindParam(':tanggal', $tanggal);
        $stmt->bindParam(':diagnosa', $diagnosa);
        $stmt->bindParam(':tindakan', $tindakan);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM rekam_medis WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getAllPasien()
    {
        $sql = "SELECT id, nama FROM pasien";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllDokter()
    {
        $sql = "SELECT id, nama FROM dokter";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
