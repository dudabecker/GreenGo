<?php

// Exibe os erros em uma página web (DEVERIA ESTAR AQUI?).
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/UserRepository.php";
require_once __DIR__ . "/Controller.php";

function create(){

    $name         = $_POST['field_name'];
    $genero       = $_POST['field_genero'];
    $escolaridade = $_POST['field_escolaridade'];
    $email        = $_POST['field_email'];
    $password     = $_POST['field_password'];

    $userRepository = new UserRepository();

    $id = $userRepository->create($user);
    print_r($userRepository);
    //findAll();
}

function findAll()
{
    $userRepository = new UserRepository();

    $usuarios = $userRepository->findAll();

    $data['titulo'] = "listar usuarios";
    $data['usuarios'] = $usuarios;

    Controller::loadView("users/list.php", $data);
}

function findUserById()
{
    $idParam = $_GET['id'];
    print_r($idParam);
    $userRepository = new UserRepository();
    $usuario = $userRepository->findUserById($idParam);

    print "<pre>";
    print_r($usuario);
    print "</pre>";

    //Controller::loadView("users/list.php");
}

function deleteUserById()
{
    $idParam = $_GET['id'];
    $userRepository = new UserRepository();    

    $userRepository->deleteById($idParam);

    //Controller::loadView("users/list.php", $data);
}

function preventDefault() {
    print "call preventDefault()";
    //Controller::loadView("users/list.php", $data);
}
