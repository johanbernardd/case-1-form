<?php
require_once 'config/Database.php';

class Obat
{
    private $conn;
    private $table_name = "obat";

    public $id;
    public $nama;
    public $harga;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function readAll()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readOne($id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " SET nama=:nama, harga=:harga";
        $stmt = $this->conn->prepare($query);

        $this->nama = htmlspecialchars(strip_tags($this->nama));
        $this->harga = htmlspecialchars(strip_tags($this->harga));

        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":harga", $this->harga);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update($id)
    {
        $query = "UPDATE " . $this->table_name . " SET nama=:nama, harga=:harga WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $this->nama = htmlspecialchars(strip_tags($this->nama));
        $this->harga = htmlspecialchars(strip_tags($this->harga));
        $this->id = htmlspecialchars(strip_tags($id));

        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":harga", $this->harga);
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
