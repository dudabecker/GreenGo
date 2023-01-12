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

    <div class="row justify-content-between">
      <h2 class="titulo">
        Usuários
      </h2>
    </div>

    <div class="container row align-content-start">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
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
              <th class="id" scope="row">
                <?= $user['id'] ?>
              </th>

              <td>
                <?= $user['nomeUsuario'] ?>
              </td>

              <td>
                <?= $user['email'] ?>
              </td>

              <td>
                <?= $user['genero'] ?>
              </td>

              <td>
                <?= $user['escolaridade'] ?>
              </td>

              <td>
                <!--FALAR O TIPO USUARIO POR ESCRITO-->
                <?= $user['tipoUsuario'] ?>
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
                <a href='.'>
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