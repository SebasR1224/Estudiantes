<?php
    class Usuarios extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function usuarios()
        {
            $data['page_id'] = 3;
            $data['page_tag'] = "Usuarios - Escuela";
            $data['page_title'] = "Usuarios - Escuela";
            $data['page_name'] = PROYECT_NAME;

            $this->views->getView($this, "usuarios", $data);
        }
    }
?>