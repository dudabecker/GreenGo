<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//direciona o caminho
require __DIR__."/../connection/Connection.php";
require __DIR__."/Controller.php";

function findAll(){

$conn = new Connection();
//CONECTA
$pdo = $conn->getConnection(); 
//CONSULTA
$tabela = $pdo->query("SELECT * FROM myusers");
//PEGA OS DADOS DA TABELA E MOSTRA EM ARRAY COMO NÓS QUEREMOS
$usuarios = $tabela ->fetchAll(PDO::FETCH_ASSOC);

$data['titulo'] = "listar usuarios";
$data['usuarios'] = $usuarios;

Controller :: loadView ("users/list.php", $data);
}


function findUserById(){
    print "chamou findUserById";
}


function deleteUser(){
    print "chamou deleteUser";
}

@$acao = $_GET['acao'];

switch ($acao) {
    case "listar":
        findAll();
        break;
    case "usuario":
       findUserById();
         break;
     case "deletar":
        deleteUser();
         break;
    default:
        findAll();     

 }  
            