<?php session_start(); ?>
<?php if (isset($_SESSION['msg_erro'])): ?>
    <span>
        <?= $_SESSION['msg_erro'] ?>
    </span>
<?php endif ?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//include_once __DIR__ . "/../helpers/mensagem.php";
//$caminho = __DIR__ . "/../helpers/mensagem.php";
//print_r($caminho); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>

    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/css/mapa.css">
    <link rel="stylesheet" href="../views/css/cabecalho.css">

    <!--scripts-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <!-- Progress bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</head>


<nav>
    <div class="col-xs-12" id="nav-container">

    <div id="itensmenu">

            <nav class="navbar navbar-expand-lg " id="menu">
                <a href="../views/indexADM.php" class="nav-brand">
                    <div class="row justify-content-md-left">
                        <div id="imgmenu">
                            <img class="img-responsive"  id="logo" >
                        </div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> <img src="../public/menu.svg" id="menuicon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav" id="navbar-links">
                        <a class="nav-item nav-link" id="projeto-menu" href="../views/projetoADM.php"> Projeto </a>
                        <a class="nav-item nav-link" id="mapa-menu" href="..\controllers\EspecieControllerADM.php?action=EspeciesMapa"> Mapa</a>
                        <a class="nav-item nav-link" id="itemmenu" href="./PlantaControllerADM.php?action=findAll"> Plantas </a>
                        <a class="nav-item nav-link" id="zonas-menu" href="./ZonaController.php?action=findZonas"> Zonas </a>
                        <a class="nav-item nav-link" id="especies-menu" href="./EspecieControllerADM.php?action=findAll"> Espécies </a>
                        <a class="nav-item nav-link" id="usuarios-menu" href="./UserController.php?action=findAll"> Usuários </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="../controllers/UserController.php?action=sair"> Sair  </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>

<body id="fundoindex">
    <main>
        <div class="container">
            <div class="row justify-content-md-center">
                <div id="about-area">

                    <div class="row">
                        <div class="col" id="textoindex">

                            <div class="img-responsive">
                                <a href="..\controllers\EspecieController.php?action=EspeciesMapa"><img src="../public/mapa.svg" class="img-fluid" alt="mapa ifpr"
                                        id="mapa-da-home">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CASO O FILTRO ESTEJA APLICADO, PODE ADICIONAR O checked NO CLASS DO BOTAO -->
            <div class="row">
                <div class="col" id="botoesmapa">
                    <a class="btn btn-primary" id="todosbotao"
                        href="..\controllers\EspecieControllerADM.php?action=EspeciesMapa">
                        Todos
                    </a>

                    <a class="btn btn-primary" id="botaozona"
                        href="..\controllers\PlantaControllerADM.php?action=verZona&idZona=1">
                        Zona 1
                    </a>

                    <a class="btn btn-primary" id="botaozona"
                        href="..\controllers\PlantaControllerADM.php?action=verZona&idZona=2">
                        Zona 2
                    </a>

                    <a class="btn btn-primary" id="botaozona"
                        href="..\controllers\PlantaControllerADM.php?action=verZona&idZona=3">
                        Zona 3
                    </a>

                    <a class="btn btn-primary" id="botaozona"
                        href="..\controllers\PlantaControllerADM.php?action=verZona&idZona=4">
                        Zona 4
                    </a>

                    <a class="btn btn-primary" id="botaozona"
                        href="..\controllers\PlantaControllerADM.php?action=verZona&idZona=5">
                        Zona 5
                    </a>

                    <a class="btn btn-primary" id="botaozona" 
                        href="..\controllers\PlantaControllerADM.php?action=verZona&idZona=6">
                        Zona 6
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col" id="linhasecundaria">
                    <a class="btn btn-primary" id="botoesfileira2" 
                        href="..\controllers\EspecieControllerADM.php?action=verFrutifera">
                        Frutiferas
                    </a>

                    <a class="btn btn-primary" id="botoesfileira2"
                        href="..\controllers\EspecieControllerADM.php?action=verExotica">
                        Exóticas
                    </a>

                    <a class="btn btn-primary" id="botoesfileira2"
                        href="..\controllers\EspecieControllerADM.php?action=verMedicinal">
                        Medicinais
                    </a>

                    <a class="btn btn-primary" id="botoesfileira2"
                        href="..\controllers\EspecieControllerADM.php?action=verToxidade">
                        Tóxicas</a>

                    <a class="btn btn-primary" id="botoesfileira2"
                        href="..\controllers\EspecieControllerADM.php?action=verRaridade">
                        Raras
                    </a>

                    <a class="btn btn-primary" id="botoesfileira2"
                        href="..\controllers\EspecieControllerADM.php?action=verComestivel">
                        Comestíveis
                    </a>

                    <div class="w-100"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col">
                <div class="row">

                    <!--PHP FOREACH AQUI-->
                    <?php foreach ($data['plantas'] as $planta): ?>
                    <a href="./PlantaControllerADM.php?action=verPlanta&idPlanta=<?= $planta['idPlanta'] ?>">
                    <div class="quadrado">
                        <div class="ind align-items-center justify-content-center">
                        <?= $planta['nomeSocial'] ?>
                        </div>

                        <div class="cod align-items-center justify-content-center">
                        <?= $planta['codNumerico'] ?>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>
            </div>
        </div>
        <br><br>

    </main>
</body>
</hmtl>