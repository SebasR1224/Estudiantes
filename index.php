<?php
    define('BASE_PATH', true);
    require_once("Config/Config.php");
    require_once("Helpers/Helpers.php");

    error_reporting(ERROR_REPORTING_LEVEL);

    $url = !empty($_REQUEST['url']) ? $_REQUEST['url'] : 'home/home';
    $arrayUrl = explode("/", $url);

    $controller = $arrayUrl[0];
    $method = $arrayUrl[0]; 
    $params = "";


    if(!empty($arrayUrl[1])){
        if($arrayUrl[1] != ""){
            $method = $arrayUrl[1];
        }
    }
    if(!empty($arrayUrl[2])){
        if($arrayUrl[2] != ""){
            for($i = 2; $i < count($arrayUrl); $i++){
                $params .= $arrayUrl[$i] . ','; 
            }
            $params = trim($params, ',');
        }
    }

    require_once("Libraries/Core/AutoLoad.php");
    require_once("Libraries/Core/Load.php");

?>