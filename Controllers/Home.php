<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class Home extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function home()
        {
            $data['page_id'] = 1;
            $data['page_tag'] = "Home - Escuela";
            $data['page_title'] = "Home - Escuela";
            $data['page_name'] = "Home";

            $this->views->getView($this, "home", $data);
        }
    }
?>