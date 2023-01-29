<?php 

    require_once __DIR__ . "./../connection/Connection.php";
    require_once __DIR__ . "./../models/EspecieModel.php";

    class EspecieRepository {

        public PDO $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
            var_dump($this->conn);
        }

        public function create(EspecieModel $especie) :bool{
            try {
                $query = "INSERT INTO especie (nomePop, nomeCie, descricao, imagem, pontoEsp, frutifera, toxidade, exotica, raridade, medicinal, comestivel) VALUES (:nomePop, :nomeCie, :descricao, :imagem, :pontoEsp, :frutifera, :toxidade, :exotica, :raridade, :medicinal, :comestivel)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":nomePop", $especie->getNomePop());
                $prepare->bindValue(":nomeCie", $especie->getNomeCie());
                $prepare->bindValue(":descricao", $especie->getDescricao());
                $prepare->bindValue(":imagem", $especie->getImagem());
                $prepare->bindValue(":pontoEsp", $especie->getPontoEsp());
                $prepare->bindValue(":frutifera", $especie->getFrutifera());
                $prepare->bindValue(":toxidade", $especie->getToxidade());
                $prepare->bindValue(":exotica", $especie->getExotica());
                $prepare->bindValue(":raridade", $especie->getRaridade());
                $prepare->bindValue(":medicinal",$especie->getMedicinal());
                $prepare->bindValue(":comestivel",$especie->getComestivel());
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
            $query = "UPDATE especie SET nomePop = ?, nomeCie = ?, descricao = ?, frutifera = ?, toxidade = ?, exotica = ?, raridade = ?, medicinal = ?, comestivel = ?, pontoEsp = ?, imagem = ? WHERE idEspecie = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(1, $especie->getNomePop());
            $prepare->bindValue(2, $especie->getNomeCie());
            $prepare->bindValue(3, $especie->getDescricao());
            $prepare->bindValue(4, $especie->getFrutifera());
            $prepare->bindValue(5, $especie->getToxidade());
            $prepare->bindValue(6, $especie->getExotica());
            $prepare->bindValue(7, $especie->getRaridade());
            $prepare->bindValue(8, $especie->getMedicinal());
            $prepare->bindValue(9, $especie->getComestivel());
            $prepare->bindValue(10, $especie->getPontoEsp());
            $prepare->bindValue(11, $especie->getImagem());
            $prepare->bindValue(12, $especie->getIdEspecie());
            $result = $prepare->execute();
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

        public function verEspecie(int $idEspecie){
            $query = "SELECT * FROM especie WHERE idEspecie = :idEspecie";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idEspecie", $idEspecie);
        }

        public function verFrutifera(){
            $table = $this->conn->query("SELECT * FROM especie WHERE frutifera = 1");
            $especies  = $table->fetchAll(PDO::FETCH_ASSOC);
            return $especies;
            }

        public function verToxidade(){
            $table = $this->conn->query("SELECT * FROM especie WHERE toxidade = 1");
            $especies  = $table->fetchAll(PDO::FETCH_ASSOC);
            return $especies;
            }    

        public function verComestivel(){
            $table = $this->conn->query("SELECT * FROM especie WHERE comestivel = 1");
            $especies  = $table->fetchAll(PDO::FETCH_ASSOC);
            return $especies;
            }
        
        public function verExotica(){
            $table = $this->conn->query("SELECT * FROM especie WHERE exotica = 1");
            $especies  = $table->fetchAll(PDO::FETCH_ASSOC);
            return $especies;
            }
            
        public function verRaridade(){
            $table = $this->conn->query("SELECT * FROM especie WHERE raridade = 1");
            $especies  = $table->fetchAll(PDO::FETCH_ASSOC);
            return $especies;
            }   
            
        public function verMedicinal(){
            $table = $this->conn->query("SELECT * FROM especie WHERE medicinal = 1");
            $especies  = $table->fetchAll(PDO::FETCH_ASSOC);
            return $especies;
            } 
            
        public function EspeciesMapa(): array {
            $table = $this->conn->query("SELECT * FROM especie");
            $especies  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $especies;
        }
        }
    