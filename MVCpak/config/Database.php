<?php
// $host = 'localhost';
// $db = 'sistem_klinik_sederhana';
// $user = 'root';
// $pass = 'rahasia';

// try {
    // $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     die("Could not connect to the database $db :" . $e->getMessage());
// }
    $host = 'localhost';
    $db_name = 'sistem_klinik_sederhana';
    $username = 'root';
    $password = 'rahasia';
    $conn = null;
    
    function getConnection() {
        global $host, $db_name, $username, $password;
        try {
            $conn = new PDO("mysql:host=". $host. ";dbname=". $db_name, $username, $password);
            $conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: ". $exception->getMessage();
        }
    
        return $conn;
    }

    
?>
