<?php
session_start();
class AuthController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->loadModel('UserModel');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if (!empty($email) && !empty($password)) {
                list($loginSuccess, $username) = $this->userModel->login($email, $password);
                if ($loginSuccess) {
                    $_SESSION['username'] = $username;
                    header("Location: index.php?c=LandingpageController&m=dashboard");
                    exit();
                } else {
                    $error = "Wrong username or password";
                }
            } else {
                $error = "Please fill in all fields.";
            }
        }
        $this->loadView('Auth/login', ['error' => $error ?? null]);
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_POST['password'] == $_POST['confirm_password']){
                $nama = $_POST['nama'] ?? '';
                $email = $_POST['email'] ?? '';
                $role = $_POST['role'] ?? '';
                $password = $_POST['password'] ?? '';
                $password = password_hash($password, PASSWORD_BCRYPT);

                if (!empty($nama) && !empty($email) && !empty($role) && !empty($password)) {
                    if ($this->userModel->register($nama, $email, $role, $password)) {
                        header("Location: index.php?c=LandingpageController&m=login");
                        exit();
                    } else {
                        $error = "Error to processing register.";
                    }
                } else {
                    $error = "Please fill in all fields.";
                }
            }
        }
        $this->loadView('Auth/register', ['error' => $error ?? null]);
    }

    public function logout()
    {
        $this->loadView('Auth/logout', null);
    }
}