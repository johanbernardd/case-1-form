<?php
session_start();
require_once '../models/Model.class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = new Model();
    $pdo = $db->getConnection();

    if ($pdo === null) {
        $_SESSION['error_message'] = "Database connection error.";
        header("Location: ../views/login.php");
        exit();
    }

    // Prepared statement to prevent SQL injection
    $sql = "SELECT id, name, email, password FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);

    if ($stmt === false) {
        die("Error: " . $pdo->errorInfo());
    }

    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Password matches, set user session
                $_SESSION['username'] = $user['name'];
                $_SESSION['email'] = $user['email'];

                header("Location: ../router.php");
                exit();
            } else {
                // Wrong password
                $_SESSION['error_message'] = "Password incorrect.";
                header("Location: ../views/login.php");
                exit();
            }
        } else {
            // Email not found
            $_SESSION['error_message'] = "Email not found.";
            header("Location: ../views/login.php");
            exit();
        }
    } else {
        echo "Error: " . $stmt->errorInfo();
    }
} else {
    // Incomplete login data
    $_SESSION['error_message'] = "Please enter both email and password.";
    header("Location: ../views/login.php");
    exit();
}
