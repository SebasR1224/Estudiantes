<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    $controllerFile = "Controllers/".$controller.".php";
    if(file_exists($controllerFile))
    {
        require_once($controllerFile);
        $controller = new $controller();

        if(method_exists($controller, $method))
        {
            $controller->{$method}($params);
        }else{
            require_once("Controllers/Error.php");
        }
    }else{
        require_once("Controllers/Error.php");
    }
?>