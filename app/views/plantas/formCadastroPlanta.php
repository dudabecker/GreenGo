<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planta</title>
    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/registro.css">
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
                    <a class="nav-item nav-link" id="itemmenu" href="projeto.html"> Projeto </a>
                        <a class="nav-item nav-link" id="itemmenu" href="./mapa.php"> Mapa</a>
                        <a class="nav-item nav-link" id="itemmenu" href="../Controllers/PlantaController.php?action=formIdentificarPlanta"> Jogar </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="perfil.php"> Eu </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>
<body>
<main>
        <nav id="primeirotextoindex">
            <div class="container">
                <div class="row justify-content-md-left">
                    <div id="corpo-registro">
                        <div class="row">
                            <div class="col">
                                <h1 id="primeirotextoreg"> Registre uma planta!</h1>
                            </div>
                        </div>

                        <form action="./PlantaController.php?action=create" method="POST">
                        <div class="container" id="reg1">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="form-row align-items-left">

                                        <label for="formtexto" id="texto">Zona</label>
                                            <div class="w-100"></div>
                                            <input type="text" name="nomePop" class="form-control" id="texto"
                                                aria-describedby="nome-cadastro">

                                        <label for="formtexto" id="texto">Identificação da Espécie</label>

                                        <input type="text" name="nomeCie" class="form-control" id="formtexto"
                                            aria-describedby="nome-cadastro">

                                        <label for="formtexto" id="texto">Código Numérico</label>

                                        <input type="text" name="pontoEsp" class="form-control" id="formtexto"
                                            aria-describedby="nome-cadastro">
                                        </div>
                                    </div>
                                </div>
                        </div>



            <div class="container">
            <button type="submit" class="btn btn-primary btn-lg" id="botoesregistrar"><a>Registrar</a> </button>
            <button type="reset" class="btn btn-secondary btn-lg" id="botoeslimpar"> <a id="limpar"> Limpar</a>
            </button>
        </div>	
</body>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/grayscale.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/registro.js"></script>

</html>