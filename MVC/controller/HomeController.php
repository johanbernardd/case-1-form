<?php
class HomeController extends Controller
{
    public function index()
    {
        $this->loadView('Homepage','home');
    }
}
?>
