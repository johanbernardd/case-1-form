<?php
class Controller
{
    public function loadModel($modelName)
    {
        include_once "models/Model.class.php";
        include_once "models/$modelName.class.php";
        return new $modelName;
    }

    public function loadView($viewName, $data = [])
    {
        foreach ($data as $var => $value) {
            $$var = $value;
        }
        include "views/{$viewName}.php";
        include "Resource/footer.php";
    }
}
