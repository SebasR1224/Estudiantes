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
            $data['tag_page'] = "Home";
            $data['page_title'] = "Estudiantes";
            $data['page_name'] = "Home";

            $this->views->getView($this, "home", $data);
        }

        public function insertar()
        {
            $data = $this->model->setUser("Hola");
            print_r($data);
        }

        public function verUsuario($id)
        {
            $data = $this->model->getUser($id);
            print_r($data);
        }

        public function actualizar()
        {
            $data = $this->model->updateUser(1, "sebas");
            print_r($data);
        }

        public function serTodos()
        {
            $data = $this->model->getUsers();
            print_r($data);
        }

        public function eliminar($id){
            $data = $this->model->eliminarUsuario($id);
            print_r($data);
        }

    }
?>