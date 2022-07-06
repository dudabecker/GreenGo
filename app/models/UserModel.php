<?php 

    class UserModel {

        private $id;
        private string $name;
        private string $email;
        private string $password;
        private string $genero;
        private string $escolaridade;

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getId(): int {
            return $this->id;
        }

        public function setUsername(string $name){
            $this->name = $name;
        }

        public function getUsername(){
            return $this->name;
        }

        public function setEmail(string $email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword(string $password){
            $this->password = $password;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setGenero(string $genero){
            $this->genero = $genero;
        }

        public function getGenero(){
            return $this->genero;
        }
        public function setEscolaridade(string $escolaridade){
            $this->escolaridade = $escolaridade;
        }

        public function getEscolaridade(){
            return $this->escolaridade;
        }


    }