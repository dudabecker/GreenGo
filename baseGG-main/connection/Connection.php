<?php

class Connection {

    private $host = "localhost";
    private $dbname = "GREENGO";
    private $user = "root";
    private $password = "bancodedados";

    public function getConnection(): PDO {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//code...
        } catch (Exception $e) {
            print ("Erro ao conectar com o banco de dados");
        }
      return $conn;
    }
}
