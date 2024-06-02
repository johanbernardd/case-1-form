<?php

class ResepModel extends Model
{
    private $table_name = "resep";
    private $obat_id;
    private $nama_obat;
    private $tanggal;
    private $jumlah;

    public function __construct()
    {
        parent::__construct();
    }

    public function setObatId($obat_id)
    {
        $this->obat_id = $obat_id;
    }

    public function setNamaObat($nama_obat)
    {
        $this->nama_obat = $nama_obat;
    }

    public function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;
    }

    public function setJumlah($jumlah)
    {
        $this->jumlah = $jumlah;
    }
    // public $id;
    // public $obat_id;
    // public $nama_obat;
    // public $tanggal;
    // public $jumlah;

    public function readAll()
    {
        $query = "SELECT r.id, r.nama_obat, r.tanggal, r.jumlah, o.nama as nama_obat FROM " . $this->table_name . " r JOIN obat o ON r.obat_id = o.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($obat_id, $nama_obat, $tanggal, $jumlah)
    {
        $query = "INSERT INTO " . $this->table_name . " SET obat_id=:obat_id, nama_obat=:nama_obat, tanggal=:tanggal, jumlah=:jumlah";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":obat_id", $obat_id);
        $stmt->bindParam(":nama_obat", $nama_obat);
        $stmt->bindParam(":tanggal", $tanggal);
        $stmt->bindParam(":jumlah", $jumlah);
        return $stmt->execute();
    }

    public function readOne($id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $obat_id, $nama_obat, $tanggal, $jumlah)
    {
        $query = "UPDATE " . $this->table_name . " SET obat_id = :obat_id, nama_obat = :nama_obat, tanggal = :tanggal, jumlah = :jumlah WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":obat_id", $obat_id);
        $stmt->bindParam(":nama_obat", $nama_obat);
        $stmt->bindParam(":tanggal", $tanggal);
        $stmt->bindParam(":jumlah", $jumlah);
        $stmt->bindParam(":id", $id);

        return $stmt->execute();
    }


    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);

        $id = htmlspecialchars(strip_tags($id));
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}
