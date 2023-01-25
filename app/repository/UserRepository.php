<?php 

    require_once __DIR__ . "/../connection/Connection.php";
    require_once __DIR__ . "/../models/UserModel.php";

    class UserRepository {

        public PDO $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
        }

        public function create(UserModel $user):int {
         try {

                $query = "INSERT INTO myuser (nomeUsuario, email, senha, genero, escolaridade, tipoUsuario) VALUES (:nomeUsuario, :email, :senha, :genero, :escolaridade, :tipoUsuario)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":nomeUsuario", $user->getNomeUsuario());
                $prepare->bindValue(":email", $user->getEmail());
                $prepare->bindValue(":senha",md5($user->getPassword()));
                $prepare->bindValue(":genero", $user->getGenero());
                $prepare->bindValue(":escolaridade", $user->getEscolaridade());
                $prepare->bindValue(":tipoUsuario", 1);

                $prepare->execute();
                

                return $this->conn->lastInsertId();
                
                
            } catch(Exception $e) {
                    print("Erro ao inserir usuário no banco de dados");
            }
         }
    
       
        public function findAll(): array {

            $table = $this->conn->query("SELECT * FROM myuser");
            //$usuarios  = $table->fetchAll(PDO::FETCH_ASSOC);
            $usuarios  = $table->fetchAll(PDO::FETCH_CLASS, "UserModel");

            return $usuarios;
        }

        public function findUserById(int $id) {

            $query = "SELECT * FROM myuser WHERE myuser.id = ?";
            
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $id, PDO::PARAM_INT);

            if($prepare->execute()){
            
                $usuario  = $prepare->fetchObject("UserModel");
            
            } else {
                $usuario = null;
            }

            return $usuario;
        }

        public function findUserByEmail(string $email) {

            $query = "SELECT * FROM myuser WHERE myuser.email = ?";
            
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $email, PDO::PARAM_STR);

            if($prepare->execute()){
                $usuario  = $prepare->fetchObject("UserModel");
            } else {
                $usuario = null;
            }

            return $usuario;
        }
        
        public function genero (string $genero) {

            $query = "SELECT * FROM myuser WHERE myuser.genero = ?";
            
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $genero, PDO::PARAM_STR);

            if($genero == "outro"){
                return "indefinido"; } 
            else {
                return $genero;
            }
        }

        public function Logar (string $email, string $senha) {
            $query = "SELECT tipoUsuario FROM myuser WHERE myuser.email = ? and myuser.senha = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(1, $email);
            $prepare->bindValue(2, $senha);
            $result = $prepare->execute();
            if($prepare->execute()){
                $usuario  = $prepare->fetchObject("UserModel");
            } else {
                $usuario = null;
            }
            return $usuario;
            var_dump($result);
    }

        public function update(UserModel $user){

            $query = "UPDATE myuser SET nomeUsuario = ?, email = ?, senha = ?, genero = ?, escolaridade = ? WHERE id = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(1, $user->getNomeUsuario());
            $prepare->bindValue(2, $user->getEmail());
            $prepare->bindValue(3,md5($user->getPassword()));
            $prepare->bindValue(4, $user->getGenero());
            $prepare->bindValue(5, $user->getEscolaridade());
            $prepare->bindValue(6, $user->getId());
            $result = $prepare->execute();
            //$resultU= $prepare->rowCount();
            //var_dump($resultU);
            return $result;
            if($prepare->execute()){
                $usuario  = $prepare->fetchObject("UserModel");
            } else {
                $usuario = null;
            }

            return $usuario;

        }

        public function deleteById( int $id) :int{ 
            $query = "DELETE FROM myuser WHERE id = :id";

            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":id", $id);
            $prepare->execute();
            $result = $prepare->rowCount();
            //var_dump($result);
            return $result;
            
        }

        public function adm(int $id){

            $query = "UPDATE myuser SET tipoUsuario = :tipoUsuario WHERE id = :id";
            
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":tipoUsuario", 2, PDO::PARAM_INT);
            $prepare->bindValue(":id", $id, PDO::PARAM_INT);
            $prepare->execute();
            $result = $prepare->rowCount();

            return $result;
        }
    }
