<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonas</title>

    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/css/listZona.css">
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

<body>
    <div class="container">
    <div class="row justify-content-between">
            <h2 class="titulo">
                Zonas
            </h2>

           <!-- <a class="mais align-self-center" href="../views/zones/definirZona.php">
                <img class="mais " src="../public/mais.svg">
            </a>-->
            <div class="w-100"></div>

            <!--CASO NAO TENHA NENHUMA NO BD MOSTRAR ISSO-->
            <?php if ($data['zonas'] == null) { ?>
                <div class="justify-content-start">
                    <p id="nenhuma">
                        Puts, nenhuma zona por enquanto!
                        <br>
                        <span class="adicione">Adicione no ícone de mais +</span>
                    </p>
                </div>
                <div class="align-self-center">
                    <img class="align-content-end img-flecha" src="../public/flecha.svg">
                </div>
            </div>
            <?php } else { ?>
        </div>

        <div class="row justify-content-evenly flex-wrap">
            <?php foreach ($data['zonas'] as $zona): ?>
                <!--<a href="./ZonaController.php?action=findZonaByIdZona&idZona=<?= $zona['idZona'] ?>">-->
                    <div class="col-auto zona">
                        <div class="row">
                            <div class="col-sm">
                                <h3 class="nome">
                                    Zona <?= $zona['idZona'] ?>
                                </h3>

                                <p>
                                    <?= $zona['pontoZona'] ?> pontos mínimos<br>
                                    <!--<?= $zona['qntPlantas'] ?> quantidade de plantas <br>-->
                                </p>

                                <!--<div class="row justify-content-start">
                                    <!-EDITAR--
                                    <div class="col-auto">
                                        <a class="editar" href="./ZonaController.php?action=edit&idZona=<?= $zona['idZona'] ?>">Editar</a>
                                    </div>

                                    <!-EXCLUIR--
                                    <div class="col-auto">
                                        <a class="excluir" href="./ZonaController.php?action=deleteZonaById&idZona=<?= $zona['idZona'] ?>">Excluir</a>
                                    </div>-->
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach;}?>
        </div>
    </div>

    <br>
    <br>
</body>

</html>