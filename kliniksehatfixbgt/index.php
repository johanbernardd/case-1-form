<?php
error_reporting(~E_NOTICE);

// Autoload function to automatically include required files
spl_autoload_register(function ($class_name) {
    if (file_exists("controllers/$class_name.class.php")) {
        include_once "controllers/$class_name.class.php";
    } elseif (file_exists("models/$class_name.class.php")) {
        include_once "models/$class_name.class.php";
    }
});

// Default controller and method
$controller = $_GET['c'] ?? 'LandingpageController';
$method = $_GET['m'] ?? 'index';
$id = $_GET['id'] ?? null;

try {
    // Check if the controller class exists
    if (class_exists($controller)) {
        $controllerInstance = new $controller();

        // Check if the method exists in the controller
        if (method_exists($controllerInstance, $method)) {
            if ($id !== null) {
                $controllerInstance->$method($id);
            } else {
                $controllerInstance->$method();
            }
        } else {
            throw new Exception("Method $method not found in controller $controller.");
        }
    } else {
        throw new Exception("Controller $controller not found.");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
