<?php 
    defined('BASE_PATH') or exit('No se permite acceso directo');
    spl_autoload_register(function($class)
    {
        if(file_exists("Libraries/".'Core/'.$class.".php"))
        {
            require_once("Libraries/".'Core/'.$class.".php");
        }
    });
?>