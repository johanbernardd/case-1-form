<?php

class DokterModel extends Model
{
    private $table_name = "dokter";

    public function __construct()
    {
        parent::__construct();
    }

    public function readAll()
    {
        $query = "SELECT id, nama, spesialisasi, telepon, gambar FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readOne($id)
    {
        $query = "SELECT id, nama, spesialisasi, telepon, gambar  FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama, $spesialisasi, $telepon, $gambar)
    {
        $query = "INSERT INTO " . $this->table_name . " SET nama=:nama, spesialisasi=:spesialisasi, telepon=:telepon, gambar=:gambar";
        $stmt = $this->conn->prepare($query);

        $nama = htmlspecialchars(strip_tags($nama));
        $spesialisasi = htmlspecialchars(strip_tags($spesialisasi));
        $telepon = htmlspecialchars(strip_tags($telepon));


        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":spesialisasi", $spesialisasi);
        $stmt->bindParam(":telepon", $telepon);
        $stmt->bindParam(":gambar", $gambar, PDO::PARAM_LOB);


        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update($id, $data)
    {
        $query = "UPDATE " . $this->table_name . " SET nama=:nama, spesialisasi=:spesialisasi, telepon=:telepon, gambar=:gambar WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $data['nama'] = htmlspecialchars(strip_tags($data['nama']));
        $data['spesialisasi'] = htmlspecialchars(strip_tags($data['spesialisasi']));
        $data['telepon'] = htmlspecialchars(strip_tags($data['telepon']));
        $id = htmlspecialchars(strip_tags($id));

        $stmt->bindParam(":nama", $data['nama']);
        $stmt->bindParam(":spesialisasi", $data['spesialisasi']);
        $stmt->bindParam(":telepon", $data['telepon']);
        $stmt->bindParam(":gambar", $data['gambar'], PDO::PARAM_LOB);
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
