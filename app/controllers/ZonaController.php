<?php

// Exibe os erros em uma página web (DEVERIA ESTAR AQUI?).
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/ZonaRepository.php";
require_once __DIR__ . "/Controller.php";

function create(){

    $zona = new ZonaModel();
    $zona->setQntPlantas("50");
    

    $zonaRepository = new ZonaRepository();
    $idZona = $zonaRepository->create($zona);
    
    findZonas();
}

function findZonas()
{
    $zonaRepository = new ZonaRepository();

    $zonas = $zonaRepository->findZonas();

    $data['titulo'] = "listar zonas";
    $data['zonas'] = $zonas;

    Controller::loadView("../views/zones/listZona.php", $data);
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
