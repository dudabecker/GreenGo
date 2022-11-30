<?php

use ControllerUser as GlobalControllerUser;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/UserRepository.php";
//require_once __DIR__ . "/Controller.php";

$userc = new ControllerUser();

class ControllerUser{

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
    $user = new UserModel();

	$user->setUsername($_POST["field_nome"]);
    $user->setEmail($_POST["field_email"]);
    $user->setPassword($_POST["field_password"]);
	$user->setGenero($_POST["field_genero"]);
    $user->setEscolaridade($_POST["field_escolaridade"]);
   

    $userRepository = new UserRepository();

    $id = $userRepository->create($user);
    print_r($userRepository);
    $this->findAll();
}

function findAll()
{
    $userRepository = new UserRepository();

    $usuarios = $userRepository->findAll();

    $data['titulo'] = "listar usuarios";
    $data['usuarios'] = $usuarios;

    $this->loadView("users/list.php", $data);
}

function findUserById()
{
    $idParam = $_GET['id'];
    //print_r($idParam);
    $userRepository = new UserRepository();
    $usuario = $userRepository->findUserById($idParam);
    //print "<pre>";
    //print_r($usuario);
    //print "</pre>";
    $data['usuario'][0] = $usuario;
    //$this->loadView("users/perfil.php");
    $this->loadView("../views/users/perfil.php", $data, $idParam);


}

function deleteUserById()
{
    $idParam = $_GET['id'];
    $userRepository = new UserRepository();    

    $userRepository->deleteById($idParam);

    //Controller::loadView("users/list.php", $data);
}

function edit(){
    $idParam = $_GET['id'];
    $userRepository = new UserRepository(); 
    $usuario = $userRepository->findUserById($idParam);
    $data['usuarios'][0] = $usuario;

    GlobalControllerUser::loadView("../views/users/editUser.php", $data);
}
 
function update()
{
    $usuario = new UserModel();

    $usuario->setId($_GET["id"]);
    $usuario->setUsername($_POST["field_nome"]);
    $usuario->setEmail($_POST["field_email"]);
    $usuario->setPassword($_POST["field_password"]);
    $usuario->setGenero($_POST["field_genero"]);
    $usuario->setEscolaridade($_POST["field_escolaridade"]);

    $userRepository = new userRepository();
    //print_r($usuario);
    $atualizouUser = $userRepository->update($usuario);
    
    if($atualizouUser){
        $msg = "Registro atualizado com sucesso.";
    }else{
        $msg = "Erro ao atualizar o registro no banco de dados.";
    }
    // include_once "cadastrar.php";

    GlobalControllerUser::findAll();        
}
function preventDefault() {
    print "call preventDefault()";
    //Controller::loadView("users/list.php", $data);
}
}
