<?php
session_start();
require_once '../models/Model.class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama'], $_POST['email'], $_POST['role'], $_POST['password'], $_POST['confirm_password']) && $_POST['password'] == $_POST['confirm_password']) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    // Hashing password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $db = new Model();
    $pdo = $db->getConnection();

    if ($pdo === null) {
        $_SESSION['error_message'] = "Database connection error.";
        header("Location: ../views/register.php");
        exit();
    }

    // Prepared statement to prevent SQL injection
    $sql = "INSERT INTO users (name, email, email_verified_at, password, role_name, remember_token, created_at, updated_at) 
            VALUES (:name, :email, NULL, :password, :role, NULL, NOW(), NOW())";
    $stmt = $pdo->prepare($sql);

    if ($stmt === false) {
        die("Error: " . $pdo->errorInfo());
    }

    $stmt->bindParam(':name', $nama, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
    $stmt->bindParam(':role', $role, PDO::PARAM_STR);

    if ($stmt->execute()) {
        header("Location: ../views/login.php");
        exit();
    } else {
        echo "Error: " . $stmt->errorInfo();
    }
} else {
    // Handle errors if passwords do not match
    $_SESSION['error_message'] = "Passwords do not match.";
    header("Location: ../views/register.php");
    exit();
}
