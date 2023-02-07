<?php 
    //print_r($tipo);
    if (!isset($_SESSION)) {
        include("../views/cabecalhoVisitante.php");
    }
    //include($_SESSION['usuario_logado'] =  $user);
    if ($_SESSION['usuario_logado']->getTipoUsuario() == "usuario"){
        include("../views/cabecalhoJogador.php");
        
    }  else if ($_SESSION['usuario_logado']->getTipoUsuario() == "adm"){
        include("../views/cabecalhoAdm.php");
    
    }
        
?>