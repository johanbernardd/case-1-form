<?php
class PembayaranModel extends Model
{
    private $table_name = "pembayaran";

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($rekam_medis_id, $jumlah_bayar, $metode_pembayaran)
    {
        $sql = "INSERT INTO pembayaran (rekam_medis_id, jumlah_bayar, metode_pembayaran) 
                VALUES (:rekam_medis_id, :jumlah_bayar, :metode_pembayaran)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':rekam_medis_id', $rekam_medis_id);
        $stmt->bindParam(':jumlah_bayar', $jumlah_bayar);
        $stmt->bindParam(':metode_pembayaran', $metode_pembayaran);
        $stmt->execute();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM pembayaran WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $rekam_medis_id, $jumlah_bayar, $metode_pembayaran)
    {
        $sql = "UPDATE pembayaran SET rekam_medis_id = :rekam_medis_id, 
                                      jumlah_bayar = :jumlah_bayar, 
                                      metode_pembayaran = :metode_pembayaran 
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':rekam_medis_id', $rekam_medis_id);
        $stmt->bindParam(':jumlah_bayar', $jumlah_bayar);
        $stmt->bindParam(':metode_pembayaran', $metode_pembayaran);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM pembayaran WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getAllRekamMedis()
    {
        $sql = "SELECT id FROM rekam_medis";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
