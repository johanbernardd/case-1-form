<?php
class LandingpageController extends Controller
{
    public function index()
    {
        $this->loadView('Landingpage/landingpage');
    }
    public function login()
    {
        header("Location: index.php?c=AuthController&m=login");
    }
    public function register()
    {
        header("Location: index.php?c=AuthController&m=register");
    }
    public function logout()
    {
        header("Location: index.php?c=AuthController&m=logout");
    }
}
