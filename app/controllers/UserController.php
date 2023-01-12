<?php

use ControllerUser as GlobalControllerUser;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/UserRepository.php";
require_once __DIR__ . "/../models/UserModel.php";
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
    $user->setNomeUsuario($_POST["name"]);
    $user->setEmail($_POST['field_email']);
    $user->setPassword($_POST['field_password']);
    /*if(filter_var($email,FILTER_VALIDATE_EMAIL)){ //verifica se a senha tem no minimo 8 ou mais caracteres
      if(strlen($senha)<8){
      //senha inválida
      //mensagem de erro
          $msg="As senhas devem ter no mínimo oito caracteres!";
      }
      //senha válida
      if($senha == $csenha){
          //executar a classe de cadastro
              $connectar = new Cadastro;
              echo "<div class=\"flash\">";
              $connectar = $connectar->cadastrar($nome,$usuario,$idade,$endereco,$email,$senha);
              echo "</div>";
          
      }*/
    $user->setGenero($_POST['field_genero']);
    $user->setEscolaridade($_POST['field_escolaridade']);
    
    
    var_dump($user); 
    $this->loadView("../views/termos.html");
    //$checkbox = isset($_POST['conc_termos[]']) ? "checked" : "unchecked";
    
    if(isset($_POST['conc_termos']))
    $userRepository = new UserRepository();
    $userRepository->create($user);
    GlobalControllerUser::loadView("../views/index.html");
    
}

function Logar() {
    $email = $_POST['field_email'];
    $senha = $_POST['field_password'];

    $userRepository = new UserRepository();

    $user = $userRepository->findUserByEmail($email);

    var_dump($user);
    $password = $user->getPassword();
    if($user == false){
        $_SESSION['msg_erro'] =  "usuário não cadastrado";
        header("location: ../views/login.php?msg=erroaologar");
        
    } else if($password != md5($senha)){
            $_SESSION['msg_erro'] =  "senha incorreta";
            header("location: ../views/login.php?msg=senhaincorreta");

            
    } else {
        
        //$idParam = $_GET['id'];
        $this->adm();
        $_SESSION['usuario_logado'] =  true;
        header("location: ../views/index.html");
        //$this->loadView("../views/users/perfil.php", );
        //GlobalControllerUser::loadView("../controllers/UserController?action=adm");

    }


}

function sair()
{
    session_start(); 
    session_destroy(); 
    //header("Location: index.php");
    exit;
}

function verificaLogado()
{
    if (!isset($_SESSION)) session_start();

    // Verifica se não há a variável da sessão que identifica o usuário
    if (!isset($_SESSION['id'])) {
        // Destrói a sessão por segurança
        session_destroy();
        // Redireciona o visitante de volta pro login
        header("Location: index.php"); exit;
    }
}



function preventDefault()
{
   // print "call preventDefault() no LoginController";
    //Controller::loadView("users/preventDefault.php", $data);
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
    $idParam = $_GET["id"];
    $usuario = $this->UserRepository->findUserById($idParam);
    //print_r($idParam);
    //$userRepository = new UserRepository();
    //$usuario = $userRepository->findUserById($idParam);
    print "<pre>";
    print_r($usuario);
    print "</pre>";
    //$data['usuario'][0] = $usuario;
    //$this->loadView("users/perfil.php");
    //$this->loadView("../views/users/perfil.php", $data, $idParam);

    /*$idParam = $_GET["idEspecie"];

        $especie = $this->especieRepository->findEspecieById($idParam);

        print "<pre>";
        print_r($especie);
        print "</pre>";*/ 


}

function findUserByEmail(){
    $idParam = $_GET['id'];
    //print_r($idParam);
    $userRepository = new UserRepository();
    $usuario = $userRepository->findUserByEmail($idParam);
    //print "<pre>";
    //print_r($usuario);
    //print "</pre>";
    $data['usuario'][0] = $usuario;
    //$this->loadView("users/perfil.php");
    ///$this->loadView("../views/users/perfil.php", $data, $idParam);


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
    $data['usuario'][0] = $usuario;

    GlobalControllerUser::loadView("../views/users/editUser.php", $data, $idParam);
}
 
function update()
{
    $usuario = new UserModel();
    $idParam = $_GET['id'];
    $usuario->setId($_GET['id']);
    $usuario->setNomeUsuario($_POST["field_nome"]);
    $usuario->setEmail($_POST["field_email"]);
    $usuario->setPassword($_POST["field_password"]);
    $usuario->setGenero($_POST["field_genero"]);
    $usuario->setEscolaridade($_POST["field_escolaridade"]);

    $userRepository = new UserRepository();
    //print_r($usuario);
    $atualizouUser = $userRepository->update($usuario);
    
    if($atualizouUser){
        $msg = "Registro atualizado com sucesso.";
        print_r($msg) ;
    }else{
        $msg = "Erro ao atualizar o registro no banco de dados.";
        print_r($msg) ;
    }
    $data['usuario'][0] = $usuario;
    //GlobalControllerUser::findUserById($idParam);  
    $this->loadView("../views/users/perfil.php", $data, $idParam);      
}

function genero(){

    $idParam = $_GET['id'];
    $userRepository = new UserRepository();    
    
    $userRepository->genero($idParam);

}

private function verPerfil(){
    $userRepository = new UserRepository();
    $idParam = $_GET["id"];
    $usuario = $this->$userRepository->findUserById($idParam);
    $data['usuario'][0] = $usuario;

    $this->loadView("users/perfil.php", $data);
}

function adm(){


  //$nivel_necessario = 1;

  
  $idParam = $_GET['tipoUsuario'];
  $userRepository = new UserRepository();
  if (!isset($_SESSION)) session_start();
  
  $ut = ($_SESSION['tipoUsuario']);
  $userRepository->adm($idParam);
  // Verifica se não há a variável da sessão que identifica o usuário
  var_dump($ut);
  if ($ut == 1) {
      
    GlobalControllerUser::loadView("../views/cabecalhoJogador.php");
      
      //header("Location: index.php");
      //GlobalControllerUser::loadView("../views/index.html");
  } if ($ut == 2) {
    # code...
    GlobalControllerUser::loadView("../views/cabecalhoAdm.php");
    //GlobalControllerUser::loadView("../views/index.html");
  } else{
    GlobalControllerUser::loadView("../views/cabecalhoVisitante.php");
    //GlobalControllerUser::loadView("../views/index.html");
  }
  

}
}
