<?php
session_start();
require_once "../model/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama'], $_POST['email'], $_POST['role'], $_POST['password'], $_POST['confirm_password']) && $_POST['password'] == $_POST['confirm_password'])
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    // Hashing password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $db = new Database();
    $mysqli = $db->connect();

    // Prepared statement untuk mencegah SQL injection
    $sql = "INSERT INTO users (name, email, email_verified_at, password, role_name, remember_token, created_at, updated_at) VALUES (?, ?, NULL, ?, ?, NULL, NOW(), NOW())";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssss", $nama, $email, $hashed_password, $role);

    if ($stmt->execute()) {
        header("Location: ../view/login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
} else {
    // Menangani kesalahan jika password tidak cocok
    $_SESSION['error_message'] = "Password dan konfirmasi password tidak cocok";
    header("Location: register.php");
    exit();
}