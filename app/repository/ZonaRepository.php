<?php 

    require_once __DIR__ . "/../connection/Connection.php";
    require_once __DIR__ . "/../models/ZonaModel.php";

    class ZonaRepository {

        public PDO $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
        }

        public function create(ZonaModel $zona) {

            try {

                $query = "INSERT INTO zona (nomeZona, pontoZona) VALUES (:nomeZona, :pontoZona)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":nomeZona", $zona->getNomeZona());
                $prepare->bindValue(":pontoZona", $zona->getPontoZona());
                $prepare->execute();

                return $this->conn->lastInsertId();
                
            } catch(Exception $e) {
                    print("Erro ao inserir número de plantas no banco de dados");
            }
        }

        public function findZonas(): array {

            $table = $this->conn->query("SELECT * FROM zona");
            $zonas  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $zonas;
        }

        public function listar(int $idZona){
            $query = "SELECT pontoZona FROM zona WHERE idZona = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $idZona, PDO::PARAM_INT);

            if($prepare->execute()){
            
                $zonas  = $prepare->fetchObject("ZonaModel");
            
            } else {
                $zonas = null;
            }

            return $zonas;
        }

        public function findZonaByIdZona(int $idZona) {

            $query = "SELECT * FROM zona WHERE idZona = ?";
            
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $idZona, PDO::PARAM_INT);

            if($prepare->execute()){
            
                $zonas  = $prepare->fetchObject("ZonaModel");
            
            } else {
                $zonas = null;
            }

            return $zonas;
        }

        public function update(ZonaModel $zona) {

            $query = "UPDATE zona SET nomeZona = ?, pontoZona = ? WHERE idZona = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(1, $zona->getNomeZona());
            $prepare->bindValue(2, $zona->getPontoZona());
            $prepare->bindValue(3, $zona->getIdZona());
            $result = $prepare->execute();
            return $result;

            //return $zonas;
            //ARRUMAR
        }

        public function pontoG(ZonaModel $zonas, PlantaModel $planta){
            $query = "SELECT * from zonas where idZona = :idZona";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":id", $planta->getIdZona(), PDO::PARAM_INT);
        }

        public function deleteZonaByIdZona( int $idZona) {

            $query = "DELETE FROM zonas WHERE idZona = :idZona";

            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idZona", $idZona);
            $prepare->execute();
            
        }
    }
