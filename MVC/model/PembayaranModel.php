<?php
class PembayaranModel extends Model
{
    public function getAll()
    {
        $sql = "SELECT * FROM pembayaran";
        $result = $this->conn->query($sql);
        
        $pembayaran = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pembayaran[] = $row;
            }
        }
        
        return $pembayaran;
    }

    public function insert($rekam_medis_id, $jumlah_bayar, $metode_pembayaran)
    {
        $sql = "INSERT INTO pembayaran (rekam_medis_id, jumlah_bayar, metode_pembayaran) 
                VALUES ('$rekam_medis_id', '$jumlah_bayar', '$metode_pembayaran')";
        $this->conn->query($sql);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM pembayaran WHERE id='$id'";
        return $this->conn->query($sql);
    }

    public function update($id, $rekam_medis_id, $jumlah_bayar, $metode_pembayaran)
    {
        $sql = "UPDATE pembayaran SET rekam_medis_id='$rekam_medis_id', 
                                      jumlah_bayar='$jumlah_bayar', 
                                      metode_pembayaran='$metode_pembayaran' 
                WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM pembayaran WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function getAllRekamMedis()
    {
        $sql = "SELECT id FROM rekam_medis";
        $result = $this->conn->query($sql);

        $rekam_medis = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rekam_medis[] = $row;
            }
        }

        return $rekam_medis;
    }
}
?>
