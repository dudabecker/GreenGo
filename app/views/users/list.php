<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuários</title>

  <!--FAVICON-->
  <link rel="icon" href="../public/favicon.svg">
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
  <!--BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../views/css/listUser.css">
  <link rel="stylesheet" href="../views/css/cabecalho.css">

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
                <a href="../views/indexADM.php" class="nav-brand">
                    <div class="row justify-content-md-left">
                        <div id="imgmenu">
                            <img class="img-responsive"  id="logo" >
                        </div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> <img src="../public/menu.svg" id="menuicon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav" id="navbar-links">
                        <a class="nav-item nav-link" id="projeto-menu" href="../views/projetoADM.php"> Projeto </a>
                        <a class="nav-item nav-link" id="mapa-menu" href="..\controllers\EspecieControllerADM.php?action=EspeciesMapa"> Mapa</a>
                        <a class="nav-item nav-link" id="itemmenu" href="./PlantaControllerADM.php?action=findAll"> Plantas </a>
                        <a class="nav-item nav-link" id="zonas-menu" href="./ZonaController.php?action=findZonas"> Zonas </a>
                        <a class="nav-item nav-link" id="especies-menu" href="./EspecieControllerADM.php?action=findAll"> Espécies </a>
                        <a class="nav-item nav-link" id="usuarios-menu" href="./UserController.php?action=findAll"> Usuários </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="../controllers/UserController.php?action=sair"> Sair  </a>
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
        Usuários
      </h2>
    </div>

    <div class="container row align-content-start">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Gênero</th>
            <th scope="col">Escolaridade</th>
            <th scope="col">Tipo</th>
            <th class="coroa" scope="col">Coroar</th>
          </tr>
        </thead>

        <tbody>

          <?php foreach ($data['usuarios'] as $user): ?>

            <tr class="linha">
              <td>
                <?= $user->getNomeUsuario() ?>
              </td>

              <td>
                <?= $user->getEmail() ?>
              </td>

              <td>
                <?= $user->getGenero() ?>
              </td>

              <td>
                <?= $user->getEscolaridade() ?>
              </td>

              <td>
                <!--FALAR O TIPO USUARIO POR ESCRITO-->
                <?=  $user->getTipoUsuario()?>
              </td>
              
              <td>
                <!-- SOBRE O BOTAO DE Coroar
              
                    IF tipoUsuario==admin{
                      acao de diminuir o nivel do usuario
                      imagem com a src="../public/coroado.svg"
                    } ELSE{
                      acao de tornar admin
                      imagem com a src="../public/coroa.svg"
                    }
                  
                -->
                <a href='UserController.php?action=adm&id=<?=$user->getId()?>'>
                
                  <img class="img-coroa" src="../public/coroado.svg">
                </a>
              </td>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <br>
  <br>
</body>

</html>