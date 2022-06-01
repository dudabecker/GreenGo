<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//direciona o caminho
require __DIR__."/../connection/Connection.php";

$conn = new Connection();
//CONECTA
$pdo = $conn->getConnection(); 
//CONSULTA
$tabela = $pdo->query("SELECT * FROM myusers");
//PEGA OS DADOS DA TABELA E MOSTRA EM ARRAY COMO NÓS QUEREMOS
$usuarios = $tabela ->fetchAll(PDO::FETCH_ASSOC);

print "<pre>"; 
print_r($usuarios);
print "</pre>";