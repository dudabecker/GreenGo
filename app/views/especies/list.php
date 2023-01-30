<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espécies</title>

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

                        <a class="nav-item nav-link" id="itemmenu" href="../views/projeto.html"> Projeto </a>
                        <a class="nav-item nav-link" id="itemmenu" href="../views/mapa.php"> Mapa</a>
                        <a class="nav-item nav-link" id="itemmenu"
                            href="../Controllers/PlantaController.php?action=formIdentificarPlanta"> Jogar </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="../views/perfil.php"> Eu </a>
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
                Espécies
            </h2>

            <a class="mais align-self-center" href="./EspecieController.php?action=loadFormNew">
                <img class="mais " src="../public/mais.svg">
            </a>
            <div class="w-100"></div>

            <!--CASO NAO TENHA NENHUMA NO BD MOSTRAR ISSO-->
            <?php if ($data['especies'] == null) { ?>
                <div class="justify-content-start">
                    <p id="nenhuma">
                        Puts, nenhuma espécie por enquanto!
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

        <div class="row justify-content-evenly align-content-start">
        <?php foreach ($data['especies'] as $especie): ?>
            <a href="./EspecieController.php?action=verEspecie&idEspecie=<?= $especie['idEspecie'] ?>">

                <div class="col-auto especie">
                    <div class="row justify-content-between">
                        <div class="col-auto pad">
                            <h3 class="nome-pop">
                                <?= $especie['nomePop'] ?>
                            </h3>

                            <h3 class="nome-cient">
                                <?= $especie['nomeCie'] ?>
                            </h3>

                            <p>
                                ID
                                <?= $especie['idEspecie'] ?><br>

                                <?= $especie['pontoEsp'] ?> pontos<br>
                            </p>

                            <div class="row col-sm-6 align-content-start atributos">
                                <div class="col-auto atributo">
                                    <a href="./EspecieController.php?action=verFrutifera">

                                        <?php if ($especie['frutifera'] == 1):
                                            echo "Frutifera";
                                        endif ?>

                                    </a>
                                </div>
                                <div class="col-auto  atributo">
                                    <a href="./EspecieController.php?action=verToxidade">

                                        <?php if ($especie['toxidade'] == 1):
                                            echo "Tóxica";
                                        endif ?>

                                    </a>
                                </div>
                                <div class="col-auto  atributo">
                                    <a href="./EspecieController.php?action=verComestivel">

                                        <?php if ($especie['comestivel'] == 1):
                                            echo "Comestível";
                                        endif ?>

                                    </a>
                                </div>
                                <div class="col-auto  atributo">
                                    <a href="./EspecieController.php?action=verExotica">

                                        <?php if ($especie['exotica'] == 1):
                                            echo "Exótica";
                                        endif ?>

                                    </a>
                                </div>
                                <div class="col-auto  atributo">
                                    <a href="./EspecieController.php?action=verRaridade">

                                        <?php if ($especie['raridade'] == 1):
                                            echo "Rara";
                                        endif ?>

                                    </a>
                                </div>
                                <div class="col-auto  atributo">
                                    <a href="./EspecieController.php?action=verMedicinal">

                                        <?php if ($especie['medicinal'] == 1):
                                            echo "Medicinal";
                                        endif ?>

                                    </a>
                                </div>
                            </div>


                            <div class="row justify-content-start" style="display: -webkit-box;">
                                <!--EDITAR-->
                                <div class="col-auto">
                                    <a class="editar"
                                        href="./EspecieController.php?action=edit&idEspecie=<?= $especie['idEspecie'] ?>">Editar</a>
                                </div>

                                <!--EXCLUIR-->
                                <div class="col-auto">
                                    <a class="excluir"
                                        href="./EspecieController.php?action=deleteEspecieById&idEspecie=<?= $especie['idEspecie'] ?>">Excluir</a>
                                </div>
                            </div>
                        </div>

                        <!--CHAMAR O ATRIBUTO DA IMAGEM, QUANDO ESTIVER PRONTA. CASO NAO ESTEJA, EXCLUIR O STYLE-->
                        <div class="col-auto align-content-center align-items-center pad img-especie"
                            style="background-image:url(<?=$especie['imagem']?>);">
                            
                            <!--<img src="<?=$especie['imagem']?>">-->
                        </div>

                    </div>
                </div>
            </a>
        <?php endforeach;
            } ?>
    </div>
    </div>
    </div>

    <br>
    <br>
</body>

</html>