<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificar planta</title>

    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/identificarplanta.css">
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
                    <img class="img-responsive" src="../../public/logo-green.svg" id="logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">

                        <a class="nav-item nav-link" id="itemmenu" href="projeto.html"> Projeto </a>
                        <a class="nav-item nav-link" id="itemmenu" href="mapa.php"> Mapa</a>
                        <a class="nav-item nav-link" id="itemmenu"> Jogar </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="login.php"> Entrar </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>


<body>
<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	//include_once __DIR__ . "/../helpers/mensagem.php";
	//$caminho = __DIR__ . "/../helpers/mensagem.php";
	//print_r($caminho); 
?>

<div class="container">
        
            
            <div class="row justify-content-md-left">
                    <div class="col" >
                    <a id="texto_zona">Jogando na zona X</a>
                </div>
</div>
</div>

                <div class="w-100"></div>
                   <div class="container">
                        <div class="row justify-content-md-center">
                            
                                <div class="img-responsive">
                                    <a href="../mapa.php"><img src="../../public/mapa zona 5.svg" class="img-fluid" alt="mapa ifpr" id="mapa-da-home"></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="w-100"></div>
                        <div class="container">
                        
                                <div class="row justify-content-md-left" id="identifique">
                                    <div class="col">
                                        <form action="./PlantaController.php?action=create" method="POST">
	                                        <a id="indentifique_aqui"> Identifique aqui</a> 
                                            <div class="w-100"></div>
                                            <input type="text" class="form-control" name="codNumerico" id="codigoNumerico1">
                                            <input type="text" class="form-control" name="codNumerico" id="codigoNumerico1">
                                            <input type="text" class="form-control" name="codNumerico" id="codigoNumerico">
                                            <input type="text" class="form-control" name="codNumerico" id="codigoNumerico">
                                            
                                            <button class="btn btn-primary" type="button" id="botao-qrcode"><img src="../../public/qr-code-scan.svg" class="img-responsive"> 
                                            <a id="SCAN"> SCAN</a></button>
	                                        <br>
                                            <!--Código QR: <input type="text" name="codQR">-->
	                                        <br>

	                                       <button class="btn btn-primary" type="button" id="botao-proximo" >Próximo</button>
                                        </form>		
                                        <h3 id="suapontuacao">Sua pontuação atual é de XXX pontos.</h3>
                                    </div>
                                
                                </div>
                        </div>
                
            
</body>
</html>