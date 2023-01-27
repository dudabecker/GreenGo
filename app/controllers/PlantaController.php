<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/PlantaRepository.php";
//require_once __DIR__ . "/Controller.php";

$cplanta = new ControllerPlanta();

class ControllerPlanta{

    public $plantaRepository;
	function __construct(){
        $this->plantaRepository = new PlantaRepository();
		if(isset($_POST["action"])){
			$action = $_POST["action"];
		}else if(isset($_GET["action"])){
			$action = $_GET["action"];
		}

		if(isset($action)){
			$this->callAction($action);
		}else{
			$msg = "Nenhuma acao a ser processada...";
            print_r($msg);
			//include_once "index.php";
		}
	}

    public function callAction(string $functionName = null){
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
        if(file_exists($caminho)){
             require $caminho;
        } else {
            print "Erro ao carregar a view";
        }
    }

    private function create(){
        $planta = new PlantaModel();

        $planta->setIdEspecie($_POST["idEspecie"]);
		$planta->setIdZona($_POST["idZona"]);
		$planta->setCodNumerico($_POST["codNumerico"]);
        $planta->setNomeSocial($_POST["nomeSocial"]);
		$planta->setHistoria($_POST["historia"]);
        //$planta->setCodQR($_POST["codQR"]);

        $id = $this->plantaRepository->create($planta);

        if($id){
			$msg = "Registro inserido com sucesso.";
		}else{
			$msg = "Erro ao inserir o registro no banco de dados.";
		}

        $this->findAll($msg);
    }

    private function loadFormNew(){
        $this->loadView("plantas/adicionarPlanta.php", null,"teste");
    }    

    private function findAll(string $msg = null){

        $plantas = $this->plantaRepository->findAll();

        $data['titulo'] = "Listar Plantas";
        $data['plantas'] = $plantas;

        $this->loadView("plantas/listPlantas.php", $data, $msg);
    }

    private function findPlantaById(){
        $idParam = $_GET["idPlanta"];

        $planta = $this->plantaRepository->findPlantaById($idParam);

        print "<pre>";
        print_r($planta);
        print "</pre>";
    }

    private function verPlanta(){
        $idParam = $_GET["idPlanta"];
        $planta = $this->plantaRepository->findPlantaById($idParam);
        $data['plantas'][0] = $planta;

        $this->loadView("plantas/verPlanta.php", $data);
    }

    private function deletePlantaById(){
            $idParam = $_GET["id"];
            $qt = $this->plantaRepository->deletePlantaById($idParam);
            if($qt){
                $msg = "Registro excluído com sucesso.";
            }else{
                $msg = "Erro ao excluir o registro no banco de dados.";
            }
            $this->findAll($msg);
        }
        /*$idParam = $_GET["idPlanta"];
        $qt = $this->plantaRepository->deletePlantaById($idParam);
        if($qt){
			$msg = "Registro excluído com sucesso.";
		}else{
			$msg = "Erro ao excluir o registro no banco de dados.";
		}
        $this->findAll($msg);
    }*/

    private function edit(){
        $idParam = $_GET['idPlanta'];
        $planta = $this->plantaRepository->findPlantaById($idParam);
        $data['plantas'][0] = $planta;

        $this->loadView("plantas/formEditPlanta.php", $data);
    }

    private function update(){
        $planta = new PlantaModel();

		$planta->setIdPlanta($_GET["idPlanta"]);
		$planta->setIdEspecie($_POST["idEspecie"]);
		$planta->setIdZona($_POST["idZona"]);
        $planta->setCodNumerico($_POST["codNumerico"]);
        $planta->setNomeSocial($_POST["nomeSocial"]);
        $planta->setHistoria($_POST["historia"]);
        //$planta->setCodQR($_POST["codQR"]);
        
        $atualizou = $this->plantaRepository->update($planta);
        
        if($atualizou){
			$msg = "Registro atualizado com sucesso.";
		}else{
			$msg = "Erro ao atualizar o registro no banco de dados.";
		}

        $this->findAll($msg);        
    }

    private function formIdentificarPlanta(){
        $this->loadView("plantas/formIdentificarPlanta.php");
    }

    private function identificarPlanta(){
        $idParam = $_POST["codNumerico"];
        $planta = $this->plantaRepository->identificarPlanta($idParam);
        $data['plantas'][0] = $planta;

        if ($planta == null){ 
            echo "Está não é uma planta cadastrada";
        }else {
            $this->loadView("plantas/verPlanta.php", $data);
        }
       
        /*$planta = new PlantaModel();

        $planta->setCodNumerico($_POST["codNumerico"]);

        $this->plantaRepository->identificarPlanta($planta);
        
        //$data['plantas'][0] = $planta;
        $this->loadView("plantas/listPlantas.php"/*, $data*/

        /*if($cod){
			$msg = "código existe";
		}else{
			$msg = "código nãp existe";
		}

        $this->findAll($msg);*/
    }

    private function verDetalhesPlanta(){

        
    }

    private function verZona(){
        $idParam = $_GET["idZona"];
        $planta = $this->plantaRepository->verZona($idParam);
        $data['plantas'] = $planta;

        $this->loadView("plantas/listPlantas.php", $data);
        }

    private function verIndividuos(){
        $idParam = $_GET["idEspecie"];
        $planta = $this->plantaRepository->verIndividuos($idParam);
        $data['plantas'] = $planta;
    
        $this->loadView("plantas/listPlantas.php", $data);
        }

    private function preventDefault() {
        print "Ação indefinida...";
    }
}