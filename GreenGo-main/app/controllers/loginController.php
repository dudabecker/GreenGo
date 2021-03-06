<?php

// Exibe os erros em uma página web (DEVERIA ESTAR AQUI?).
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/UserRepository.php";
require_once __DIR__ . "/Controller.php";

function logar()
{
    $email    = $_POST['field_email'];
    $password = $_POST['field_password'];

    $userRepository = new UserRepository();

    $user = $userRepository->findUserByEmail($email);


    if( $user == false){
        $_SESSION['msg_erro'] =  "usuário não cadastrado";
        header("location: ../views/login.php?msg=outramensagem");
        
    } else if($user->getPassword() != $password){
            $_SESSION['msg_erro'] =  "senha incorreta";
            header("location: ../views/login.php");
            
    } else {
        
        $_SESSION['usuario_logado'] =  true;
        header("location: ./userController.php?action=findAll"); //.. sai da pasta e ./ é a partir daqui
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
