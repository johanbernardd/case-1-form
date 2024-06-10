<?php
class ObatModel extends Model
{
    private $table_name = "obat";

    public function __construct()
    {
        parent::__construct();
    }

    public function readAll()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readOne($id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama, $harga)
    {
        $query = "INSERT INTO " . $this->table_name . " SET nama=:nama, harga=:harga";
        $stmt = $this->conn->prepare($query);

        $nama = htmlspecialchars(strip_tags($nama));
        $harga = htmlspecialchars(strip_tags($harga));

        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":harga", $harga);

        return $stmt->execute();
    }

    public function update($id, $data)
    {
        $query = "UPDATE " . $this->table_name . " SET nama=:nama, harga=:harga WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $data['nama'] = htmlspecialchars(strip_tags($data['nama']));
        $data['harga'] = htmlspecialchars(strip_tags($data['harga']));
        $id = htmlspecialchars(strip_tags($id));

        $stmt->bindParam(":nama", $data['nama']);
        $stmt->bindParam(":harga", $data['harga']);
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
