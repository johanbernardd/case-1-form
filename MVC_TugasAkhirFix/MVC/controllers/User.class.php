<?php
class User extends Controller
{
    public function login_form()
    {
        $this->loadView('login');
    }

    public function login_process()
    {
        $userModel = $this->loadModel('UserModel');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $userModel->getByUsername($username)->fetch_object();

        if ($user && $password === $user->password) {
            session_start();
            $_SESSION['user_id'] = $user->id;
            $_SESSION['username'] = $user->username;
            $_SESSION['role'] = $user->role;
            header('Location: home.php');
        } else {
            echo "Invalid login credentials.";
        }
    }

    public function register_form()
    {
        $this->loadView('register');
    }

    public function register_process()
    {
        $userModel = $this->loadModel('UserModel');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userModel->insert($username, $password);
        header('Location: home.php?c=User&m=login_form');
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: home.php');
    }

    public function profile()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $userModel = $this->loadModel('UserModel');
        $user = $userModel->getById($_SESSION['user_id'])->fetch_object();
        $this->loadView('profile', ['user' => $user]);
    }

    public function edit_profile()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $userModel = $this->loadModel('UserModel');
        $user = $userModel->getById($_SESSION['user_id'])->fetch_object();
        $this->loadView('edit_profile', ['user' => $user]);
    }

    public function update_profile()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $userModel = $this->loadModel('UserModel');
        $id = $_SESSION['user_id'];
        $username = addslashes($_POST['username']);
        // $email = addslashes($_POST['email']);

        // If password field is filled, update the password as well
        if (!empty($_POST['password'])) {
            // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $password = $_POST['password'];
            $userModel->update($id, $username, $password);
        } else {
            $userModel->update($id, $username);
        }

        $_SESSION['username'] = $username;

        header('Location: ?c=User&m=profile');
        exit;
    }
}
