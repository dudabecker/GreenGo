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

                $query = "INSERT INTO myuser ( name, genero, escolaridade, email, password) VALUES (:name, :genero, :escolaridade, :email, :password)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":name", $user->getUsername());
                $prepare->bindValue(":genero", $user->getGenero());
                $prepare->bindValue(":escolaridade", $user->getEscolaridade());
                $prepare->bindValue(":email", $user->getEmail());
                $prepare->bindValue(":password", $user->getPassword());
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

        public function update(UserModel $user){

            $query = "UPDATE myuser SET name = ?, email = ?, password = ?, genero = ?, escolaridade = ? WHERE id = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(1, $user->getUsername());
            $prepare->bindValue(2, $user->getEmail());
            $prepare->bindValue(3, $user->getPassword());
            $prepare->bindValue(4, $user->getGenero());
            $prepare->bindValue(5, $user->getEscolaridade());
            $prepare->bindValue(6, $user->getId());
            $result = $prepare->execute();
            //$resultU= $prepare->rowCount();
            //var_dump($resultU);
            //return $result;

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
    }
