<?php
require_once 'config/Database.php';

class UserModel extends Model
{
    public function getByUsername($username)
    {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        return $this->mysqli->query($sql);
    }

    public function insert($username, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        return $this->mysqli->query($sql);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM users WHERE id = $id";
        return $this->mysqli->query($sql);
    }

    public function update($id, $username, $password = null)
    {
        if ($password) {
            $sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
        } else {
            $sql = "UPDATE users SET username = '$username'  WHERE id = '$id'";
        }
        $this->mysqli->query($sql);
    }
}
