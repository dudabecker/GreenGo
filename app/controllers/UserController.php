<?php

use ControllerUser as GlobalControllerUser;



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
    $user->setNomeUsuario($_POST['field_nome']);
    $user->setEmail($_POST['field_email']);
    $senha = $_POST['field_password'];
      if(strlen($senha)<8){
      //senha inválida
      //mensagem de erro
      $_SESSION['msg_erro'] =  "As senhas devem ter no mínimo oito caracteres!";
          echo $msg="As senhas devem ter no mínimo oito caracteres!";
          header("location: ../views/users/cadastro.php?msg=erroaologar");
      }else {
        $user->setPassword($_POST['field_password']);
      }
    $user->setGenero($_POST['field_genero']);
    $user->setEscolaridade($_POST['field_escolaridade']);
    
    
    //var_dump($user); 
    $userRepository = new UserRepository();
    $userRepository->create($user);
    
    $_SESSION['usuario_logado'] =  $user;
    //echo "Cadastro concluído!!!! Faça login!!";
    $this->loadView("../views/users/loginCadastro.php");
    
}

function Logar() {
    $email = $_POST['field_email'];
    $senha = $_POST['field_password'];

    $userRepository = new UserRepository();

    $user = $userRepository->findUserByEmail($email);

    if($user == false){
        $_SESSION['msg_erro'] =  "usuário não cadastrado";
        header("location: ../views/users/login.php?msg=erroaologar");
        
    } 
    
    $password = $user->getPassword();
    $tipo = $user->getTipoUsuario();
    if($password != md5($senha)){
            $_SESSION['msg_erro'] =  "senha incorreta";
            header("location: ../views/users/login.php?msg=senhaincorreta");

            
    } else {
        //print($_SESSION['user']->getTipoUsuario());
        $_SESSION['usuario_logado'] =  $user;
        
        if($_SESSION['usuario_logado']->getTipoUsuario()==2){ 
        $this->loadView("../views/indexADM.php");
        }elseif($_SESSION['usuario_logado']->getTipoUsuario()==1){
            $this->loadView("../views/indexJOG.php");
        }

    }
}
/*function menu(){
    $idParam = $_GET['id'];
    $userRepository = new UserRepository();

    $user = $userRepository->findUserById($idParam);
    $_SESSION['usuario_logado'] =  $user;
    $tipo = $user->getTipoUsuario();
    echo $tipo;
}*/
function sair()
{
    session_start(); 
    session_destroy(); 
    $this->loadView("../views/index.php");
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
        header("Location: ../views/index.php"); exit;
    }
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
    //header("location: ../views/users/editUser.php", $data, $idParam);
    $this->loadView("../views/users/editar.php", $data, $idParam);
}
 
function update()
{
    $usuario = new UserModel();
    $idParam = $_GET['id'];
    $usuario->setId($_GET['id']);
    $usuario->setNomeUsuario($_POST["field_nome"]);
    $usuario->setEmail($_POST["field_email"]);
    //$usuario->setPassword($_POST["field_password"]);
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
    $_SESSION['usuario_logado'] =  $usuario;
    //GlobalControllerUser::findUserById($idParam);  
    $this->loadView("../views/users/perfil.php", $data, $idParam);      
}

function genero(){

    $idParam = $_GET['id'];
    $userRepository = new UserRepository();    
    
    $userRepository->genero($idParam);
    
}

function adm(){

    //$usuario = new UserModel();
    
    //$usuario->setTipoUsuario($_GET['id']);
    $idParam = $_GET['id'];
    $userRepository = new UserRepository();

    $user = $userRepository->adm($idParam);
    //$tipo = $user->getTipoUsuario();
    $usuarios = $userRepository->findAll();
    //$data['titulo'] = "listar usuarios";
    $data['usuarios'] = $usuarios;
    $this->loadView("users/list.php", $data);
    
  

}

function preventdefault()
{
   header("Location: ../views/erro.php");
}

}