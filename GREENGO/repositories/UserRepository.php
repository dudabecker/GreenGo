<?php

    require_once __DIR__."/../connection/Connection.php";
    //cada "objeto" do site vai ter que ter um
    class UserRepository{

        private PDO $conn;

        function __construct(){
            $this->conn = Connection::getConnection();
        }

        public function create(){}

        public function findAll():array {
            $query = "SELECT * FROM myusers";
            $table = $this->conn->query($query);

            $usuarios = $table->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        }

        public function update(){
           
        }

        public function delete(){}
    }