<?php
class Dokter {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllDokters() {
        $stmt = $this->pdo->query("SELECT * FROM dokters");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addDokter($nama, $spesialisasi, $telepon) {
        $stmt = $this->pdo->prepare("INSERT INTO dokters (nama, spesialisasi, telepon) VALUES (?, ?, ?)");
        return $stmt->execute([$nama, $spesialisasi, $telepon]);
    }

    public function getDokterById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM dokters WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateDokter($id, $nama, $spesialisasi, $telepon) {
        $stmt = $this->pdo->prepare("UPDATE dokters SET nama = ?, spesialisasi = ?, telepon = ? WHERE id = ?");
        return $stmt->execute([$nama, $spesialisasi, $telepon, $id]);
    }

    public function deleteDokter($id) {
        $stmt = $this->pdo->prepare("DELETE FROM dokters WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
