<?php
session_start();
if(isset($_SESSION["username"])) {
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Pweb - Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <img src="https://seeklogo.com/images/K/kemenkes-logo-A1B9A09FBB-seeklogo.com.png" alt="Clinic Pweb Logo" class="logo">
            <h1>MASUK</h1>
            <p>masuk dengan data yang anda masukkan saat pendaftaran</p>
            <form action="../controller/loginController.php" method="POST">
                <input type="email" name="email" placeholder="Masukkan email anda" required>
                <input type="password" name="password" placeholder="Masukkan password" required>
                <button type="submit">Log in</button>
            </form>
            <p class="register">
                Belum Punya Akun? <a href="register.php">Daftar</a><br>
                <a href="forgot-password.php">Lupa password?</a>
            </p>
        </div>
    </div>
</body>
</html>