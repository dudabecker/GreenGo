<!DOCTYPE html>
<html lang="en">
<?php foreach ($data['especies'] as $especie): ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $especie->getNomePop(); ?>
        </title>

        <!--FAVICON-->
        <link rel="icon" href="../public/favicon.svg">
        <!-- Fonte -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../views/css/especie.css">
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
                    <a href="../views/index.html" class="nav-brand">
                        <div class="row justify-content-md-left">
                            <div id="imgmenu">
                                <img class="img-responsive" src="../public/logo-green.svg" alt="">
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

            <div class="titulo">
                <div class="row justify-content-between">
                    <h2 class="popular">
                        <?= $especie->getNomePop(); ?>
                    </h2>

                    <span class="pontos align-self-center" href="./EspecieController.php?action=loadFormNew">
                        <?= $especie->getPontoEsp(); ?> pontos
                    </span>
                </div>

                <div class="row justify-content-between">
                    <h3 class="cientifico">
                        <?= $especie->getNomeCie(); ?>
                    </h3>
                </div>
            </div>

            <div class="row justify-content-start">
                <div class="col-auto align-content-center">
                    <img class="img-especie"><!-- < ?=$especie->getImagem() ?> -->
                </div>

                <div class="col-lg">


                    <div class="row col flex-wrap">

                        <div class="atributos">
                            <a href="./EspecieController.php?action=verFrutifera">
                                <?php if ($especie->getFrutifera() == 1):
                                    echo "Frutifera";
                                endif ?>
                            </a>
                        </div>

                        <div class="atributos">
                            <a href="./EspecieController.php?action=verToxidade">
                                <?php if ($especie->getToxidade() == 1):
                                    echo "Tóxica";
                                endif ?>
                            </a>
                        </div>

                        <div class="atributos">
                            <a href="./EspecieController.php?action=verComestivel">
                                <?php if ($especie->getComestivel() == 1):
                                    echo "Comestível";
                                endif ?>
                            </a>
                        </div>

                        <div class="atributos">
                            <a href="./EspecieController.php?action=verExotica">
                                <?php if ($especie->getExotica() == 1):
                                    echo "Exótica";
                                endif ?>
                            </a>
                        </div>

                        <div class="atributos">
                            <a href="./EspecieController.php?action=verRaridade">
                                <?php if ($especie->getRaridade() == 1):
                                    echo "Rara";
                                endif ?>
                            </a>
                        </div>

                        <div class="atributos">
                            <a href="./EspecieController.php?action=verMedicinal">
                                <?php if ($especie->getMedicinal() == 1):
                                    echo "Medicinal";
                                endif ?>
                            </a>
                        </div>
                    </div>

                    <div class="row col">
                        <p class="descricao">
                            <?= $especie->getDescricao(); ?>
                        </p>
                    </div>
                </div>
            </div>
            <br>

            <!-- ESSA PARTE É SÓ PRA ADM -->
            <div class="row justify-content-start botoes">
                <!--EDITAR-->
                <div class="col-sm-3 min-content">
                    <a class="editar" href=",">Editar</a>
                </div>

                <!--EXCLUIR-->
                <div class="col-sm-3 min-content">
                    <a class="excluir" href=".">Excluir</a>
                </div>

                <!--A PARTIR DAQUI, QUANDO CLICADO PARA VER DETALHES (VALE PARA TODOS OS USUARIOS!!)-->
                <div class="col-sm-3 min-content">
                    <a class="vermais"
                        href="./plantaController.php?action=verIndividuos&idEspecie=<?= $especie->getIdEspecie() ?>">Ver
                        mais</a>
                </div>
            </div>
            <br><br>
        </div>
    </body>
<?php endforeach; ?>

</html>