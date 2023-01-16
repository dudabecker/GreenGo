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
    <link rel="stylesheet" href="../views/css/listEspecie.css">
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
                <a href="index.html" class="nav-brand">
                    <div class="row justify-content-md-left">
                        <div id="imgmenu">
                            <img class="img-responsive" src="../public/icone 3.svg" alt="">
                        </div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav" id="navbar-links">

                        <a class="nav-item nav-link" id="portfolio-menu" href="../projeto.html"> Projeto </a>
                        <a class="nav-item nav-link" id="registro-menu"> Mapa</a>
                        <a class="nav-item nav-link" id="identificar-menu"> Jogar </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="perfil.php"> Eu </a>
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

            <!--LINK PARA CADASTRO NAO EH IGUAL AO DA LIST ESPECIE-->
            <a class="mais align-self-center" href="../views/zones/definirZona.php">
                <img class="mais" src="../public/mais.svg">
            </a>
        </div>

        <div class="row justify-content-evenly  flex-wrap">
            <?php foreach ($data['zonas'] as $zona): ?>
                <a href="./ZonaController.php?action=verZona&idZona=<?= $zona['idZona'] ?>">
                    <div class="col-auto especie">
                        <div class="row">
                            <div class="col-sm">
                                <h3 class="nome-cient">
                                    <?= $zona['nomeZona'] ?>
                                </h3>

                                <p>
                                    <?= $zona['pontoZona'] ?> pontos mínimos<br>
                                    <?= $zona['qntPlantas'] ?> quantidade de plantas <br>
                                </p>

                                <div class="row justify-content-start">
                                    <!--EDITAR-->
                                    <div class="col">
                                        <a class="editar" href="./ZonaController.php?action=edit&idZona=<?= $zona['idZona'] ?>">Editar</a>
                                    </div>

                                    <!--EXCLUIR-->
                                    <div class="col">
                                        <a class="excluir" href="./ZonaController.php?action=deleteZonaById&idZona=<?= $zona['idZona'] ?>">Excluir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <br>
    <br>
</body>

</html>