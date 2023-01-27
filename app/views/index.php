<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Go</title>
    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
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
<nav id="indexinteiro">
    <div class="col-xs-12" id="nav-container">
        <div id="itensmenu">
            <nav class="navbar navbar-expand-lg ">
                <a href="index.html" class="nav-brand">
                    <img class="img-responsive" src="../public/logo-green.svg" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="itemmenu" href="projeto.html"> Projeto </a>
                        <a class="nav-item nav-link" id="itemmenu" href="mapa.php"> Mapa</a>
                        <a class="nav-item nav-link" id="itemmenu" href="../Controllers/PlantaController.php?action=formIdentificarPlanta"> Jogar </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="users/login.php"> Entrar </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>
<body>
    <div class="container">
        <div class="row justify-content-md-left">
            <div id="about-area">
                <div class="row">
                    <div class="col" id="textoindex">
                        <h1><br><br>Aprenda <br> com trilhas <br> ecológicas! </h1>
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-secondary jogar" href=".">JOGAR</a>
                                <!--SÓ HÁ UM MODO DE JOGO POR HORA
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true">
                                        JOGAR
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="modosolo">Modo solo</a>
                                        <a class="dropdown-item" href="emequipe">Em equipe</a>
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                    <div class="img-responsive">
                        <a href="mapa.php"><img src="../public/mapa 1.svg" class="img-fluid" alt="logo-index"
                                id="mapa-da-home"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col quadrado">
                <img src="../public/projeto.svg" alt="" id="imagenscaixas">
                <p>Projeto de extensão <br> desenvolvido por alunas do IFPR</p>
            </div>
            <div class="col quadrado">
                <img src="../public/metodologias.svg" alt="" id="imagenscaixas">
                <p>Educação ambiental <br> através de metodologias ativas</p>
            </div>
            <div class="col quadrado">
                <img src="../public/codigo.svg" alt="" id="imagenscaixas">
                <p>Plataforma web <br>com código aberto e muito amor</p>
            </div>
        </div>
        <div class="finalhome" id="ultimo-cont-index">
            <div class="row justify-content-md-left">
                <div class="col">
                    <img class="img-fluid" src="../public/Group 52.svg" alt="celular-greengo" id="imagem-celular">
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</body>
</html>