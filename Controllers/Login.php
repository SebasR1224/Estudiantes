<?php

    class Login extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function login()
        {
            $data['page_id'] = 2;
            $data['page_tag'] = "Login - Escuela";
            $data['page_title'] = "Login - Escuela";
            $data['page_name'] = "Login";

            $this->views->getView($this, "login", $data);
        }
    }
?>