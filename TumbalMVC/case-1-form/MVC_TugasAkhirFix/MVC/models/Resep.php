<?php
require_once 'config/database.php';

class Resep
{
    private $conn;
    private $table_name = "resep";

    public $id;
    public $obat_id;
    public $nama_obat;
    public $tanggal;
    public $jumlah;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function readAll()
    {
        $query = "SELECT r.id, r.nama_obat, r.tanggal, r.jumlah, o.nama as nama_obat FROM " . $this->table_name . " r JOIN obat o ON r.obat_id = o.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " SET obat_id=:obat_id, nama_obat=:nama_obat, tanggal=:tanggal, jumlah=:jumlah";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":obat_id", $this->obat_id);
        $stmt->bindParam(":nama_obat", $this->nama_obat);
        $stmt->bindParam(":tanggal", $this->tanggal);
        $stmt->bindParam(":jumlah", $this->jumlah);
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

    public function update($id)
    {
        $query = "UPDATE " . $this->table_name . " SET obat_id = :obat_id, nama_obat = :nama_obat, tanggal = :tanggal, jumlah = :jumlah WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":obat_id", $this->obat_id);
        $stmt->bindParam(":nama_obat", $this->nama_obat);
        $stmt->bindParam(":tanggal", $this->tanggal);
        $stmt->bindParam(":jumlah", $this->jumlah);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}
