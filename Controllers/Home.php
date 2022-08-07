<?php
    class Home extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function home()
        {
            $data['page_id'] = 1;
            $data['page_title'] = PROYECT_NAME;
            $data['page_name'] = "Inicio";

            $this->views->getView($this, "home", $data);
        }
    }
?>