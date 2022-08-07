<?php
    class Estudiantes extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function estudiantes()
        {
            $data['page_id'] = 4;
            $data['page_tag'] = "Estudiantes - Escuela";
            $data['page_title'] = "Estudiantes - Escuela";
            $data['page_name'] = PROYECT_NAME;

            $this->views->getView($this, "estudiantes", $data);
        }

        
    }
?>