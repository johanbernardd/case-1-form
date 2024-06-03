<?php
class Controller
{
    public function loadModel($modelName)
    {
        include_once "model/Model.php";
        include_once "model/$modelName.php";
        return new $modelName;
    }

    public function loadView($folderName, $viewName, $data = [])
    {
        foreach ($data as $var => $value) {
            $$var = $value;
        }
        include_once "view/$folderName/$viewName.php";
    }
}
?>
