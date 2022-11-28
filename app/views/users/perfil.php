<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu perfil</title>

    <!--FAVICON-->
    <link rel="icon" href="../../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/perfil.css">
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
                        <img class="img-responsive" src="../../public/logo-green.svg" alt="">
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
        <h2 class="titulo">
            Meu perfil
        </h2>

        <?php foreach ($data['usuarios'] as $user): ?>

        <p>
            Meu nome aqui é <b><?= $user->getUsername() ?></b>
            , meu gênero é <b><?php= genero($user); ?></b> 
            e estou no <b><?= $user->getEscolaridade() ?></b>.
            <br><br>
            O e-mail cadastrado é <b><?= $user->getEmail() ?></b> e minha senha é um <b>segredo</b>.
        </p>

        <div class="row justify-content-md-left">
            <div class="row">
                <!--EDITAR-->
                <div class="col">
                    <button action='../controllers/userController.php?action=edit&id=<?= $user->getId() ?>' method="get" class="editar">Editar</button>
                </div>

                <!--ENCERRAR-->
                <div class="col">
                    <button action='../controllers/userController.php?action=exit&id=<?= $user->getId() ?>' method="get" class="sair">Sair da conta</button>
                </div>

                <!--EXCLUIR-->
                <div class="col">
                    <button action='../controllers/userController.php?action=delete&id=<?= $user->getId() ?>' method="get" class="excluir">Excluir a conta</button>
                </div>
            </div>
        </div>

    </div>
</body>

</html>

<?php
function genero($user)
{
    if ($user->getUsername() == "outro") {
        return "indefinido";
    } else {
        return $user->getUsername();
    }
}

    endforeach; ?>
