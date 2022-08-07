<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');

    const PROYECT_NAME = "Escuela";
    const BASE_URL = "http://localhost/Estudiantes/";
    //Zona horaria
    date_default_timezone_set('America/Bogota');
    //conexion a la base de datos;
    const DB_HOST = "localhost";    
    const DB_USER = "root";    
    const DB_PASSWORD = "";
    const DB_NAME = "escuela";
    const DB_CHARSET = "charset=utf8";

    //Control de errores en php
    const ERROR_REPORTING_LEVEL = -1;

?>