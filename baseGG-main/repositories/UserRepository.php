<?php

    require_once __DIR__."/../connection/Connection.php";

    class UserRepository{
        
        private PDO $conn;

        function __construct(){
            $this->conn = Connection::getConnection();
        }

        public function create(){
        }
        //função ler
        public function findAll(){
            $query = "SELECT * FROM myusers";
            $table = $this->conn->query($query);
            $usuarios = $table = $this->conn->query($query);
            return $usuarios;
        }

        public function update(){

        }
        public function delete(){

        }
    }