<?php
require_once 'config/Database.php';

class Pasien
{
    private $conn;
    private $table_name = "patients";

    public $id;
    public $name;
    public $dob;
    public $gender;
    public $address;

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
        $query = "INSERT INTO " . $this->table_name . " SET name=:name, dob=:dob, gender=:gender, address=:address";
        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->dob = htmlspecialchars(strip_tags($this->dob));
        $this->gender = htmlspecialchars(strip_tags($this->gender));
        $this->address = htmlspecialchars(strip_tags($this->address));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":dob", $this->dob);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":address", $this->address);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update($id)
    {
        $query = "UPDATE " . $this->table_name . " SET name=:name, dob=:dob, gender=:gender, address=:address WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->dob = htmlspecialchars(strip_tags($this->dob));
        $this->gender = htmlspecialchars(strip_tags($this->gender));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $this->id = htmlspecialchars(strip_tags($id));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":dob", $this->dob);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":address", $this->address);
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
?>
