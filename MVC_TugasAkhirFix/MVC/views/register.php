<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Sehat - Register</title>
    <link rel="stylesheet" href="./register.css">
</head>

<body>
    <div class="container">
        <div class="register-form">
            <img src="../public/logo.png" alt="Logo Klinik Sehat" width=100 height=100 class="logo">
            <h1>DAFTAR</h1>
            <p>Masukkan data anda untuk mendaftar ke situs web kami</p>
            <form action="../controllers/registerController.php" method="POST">
                <input type="text" name="nama" placeholder="Masukkan nama anda" required>
                <input type="email" name="email" placeholder="Masukkan email anda" required>
                <select name="role" required>
                    <option value="" disabled selected>Pilih Role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="password" name="password" placeholder="Masukkan password" required>
                <input type="password" name="confirm_password" placeholder="Ulangi password" required>
                <button type="submit">Daftar</button>
            </form>
            <p class="login">
                Sudah Punya Akun? <a href="login.php">Login</a>
            </p>
        </div>
    </div>
</body>

</html>