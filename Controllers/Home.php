<?php
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function home(){
            
        }
        public function datos($params){
            echo $params;
        }
    }
?>