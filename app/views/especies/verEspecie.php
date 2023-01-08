<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espécie</title>

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
    <?php foreach ($data['especies'] as $especie): ?>

        <div class="container">

            <div class="titulo">
                <div class="row justify-content-between">
                    <h2 class="popular">
                        <?= $especie->getNomePop(); ?>
                    </h2>

                    <span class="pontos align-self-center" href="./EspecieController.php?action=loadFormNew">
                        < ?=$especie->getPontoEsp(); ?>
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
                    <img class="img-especie" src="../public/especie.svg"><!-- < ?=$especie->getImagem() ?> -->
                </div>

                <div class="col-6">

                    <!-- SOBRE AS TAGS

                        fazer um if atributo==1{
                            aparece
                        }else{
                            pula
                        }

                        se quiser fazer ser uma tag clicavel, direcionando pra pagina do mapa com o 
                        filtro do atributo especifico aplicado para aparecer outros com o mesmo atributo,
                        fique a vontade!!
                    -->
                    <div class="row col flex-wrap">
                        <div class="atributos">
                            frut[ifera
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

            <!--BOTAO NO MODO JOGO E SOMENTE QUANDO ESTIVER NO JOGO-->
            <div class="col">
                <div class="row">
                    <a class="btn-primario" href='CONTINUAR'> Continuar </a>
                </div>

                <div class="row">
                    <p class="pontuacao"> Sua pontuação atual é de <!--GET PONTUACAO--> xxxx pontos</p>
                </div>
            </div>

            <!--A PARTIR DAQUI, QUANDO CLICADO PARA VER DETALHES (VALE PARA TODOS OS USUARIOS!!)-->

            INDIIDUOS

            <!-- ESSA PARTE É SÓ PRA ADM -->
            <div class="row justify-content-start align-middle">
                <!--EDITAR-->
                <div class="col-sm-3">
                    <a class="btn-primario" href=",">Editar</a>
                </div>

                <!--EXCLUIR-->
                <div class="col-sm-3">
                    <a class="excluir" href=".">Excluir</a>
                </div>
            </div>
            <br><br>

            Atributos Especiais:
            Frutifera: <?= $especie->getFrutifera(); ?>
            <br>
            Tóxica: <?= $especie->getToxidade(); ?>
            <br>
            Exótica: <?= $especie->getExotica(); ?>
            <br>
            Rara: <?= $especie->getRaridade(); ?>
            <br>
            Medicinal: <?= $especie->getMedicinal(); ?>
            <br>
            Comestível: < ?=$especie->getComestivel(); ?>
        </div>
    <?php endforeach; ?>
</body>

</html>