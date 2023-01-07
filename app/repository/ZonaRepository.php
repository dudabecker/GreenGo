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

        public function listar(){
            $table = $this->conn->query("SELECT idZona FROM zona");
            $zonas  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $zonas;
        }

        public function findZonaByIdZona(int $idZona) {

            $query = "SELECT * FROM zona WHERE id.Zona = ?";
            
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $idZona, PDO::PARAM_INT);

            if($prepare->execute()){
            
                $zonas  = $prepare->fetchObject("ZonaModel");
            
            } else {
                $zonas = null;
            }

            return $zonas;
        }

        public function update(ZonaModel $zonas) {

            $query = "UPDATE zonas SET qntPlantas = :qntPlantas WHERE idZona = :idZona";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":id", $zonas->getIdZona());
            $prepare->bindValue(":qntPlantas", $zonas->getQntPlantas());
            $prepare->execute();
            
            //ARRUMAR
        }

        public function deleteZonaByIdZona( int $idZona) {

            $query = "DELETE FROM zonas WHERE idZona = :idZona";

            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idZona", $idZona);
            $prepare->execute();
            
        }
    }
