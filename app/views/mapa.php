<?php session_start(); ?>
<?php if (isset($_SESSION['msg_erro'])): ?>
<span>
  <?= $_SESSION['msg_erro'] ?>
</span>
<?php endif ?>


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
    <link rel="stylesheet" href="css/mapa.css">

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
                        <a class="nav-item nav-link" id="itemmenu"> Mapa</a>
                        <a class="nav-item nav-link" id="itemmenu"> Jogar </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="login.php"> Entrar </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>

<body id="fundoindex">
    <main>
        <nav id="primeirotextoindex">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div id="about-area">

                        <div class="row">
                            <div class="col" id="textoindex">
                            
                                <div class="img-responsive">
                                    <a href="mapa.php"><img src="../public/mapa mapa.svg" class="img-fluid" alt="mapa ifpr" id="mapa-da-home"></a>
                                </div>
                            </div>
                        </div>

                        
                            
                        
                    </div>
                </div>

                        <div class="row">
                            <div class="col" id="botoesmapa">
                                <button class="btn btn-primary" id="todosbotao">Todos</button>
                                <button class="btn btn-primary" id="botaozona">Zona 1</button>
                                <button class="btn btn-primary" id="botaozona">Zona 2</button>
                                <button class="btn btn-primary" id="botaozona">Zona 3</button>
                                <button class="btn btn-primary" id="botaozona">Zona 4</button>
                                <button class="btn btn-primary" id="botaozona">Zona 5</button>
                                <button class="btn btn-primary" id="botaozona">Zona 6</button>
                                <div class="w-100"></div>

                            </div>
        
                        </div>


                        <div class="row">
                            <div class="col" id="linhasecundaria">
                                <button class="btn btn-primary" id="botoesfileira2">Exótica</button>
                                <button class="btn btn-primary" id="botoesfileira2">Medicinal</button>
                                <button class="btn btn-primary" id="botoesfileira2">Frutífera</button>
                                <button class="btn btn-primary" id="botoesfileira2">Tóxica</button>
                            
                                <div class="w-100"></div>

                            </div>
        
                        </div>

                        
                        
            </div>
           <div class="container" id="caixa-adicione-individuos">
                
                    
                        <div class="col">
                            <div class="row">
                                <div class="quadrado">
                                     
                                </div>
                                <div class="quadrado">
                                     
                                </div>
                                <div class="quadrado">
                                    
                                </div>
                                <div class="quadrado">
                                    
                                </div>
                               
                            </div>
</div>
                        
                            <div class="col">
                                <div class="row">
                                     <div class="quadrado">
                                        
                                    </div>
                                    <div class="quadrado">
                                    
                                </div>
                                <div class="quadrado">
                                    
                                </div>
                                <div class="quadrado">
                                    
                                </div>
                                </div>
                           
                    
                        </div>
                         
            </div>
           
        </nav>
    </main>
</body>
</hmtl>