<?php
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function home(){
            $this->views->getView($this, "home");
        }
        public function datos($params){
            echo $params;
        }
    }
?>