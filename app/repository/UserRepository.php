<?php 

    require_once __DIR__ . "/../connection/Connection.php";
    require_once __DIR__ . "/../models/UserModel.php";

    class UserRepository {

        public PDO $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
        }

        public function create(UserModel $myuser) {

            /* VALIDAÇÃO DE EMAIL (DEVERIA ESTAR AQUI) */
            $query = "SELECT * FROM myusers WHERE email = :email";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":email", $myuser->getEmail());
            $prepare->execute();

            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

            if(count($result) > 0) {
                throw new Exception("Email já cadastrado");
            }

            try {

                $query = "INSERT INTO myusers (name, email, password) VALUES (:name, :email, :password)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":username", $myuser->getUsername());
                $prepare->bindValue(":email", $myuser->getEmail());
                $prepare->bindValue(":password", $myuser->getPassword());
                $prepare->execute();

                return $this->conn->lastInsertId();
                
            } catch(Exception $e) {
                    print("Erro ao inserir usuário no banco de dados");
            }
        }

        public function findAll(): array {

            $table = $this->conn->query("SELECT * FROM myusers");
            //$usuarios  = $table->fetchAll(PDO::FETCH_ASSOC);
            $usuarios  = $table->fetchAll(PDO::FETCH_CLASS, "UserModel");

            return $usuarios;
        }

        public function findUserById(int $id) {

            $query = "SELECT * FROM myusers WHERE myusers.id = ?";
            
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

            $query = "SELECT * FROM myusers WHERE myusers.email = ?";
            
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $email, PDO::PARAM_STR);

            if($prepare->execute()){
                $usuario  = $prepare->fetchObject("UserModel");
            } else {
                $usuario = null;
            }

            return $usuario;
        }

        public function update(UserModel $myuser) {

            $query = "UPDATE myusers SET name = :name, email = :email, password = :password WHERE id = :id";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":name", $user->getUsername());
            $prepare->bindValue(":email", $user->getEmail());
            $prepare->bindValue(":password", $user->getPassword());
            $prepare->bindValue(":id", $user->getId());
            $prepare->execute();
        }

        public function deleteById( int $id) { 
            $query = "DELETE FROM myusers WHERE id = :id";

            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":id", $id);
            $prepare->execute();
            
        }
    }
