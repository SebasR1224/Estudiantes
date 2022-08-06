<?php
    class Home{
        public function __construct()
        {
            
        }
        public function home(){
            echo "Mensaje desde el controlador";
        }
        public function datos($params){
            echo $params;
        }
    }
?>