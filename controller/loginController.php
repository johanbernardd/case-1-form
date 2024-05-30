<?php
session_start();
require_once '../model/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = new Database();
    $mysqli = $db->connect();

    // Prepared statement untuk mencegah SQL injection
    $sql = "SELECT id, name, email, password FROM users WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    if ($stmt === false) {
        die("Error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $name, $email, $hashed_password);
            $stmt->fetch();

            // Verifikasi password
            if (password_verify($password, $hashed_password)) {
                // Password cocok, set sesi pengguna
                $_SESSION['username'] = $name;
                $_SESSION['email'] = $email;

                header("Location: ../index.php");
                exit();
            } else {
                // Password salah
                $_SESSION['error_message'] = "Password salah.";
                header("Location: ../view/login.php");
                exit();
            }
        } else {
            // Email tidak ditemukan
            $_SESSION['error_message'] = "Email tidak ditemukan.";
            header("Location: ../view/login.php");
            exit();
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
} else {
    // Data login tidak lengkap
    $_SESSION['error_message'] = "Harap masukkan email dan password.";
    header("Location: ../view/login.php");
    exit();
}