<?php 

    require_once __DIR__ . "./../connection/Connection.php";
    require_once __DIR__ . "./../models/EspecieModel.php";

    class EspecieRepository {

        public PDO $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
        }

        public function create(EspecieModel $especie){
            try {
                //print_r($cliente);
                $query = "INSERT INTO Especie (nomePop, nomeCie, frutifera, toxidade, comestivel, raridade, medicinal) VALUES (:nomePop, :nomeCie, :frutifera, :toxidade, :comestivel, :raridade, :medicinal)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":nomePop", $especie->getNomePop());
                $prepare->bindValue(":nomeCie", $especie->getNomeCie());
                $prepare->bindValue(":frutifera", $especie->getFrutifera());
                $prepare->bindValue(":toxidade", $especie->getToxidade());
                $prepare->bindValue(":comestivel", $especie->getComestivel());
                $prepare->bindValue(":raridade", $especie->getRaridade());
                $prepare->bindValue(":medicinal",$especie->getMedicinal());
                print_r($query);
                $prepare->execute();
                return $this->conn->lastInsertId();
                
            } catch(Exception $e) {
                    print("Erro ao inserir especie no banco de dados");
            }
        }


        public function findAll(): array {
            $table = $this->conn->query("SELECT * FROM especie");
            $especies  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $especies;
        }

        public function findEspecieById(int $idEspecie) {
            $query = "SELECT * FROM especie WHERE idEspecie = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $idEspecie, PDO::PARAM_INT);

            if($prepare->execute()){
                $especie  = $prepare->fetchObject("EspecieModel");
            } else {
                $especie = null;
            }
            return $especie;
        }

        public function update(EspecieModel $especie) : bool {
            $query = "UPDATE especie SET nomePop = ?, nomeCie = ?, frutifera = ?, toxidade = ?, comestivel = ?, raridade = ?, medicinal = ? WHERE idEspecie = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(1, $especie->getNomePop());
            $prepare->bindValue(2, $especie->getNomeCie());
            $prepare->bindValue(3, $especie->getFrutifera());
            $prepare->bindValue(4, $especie->getToxidade());
            $prepare->bindValue(5, $especie->getComestivel());
            $prepare->bindValue(6, $especie->getRaridade());
            $prepare->bindValue(7, $especie->getMedicinal());
            $prepare->bindValue(8, $especie->getIdEspecie());
            $result = $prepare->execute();
            //$result = $prepare->rowCount();
            //var_dump($result);
            return $result;
        }

        public function deleteEspecieById( int $idEspecie) : int {
            $query = "DELETE FROM especie WHERE idEspecie = :idEspecie";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idEspecie", $idEspecie);
            $prepare->execute();
            $result = $prepare->rowCount();
            //var_dump($result);
            return $result;
        }
    }