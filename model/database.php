<?php
class Database
{
    private $mysqli;

    public function connect()
    {
        $this->mysqli = new mysqli('localhost', 'root', 'rahasia', 'sistem_klinik_sederhana');
        
        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
        
        return $this->mysqli;
    }
}