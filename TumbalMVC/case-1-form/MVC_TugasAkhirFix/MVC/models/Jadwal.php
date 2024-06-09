<?php
require_once(__DIR__ . '/../config/database.php');

class Jadwal
{
    private $conn;
    private $table_name = "jadwal";

    public $id;
    public $dokter_id;
    public $nama_dokter;
    public $tanggal;
    public $jam_mulai;

    public $jam_selesai;


    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function readAll()
    {
        // $query = "SELECT j.id, j.tanggal, j.jam_mulai, j.jam_selesai, d.nama as nama FROM " . $this->table_name . " j JOIN dokter d ON j.dokter_id = d.id";
        $query = "SELECT id, nama_dokter, tanggal, jam_mulai, jam_selesai FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    //perlu readone dokter kaya "select id from dokter where nama = "(nama dari inputan form nya)";"
    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " SET nama_dokter=:nama_dokter, tanggal=:tanggal, jam_mulai=:jam_mulai, jam_selesai=:jam_selesai"; //id_dokter=:id_dokter
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nama_dokter", $this->nama_dokter);
        $stmt->bindParam(":tanggal", $this->tanggal);
        $stmt->bindParam(":jam_mulai", $this->jam_mulai);
        $stmt->bindParam(":jam_selesai", $this->jam_selesai);
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
        $query = "UPDATE " . $this->table_name . " SET dokter_id=:dokter_id, nama_dokter=:nama_dokter, tanggal=:tanggal, jam_mulai=:jam_mulai, jam_selesai=:jam_selesai WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":dokter_id", $this->dokter_id);
        $stmt->bindParam(":nama_dokter", $this->nama_dokter);
        $stmt->bindParam(":tanggal", $this->tanggal);
        $stmt->bindParam(":jam_mulai", $this->jam_mulai);
        $stmt->bindParam(":jam_selesai", $this->jam_selesai);
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
