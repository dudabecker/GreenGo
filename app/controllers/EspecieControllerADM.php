<?php



require_once __DIR__ . "/../repository/EspecieRepository.php";
extract($_FILES);
//require_once __DIR__ . "/Controller.php";

$ccliente = new ControllerEspecie();

class ControllerEspecie{

    public $especieRepository;
	function __construct(){
        $this->especieRepository = new EspecieRepository();
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

    private function create(){
        $especie = new EspecieModel();
        $imagem = $_FILES['imagem'];

        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
        $nome_imagem = md5(uniqid(time())).".".$ext[1];
        echo $nome_imagem;
        $estensao = $ext[1];
        echo $estensao;
        $caminho_imagem = "../public/" . $nome_imagem;
        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

		$especie->setNomePop($_POST["nomePop"]);
		$especie->setNomeCie($_POST["nomeCie"]);
        $especie->setDescricao($_POST["descricao"]);
        $especie->setPontoEsp($_POST["pontoEsp"]);
        $especie->setImagem($caminho_imagem);
        
        
        if(isset($_POST["frutifera"])){
            $especie->setFrutifera(1);
        } else{ 
            $especie->setFrutifera(0);
        }
        
        if(isset($_POST["toxidade"])){
            $especie->setToxidade(1);
        } else{ 
            $especie->setToxidade(0);
        }

        if(isset($_POST["exotica"])){
            $especie->setExotica(1);
        } else{ 
            $especie->setExotica(0);
        }
    
        if(isset($_POST["raridade"])){
            $especie->setRaridade(1);
        } else{ 
            $especie->setRaridade(0);
        }
    
        if(isset($_POST["medicinal"])){
            $especie->setMedicinal(1);
        } else{ 
            $especie->setMedicinal(0);
        }

        if(isset($_POST["comestivel"])){
            $especie->setComestivel(1);
        } else{ 
            $especie->setComestivel(0);
        }

        $id = $this->especieRepository->create($especie);

        if($id){
			$msg = "Registro inserido com sucesso.";
		}else{
			$msg = "Erro ao inserir o registro no banco de dados.";
		}

        $this->findAll($msg);
    }

    private function loadFormNew(){
        $this->loadView("especies/registroEspecie.php", null,"teste");
    }    

    private function findAll(string $msg = null){

        $especies = $this->especieRepository->findAll();

        $data['titulo'] = "listar especies";
        $data['especies'] = $especies;

        $this->loadView("especies/listADM.php", $data, $msg);
    }


    private function findEspecieById(){
        $idParam = $_GET["idEspecie"];

        $especie = $this->especieRepository->findEspecieById($idParam);

        print "<pre>";
        print_r($especie);
        print "</pre>";
    }

    private function deleteEspecieById(){
        $idParam = $_GET["idEspecie"];
        $qt = $this->especieRepository->deleteEspecieById($idParam);
        if($qt){
			$msg = "Registro excluído com sucesso.";
		}else{
			$msg = "Erro ao excluir o registro no banco de dados.";
		}
        $this->findAll($msg);
    }

    private function edit(){
        $idParam = $_GET['idEspecie'];
        $especie = $this->especieRepository->findEspecieById($idParam);
        $data['especies'][0] = $especie;

        $this->loadView("especies/formEditaEspecie.php", $data);
    }

    private function update(){
        $especie = new EspecieModel();


		$especie->setIdEspecie($_GET["idEspecie"]);

        /*$imagem = $_FILES['imagem'];

        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
        $nome_imagem = md5(uniqid(time())).".".$ext[1];
        echo $nome_imagem;
        $estensao = $ext[1];
        echo $estensao;
        $caminho_imagem = "../public/" . $nome_imagem;
        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);*/
        
		$especie->setNomePop($_POST["nomePop"]);
		$especie->setNomeCie($_POST["nomeCie"]);
        $especie->setDescricao($_POST["descricao"]);
        //$especie->setImagem($caminho_imagem);
        $especie->setPontoEsp($_POST["pontoEsp"]);
		
        if(isset($_POST["frutifera"])){
            $especie->setFrutifera(1);
        } else{ 
            $especie->setFrutifera(0);
        }
		
        if(isset($_POST["toxidade"])){
            $especie->setToxidade(1);
        } else{ 
            $especie->setToxidade(0);
        }

        if(isset($_POST["exotica"])){
            $especie->setExotica(1);
        } else{ 
            $especie->setExotica(0);
        }
    
        if(isset($_POST["raridade"])){
            $especie->setRaridade(1);
        } else{ 
            $especie->setRaridade(0);
        }
    
        if(isset($_POST["medicinal"])){
            $especie->setMedicinal(1);
        } else{ 
            $especie->setMedicinal(0);
        }

        if(isset($_POST["comestivel"])){
            $especie->setComestivel(1);
        } else{ 
            $especie->setComestivel(0);
        }

        //print_r($especie);
        $atualizou = $this->especieRepository->update($especie);
        
        if($atualizou){
			$msg = "Registro atualizado com sucesso.";
		}else{
			$msg = "Erro ao atualizar o registro no banco de dados.";
		}
		// include_once "cadastrar.php";

        $this->findAll($msg);        
    }

    private function verEspecie(){
        $idParam = $_GET["idEspecie"];
        $especie = $this->especieRepository->findEspecieById($idParam);
        $data['especies'][0] = $especie;

        $this->loadView("especies/verEspecieADM.php", $data);
    }

    private function verFrutifera(){
        $especie = $this->especieRepository->verFrutifera();
        $data['especies'] = $especie;
        $this->loadView("mapaADM.php", $data);
    }

    private function verToxidade(){
        $especie = $this->especieRepository->verToxidade();
        $data['especies'] = $especie;
        $this->loadView("mapaADM.php", $data);
    }

    private function verComestivel(){
        $especie = $this->especieRepository->verComestivel();
        $data['especies'] = $especie;
        $this->loadView("mapaADM.php", $data);
    }

    private function verExotica(){
        $especie = $this->especieRepository->verExotica();
        $data['especies'] = $especie;
        $this->loadView("mapaADM.php", $data);
    }

    private function verRaridade(){
        $especie = $this->especieRepository->verRaridade();
        $data['especies'] = $especie;
        $this->loadView("mapaADM.php", $data);
    }

    private function verMedicinal(){
        $especie = $this->especieRepository->verMedicinal();
        $data['especies'] = $especie;
        $this->loadView("mapaADM.php", $data);
    }

    private function EspeciesMapa(string $msg = null){

        $especies = $this->especieRepository->EspeciesMapa();

        $data['titulo'] = "listar especies";
        $data['especies'] = $especies;

        $this->loadView("mapaADM.php", $data, $msg);
    }

    private function preventDefault() {
        print "Ação indefinida...";
    }
}