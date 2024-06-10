<?php
class Model
{
    private $host = "localhost";
    private $port = 3306;
    private $db_name = "db_klinik";
    private $username = "root";
    private $password = "rahasia";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

    public function __construct()
    {
        $this->getConnection();
    }
}
