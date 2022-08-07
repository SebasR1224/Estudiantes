<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class Errors extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function notFound()
        {
            $this->views->getView($this, "error");
        }
    }
    $notFound = new Errors();
    $notFound->notFound();
?>