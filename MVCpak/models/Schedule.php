<?php
class Schedule {
    private $conn;
    private $table_name = "jadwals";

    public $id;
    public $hari;
    public $tanggal;
    public $jam_mulai;
    public $jam_selesai;
    public $created_at;
    public $updated_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (hari, tanggal, jam_mulai, jam_selesai, created_at, updated_at)
                  VALUES (:hari, :tanggal, :jam_mulai, :jam_selesai, :created_at, :updated_at)";
        
        $stmt = $this->conn->prepare($query);

        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');

        $stmt->bindParam(':hari', $this->hari);
        $stmt->bindParam(':tanggal', $this->tanggal);
        $stmt->bindParam(':jam_mulai', $this->jam_mulai);
        $stmt->bindParam(':jam_selesai', $this->jam_selesai);
        $stmt->bindParam(':created_at', $this->created_at);
        $stmt->bindParam(':updated_at', $this->updated_at);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
