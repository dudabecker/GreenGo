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
                $query = "INSERT INTO planta (idZona, codNumerico, codQR) VALUES (:idZona, :codNumerico, :codQR)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":idZona", $planta->getIdZona());
                $prepare->bindValue(":codNumerico", $planta->getCodNumerico());
                $prepare->bindValue(":codQR", $especie->getCodQR());
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
            $query = "UPDATE planta SET idZona = ?, codNumerico = ?, codQR = ? WHERE idPlanta = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(1, $planta->getIdZona());
            $prepare->bindValue(2, $planta->getCodNumerico());
            $prepare->bindValue(3, $planta->getCodQR());
            $result = $prepare->execute();
            return $result;
        }

        public function deletePlantaById( int $idPlanta) : int {
            $query = "DELETE FROM planta WHERE idPlanta = :idPlanta";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idPlanta", $idPlanta);
            $prepare->execute();
            $result = $prepare->rowCount();
            return $result;
        }

        public function verPlanta(int $idPlanta){
            $query = "SELECT * FROM planta WHERE idPlanta = :idPlanta";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idPlanta", $idPlanta);
        }
    }