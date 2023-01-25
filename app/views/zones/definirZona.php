<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>

  <link rel="icon" href="../../public/favicon.svg">
  <link rel="stylesheet" href="/app/views/index.html">
  <link rel="stylesheet" href="../css/definirzona.css">
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


<body id="fundocadastro">

  <form method="post" action="../../controllers/ZonaController.php?action=create">
    <div class="form-group">
      <div class="row">
        <div class="col-sm">
          <form>

          <nav class="navbar navbar-expand-lg " id="menu">
            
                <a href="views/index.html" class="nav-brand">
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

                        <a class="nav-item nav-link" id="portfolio-menu" href="../views/projeto.html"> Projeto </a>
                        <a class="nav-item nav-link" id="registro-menu"> Mapa</a>
                        <a class="nav-item nav-link" id="identificar-menu"> Jogar </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="perfil.php"> Eu </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>

<nav>
          <div class="container"> 
          
              <h1 id="h1">Definir Zona!</h1>

              <div class="row">
                <div class="col-sm">
                  <div class="form-row align-items-left">


              
                  <div id="zonass">
                    <label for="formtexto" id="texto">Zona</label>
                    <div class="w-100"></div>
                    <input type="text" class="form-control" id="formtexto" aria-describedby="email-cadastro" name= "field_NomeZona">
                    </div>
              
              </div>

                  <label for="caixinha-cad" id="texto-caixinhas"> Pontuação mínima</label>
                  <br>
                  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Pontuação mínima</label>
                  <input type="number" class="form-control" id="pontuacao" aria-describedby="email-cadastro" name= "field_PMZ" class="custom-select mr-sm-2" >
                </div>
                <div class="w-100"></div>
                  
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
</div>
  </nav>

</body>


<div id="rodape">
  <div class="img-fluid">
        <img src="../public/logo-rodape" class="img-fluid">
  </div>
</div>
</html>
