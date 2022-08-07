<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class Dashboard extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function dashboard()
        {
            $data['page_id'] = 3;
            $data['page_tag'] = "Dashboard - Escuela";
            $data['page_title'] = "Dashboard - Escuela";
            $data['page_name'] = PROYECT_NAME;

            $this->views->getView($this, "dashboard", $data);
        }
    }
?>