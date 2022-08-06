<?php
    class HomeModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function setUser(string $nombre){
            $query = "insert into usuario (nombre) values(?)";
            $data = array($nombre);
            $request_insert = $this->insert($query, $data);
            return $request_insert;
        }

        public function getUser($id){
            $sql = "select * from usuario where id = $id";
            $request = $this->select($sql);
            return $request;
        }

        public function updateUser(int $id, string $nombre){
            $sql = "update usuario set nombre=? where id=$id";
            $arra = array($nombre);
            $request = $this->update($sql, $arra);
            return $request;
        }

        public function getUsers(){
            $sql = "select * from usuario";
            $request = $this->select_all($sql);
            return $request;
        }

        public function eliminarUsuario($id){
            $sql = "delete from usuario where id=$id";
            $request = $this->delete($sql);
            return $request;
        }

    }
?>