<?php

// Exibe os erros em uma página web (DEVERIA ESTAR AQUI?).
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/ZonaRepository.php";
//require_once __DIR__ . "/Controller.php";

use ControllerZona as GlobalControllerZona;

$zonac = new ControllerZona();

class ControllerZona{

	function __construct(){
		if(isset($_POST["action"])){
			$action = $_POST["action"];
		}else if(isset($_GET["action"])){
			$action = $_GET["action"];
		}
		//print_r($action);

		if(isset($action)){
			$this->callAction($action);
		}else{
			$msg = "Nenhuma acao a ser processada...";
            print_r($msg);
			//include_once "index.php";
		}
	}

    public function callAction(string $functionName = null){
        //print_r($functionName);
        if (method_exists($this, $functionName)) {
            $this->$functionName();
        
        } else if(method_exists($this, "preventDefault")) {
            $met = "preventDefault";
            $this->$met();
        
        } else {
            throw new BadFunctionCallException("Usecase not exists");
        }
    }

    public function loadView(string $path, array $data = null, string $msg = null){
        $caminho = __DIR__ . "/../views/" . $path;
        // echo("msg=");
        // print_r($msg);
        if(file_exists($caminho)){
             require $caminho;
        } else {
            print "Erro ao carregar a view";
        }
    }

function create(){

    $zona = new ZonaModel();
    $zona->setNomeZona($_POST["field_NomeZona"]);
    $zona->setPontoZona($_POST["field_PMZ"]);
    //$zona->setIdZona($_POST[]);

    $zonaRepository = new ZonaRepository();
    $idZona = $zonaRepository->create($zona);
    print_r($zona);
    findZonas();
}

function addPlantas(){
    $zona = new ZonaModel();
    $zona->setIdPlanta($_POST["field_plantas"]);

}

function listarPlantas(){

}

function findAll(){
    $zonaRepository = new ZonaRepository();

    $zonas = $zonaRepository->findZonas();

    $data['titulo'] = "listar zonas";
    $data['zonas'] = $zonas;

    GlobalControllerZona::loadView("../views/zones/listZona.php", $data);
}

function listar(){
    
    $idParam = $_GET['idZona'];
    $zonaRepository = new ZonaRepository();
    $zonas = $zonaRepository->listar($idParam);

    
    print_r($zonas);
    
}
function findZonaByIdZona()
{
    $idParam = $_GET['idZona'];

    $zonaRepository = new ZonaRepository();
    $zona = $zonaRepository->findZonaByIdZona($idParam);

    print "<pre>";
    print_r($zona);
    print "</pre>";

    //Controller::loadView("users/list.php");
}

function deleteZonaByIdZona()
{
    $idParam = $_GET['idZona'];
    $zonaRepository = new ZonaRepository();    

    $zonaRepository->deleteZonaByIdZona($idParam);

    //Controller::loadView("users/list.php", $data);
}

function preventDefault() {
    print "call preventDefault()";
    //Controller::loadView("users/list.php", $data);
}
}
