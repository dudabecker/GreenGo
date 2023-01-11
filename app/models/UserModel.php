<?php 

    class UserModel {

        private $id;
        private string $nomeUsuario;
        private string $email;
        private string $senha;
        private string $genero;
        private string $escolaridade;
        private int $tipoUsuario;
        private int $somaPonto;

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setNomeUsuario(string $nomeUsuario){
            $this->nomeUsuario = $nomeUsuario;
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }

        public function setEmail(string $email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword(string $senha){
            $this->senha = $senha;
        }

        public function getPassword(){
            return $this->senha;
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

        public function setTipoUsuario(int $tipoUsuario){
            $this->tipoUsuario = $tipoUsuario;
        }

        public function getTipoUsuario(){
            return $this->tipoUsuario;
        }

        public function setSomaPonto(int $somaPonto){
            $this->somaPonto = $somaPonto;
        }

        public function getSomaPonto(){
            return $this->somaPonto;
        }

    }
