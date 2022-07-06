<?php

    // Vale ouro
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require __DIR__ . "/../connection/Connection.php";


    function findAllDataTest() {
        $conn = new Connection();

        $pdo = $conn->getConnection();
    
        $tabelaUsers = $pdo->query("SELECT * FROM myusers");
        $usuarios = $tabelaUsers->fetchAll(PDO::FETCH_ASSOC);
        $tabelaZones = $pdo->query("SELECT * FROM zonas");
        $zonas = $tabelaZones->fetchAll(PDO::FETCH_ASSOC);
    
        print "<pre>";
        print_r($zonas);
        print_r($usuarios);
        print "</pre>";
    }

    findAllDataTest();
