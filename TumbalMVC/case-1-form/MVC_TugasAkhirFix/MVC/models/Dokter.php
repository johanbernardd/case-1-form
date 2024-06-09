<?php
require_once(__DIR__ . '/../config/database.php');

class Dokter
{
    private $conn;
    private $table_name = "dokter";

    public $id;
    public $nama;
    public $spesialisasi;
    public $telepon;


    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function readAll()
    {
        $query = "SELECT id, nama, spesialisasi, telepon FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readOne($id)
    {
        $query = "SELECT id, nama, spesialisasi, telepon  FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " SET nama=:nama, spesialisasi=:spesialisasi, telepon=:telepon";
        $stmt = $this->conn->prepare($query);

        $this->nama = htmlspecialchars(strip_tags($this->nama));
        $this->spesialisasi = htmlspecialchars(strip_tags($this->spesialisasi));
        $this->telepon = htmlspecialchars(strip_tags($this->telepon));


        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":spesialisasi", $this->spesialisasi);
        $stmt->bindParam(":telepon", $this->telepon);


        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update($id)
    {
        $query = "UPDATE " . $this->table_name . " SET nama=:nama, spesialisasi=:spesialisasi, telepon=:telepon WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $this->nama = htmlspecialchars(strip_tags($this->nama));
        $this->spesialisasi = htmlspecialchars(strip_tags($this->spesialisasi));
        $this->telepon = htmlspecialchars(strip_tags($this->telepon));
        $this->id = htmlspecialchars(strip_tags($id));

        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":spesialisasi", $this->spesialisasi);
        $stmt->bindParam(":telepon", $this->telepon);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
