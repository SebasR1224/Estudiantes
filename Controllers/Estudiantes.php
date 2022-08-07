<?php
    class Estudiantes extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function estudiantes()
        {
            $data['page_id'] = 2;
            $data['page_title'] = PROYECT_NAME;
            $data['page_name'] = "Estudiantes";

            $this->views->getView($this, "estudiantes", $data);
        }
    }
?>