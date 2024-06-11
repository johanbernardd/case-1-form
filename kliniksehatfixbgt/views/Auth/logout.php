<?php
session_start();
if(isset($_SESSION['username'])) {
    session_destroy();
    header("Location:index.php?c=LandingpageController&m=index");
}