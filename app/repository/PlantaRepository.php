<?php 

    require_once __DIR__ . "./../connection/Connection.php";
    require_once __DIR__ . "./../models/PlantaModel.php";

    class PlantaRepository {

        public PDO $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
            var_dump($this->conn);
        }

        public function create(PlantaModel $planta){
            try {
                $query = "INSERT INTO planta (idEspecie, idZona, codNumerico, codQR) VALUES (:idEspecie, :idZona, :codNumerico, :codQR)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":idEspecie", $planta->getIdEspecie());
                $prepare->bindValue(":idZona", $planta->getIdZona());
                $prepare->bindValue(":codNumerico", $planta->getCodNumerico());
                $prepare->bindValue(":codQR", $planta->getCodQR());
                print_r($query);
                $prepare->execute();
                return $this->conn->lastInsertId();
                
            } catch(Exception $e) {
                    print("Erro ao inserir especie no banco de dados");
            }
        }


        public function findAll(): array {
            $table = $this->conn->query("SELECT * FROM planta");
            $plantas  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $plantas;
        }

        public function findPlantaById(int $idPlanta) {
            $query = "SELECT * FROM planta WHERE idPlanta = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $idPlanta, PDO::PARAM_INT);

            if($prepare->execute()){
                $planta  = $prepare->fetchObject("PlantaModel");
            } else {
                $planta = null;
            }
            return $planta;
        }

        public function update(PlantaModel $planta) : bool {
            $query = "UPDATE planta SET idEspecie = ?, idZona = ?, codNumerico = ?, codQR = ? WHERE idPlanta = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(1, $planta->getIdEspecie());
            $prepare->bindValue(2, $planta->getIdZona());
            $prepare->bindValue(3, $planta->getCodNumerico());
            $prepare->bindValue(4, $planta->getCodQR());
            $prepare->bindValue(5, $planta->getIdPlanta());
            $result = $prepare->execute();
            //$result = $prepare->rowCount();
            //var_dump($result);
            return $result;
        }

        public function deletePlantaById( int $idPlanta) : int{
            $query = "DELETE FROM planta WHERE idPlanta = :idPlanta";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idPlanta", $idPlanta);
            $prepare->execute();
            $result = $prepare->rowCount();
            //var_dump($result);
            return $result;
        }

        public function verPlanta(int $idPlanta){
            $query = "SELECT * FROM planta WHERE idPlanta = :idPlanta";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idPlanta", $idPlanta);
        }

        public function identificarPlanta($codNumerico){
            $query = "SELECT * FROM planta where codNumerico = :codNumerico;";
            $prepare = $this->conn->prepare($query);
            $planta = $prepare->bindValue(":codNumerico", $codNumerico);
            if($prepare->execute()){
                $planta  = $prepare->fetchObject("PlantaModel");
            } else {
                $planta = null;
            }
            return $planta;}

        public function verZona(int $idZona){
            switch ($idZona) {
                case 1:
                    $table = $this->conn->query("SELECT * FROM planta WHERE idZona = 1");
                    $planta = $table->fetchAll(PDO::FETCH_ASSOC);
                    return $planta;
                    break;
                
                case 2:
                    $table = $this->conn->query("SELECT * FROM planta WHERE idZona = 2");
                    $planta = $table->fetchAll(PDO::FETCH_ASSOC);
                    return $planta;
                    break;
                
                case 3:
                    $table = $this->conn->query("SELECT * FROM planta WHERE idZona = 3");
                    $planta = $table->fetchAll(PDO::FETCH_ASSOC);
                    return $planta;
                    break;
                
                case 4:
                    $table = $this->conn->query("SELECT * FROM planta WHERE idZona = 4");
                    $planta = $table->fetchAll(PDO::FETCH_ASSOC);
                    return $planta;
                    break;

                case 5:
                    $table = $this->conn->query("SELECT * FROM planta WHERE idZona = 5");
                    $planta = $table->fetchAll(PDO::FETCH_ASSOC);
                    return $planta;
                    break;

                case 6:
                    $table = $this->conn->query("SELECT * FROM planta WHERE idZona = 6");
                    $planta = $table->fetchAll(PDO::FETCH_ASSOC);
                    return $planta;
                    break;
            }
        } 
        
        public function verIndividuos($idEspecie){
            $query = "SELECT * FROM planta where idEspecie = :idEspecie;";
            $prepare = $this->conn->prepare($query);
            $planta = $prepare->bindValue(":idEspecie", $idEspecie);
            if($prepare->execute()){
                $planta  = $prepare->fetchObject("PlantaModel");
            } else {
                $planta = null;
            }
            return $planta;}
    }