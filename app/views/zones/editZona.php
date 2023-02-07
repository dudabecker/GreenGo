<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Zona</title>
  <link rel="icon" href="../../public/favicon.svg">
  <link rel="stylesheet" href="/app/views/index.php">
  <link rel="stylesheet" href="../views/css/definirzona.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
<?php foreach($data['zona'] as $zona): ?>

<body id="fundocadastro">
<form action="./ZonaController.php?action=update&idZona=<?= $zona->getIdZona()?>" method="POST">
    <div class="form-group">
      <div class="row">
        <div class="col-sm">
          <form>
          <nav class="navbar navbar-expand-lg " id="menu">
            
                <a href="views/index.php" class="nav-brand">
                    <div class="row justify-content-md-center">
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
                    <a class="nav-item nav-link" id="projeto-menu" href="../views/projetoADM.php"> Projeto </a>
                        <a class="nav-item nav-link" id="mapa-menu" href="..\controllers\EspecieControllerADM.php?action=EspeciesMapa"> Mapa</a>
                        <!--<a class="nav-item nav-link" id="itemmenu" href="./PlantaController.php?action=formIdentificarPlanta"> Jogar </a>-->
                        <a class="nav-item nav-link" id="zonas-menu" href="../controllers/ZonaController.php?action=findZonas"> Zonas </a>
                        <a class="nav-item nav-link" id="especies-menu" href="../Controllers/EspecieControllerADM.php?action=findAll"> Espécies </a>
                        <a class="nav-item nav-link" id="usuarios-menu" href="../Controllers/UserController.php?action=findAll"> Usuários </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="../controllers/UserController.php?action=sair"> sair  </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>
<nav>
          <div class="container"> 
            
              <h1 id="h1">Editar a zona <?= $zona->getNomeZona() ?></h1>
              <div class="row">
                <div class="col-sm">
                  <div class="form-row align-items-left">
              
                  <div id="zonass">
                    <label for="formtexto" id="texto">Zona</label>
                    <div class="w-100"></div>
                    <input type="text" class="form-control" id="formtexto" aria-describedby="email-cadastro" name= "field_NomeZona" value="<?= $zona->getNomeZona()?>" >
                    </div>
              
              </div>
                  <label for="caixinha-cad" id="texto-caixinhas"> Pontuação mínima</label>
                  <br>
                  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Pontuação mínima</label>
                  <input type="number" class="form-control" id="pontuacao" aria-describedby="email-cadastro" name= "field_PMZ" class="custom-select mr-sm-2" value="<?= $zona->getPontoZona()?>">
                </div>
                <div class="w-100"></div>
                <?php endforeach; ?>
                </div>
                <div class="form-row align-items-center" id="botaocadastro">
                <div class="col-auto my-1">
                  <button type="submit" class="btn btn-primary" id="botaopronto">Pronto</button>
                  <button type="reset" class="btn btn-primary" id="botaolimpar">Limpar</button>
              </div>
             
               
              </div>
              
            </div>
            
        
        
 
        </div>
      
   
  </form>
  <div class="col" >
    <div class="row " id="loginho">
  <img src="../../public/logo-rodape" class="img-fluid" >
  <div class="w-100"></div>
  </div>
  </div>
  <div class="w-100"></div>
  <nav>
  <div class="w-100"></div><footer id="rodape">
 
 
</div></nav>
<nav>
  <div class="w-100"></div><footer id="rodape2">
 
 
</div></nav>
  
  </nav>
  
</body>
</html>