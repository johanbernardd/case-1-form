<?php

error_reporting(~E_NOTICE);

// Default controller is 'HomeController'
$controller = $_GET['c'] ?? 'HomeController';
// Default method is 'index'
$method = $_GET['m'] ?? 'index';

// Include base controller class
include_once "controller/Controller.php";

// Include the requested controller class
$controllerFile = "controller/$controller.php";
if (file_exists($controllerFile)) {
    include_once $controllerFile;
} else {
    die("Controller $controller not found.");
}

// Create an instance of the controller and call the method
if (class_exists($controller)) {
    $instance = new $controller();
    if (method_exists($instance, $method)) {
        $instance->$method();
    } else {
        die("Method $method not found in controller $controller.");
    }
} else {
    die("Class $controller not found.");
}
?>
