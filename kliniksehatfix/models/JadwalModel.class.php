<?php
class JadwalModel extends Model
{
    private $table_name = "jadwal";

    public function __construct()
    {
        parent::__construct();
    }

    public function readAll()
    {
        $query = "SELECT jadwal.id, dokter.nama AS dokter_nama, jadwal.tanggal, jadwal.jam_mulai, jadwal.jam_selesai FROM " . $this->table_name . " JOIN dokter ON jadwal.dokter_id = dokter.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readOne($id)
    {
        $query = "SELECT id, dokter_id, tanggal, jam_mulai, jam_selesai FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($dokter_id, $tanggal, $jam_mulai, $jam_selesai)
    {
        $query = "INSERT INTO " . $this->table_name . " SET dokter_id=:dokter_id, tanggal=:tanggal, jam_mulai=:jam_mulai, jam_selesai=:jam_selesai";
        $stmt = $this->conn->prepare($query);

        $dokter_id = htmlspecialchars(strip_tags($dokter_id));
        $tanggal = htmlspecialchars(strip_tags($tanggal));
        $jam_mulai = htmlspecialchars(strip_tags($jam_mulai));
        $jam_selesai = htmlspecialchars(strip_tags($jam_selesai));

        $stmt->bindParam(":dokter_id", $dokter_id);
        $stmt->bindParam(":tanggal", $tanggal);
        $stmt->bindParam(":jam_mulai", $jam_mulai);
        $stmt->bindParam(":jam_selesai", $jam_selesai);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update($id, $data)
    {
        $query = "UPDATE " . $this->table_name . " SET dokter_id=:dokter_id, tanggal=:tanggal, jam_mulai=:jam_mulai, jam_selesai=:jam_selesai WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $data['dokter_id'] = htmlspecialchars(strip_tags($data['dokter_id']));
        $data['tanggal'] = htmlspecialchars(strip_tags($data['tanggal']));
        $data['jam_mulai'] = htmlspecialchars(strip_tags($data['jam_mulai']));
        $data['jam_selesai'] = htmlspecialchars(strip_tags($data['jam_selesai']));
        $id = htmlspecialchars(strip_tags($id));

        $stmt->bindParam(":dokter_id", $data['dokter_id']);
        $stmt->bindParam(":tanggal", $data['tanggal']);
        $stmt->bindParam(":jam_mulai", $data['jam_mulai']);
        $stmt->bindParam(":jam_selesai", $data['jam_selesai']);
        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);

        $id = htmlspecialchars(strip_tags($id));
        $stmt->bindParam(1, $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
