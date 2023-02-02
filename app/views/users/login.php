<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--FAVICON-->
    <link rel="icon" href="../../public/favicon.svg">
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
    <title>Entrar</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col align-self-end">
                <img class="img-top" src="../../public/imagem-top.svg">
            </div>

            <div class="col align-self-center centrao">
                <h2 class="titulo">
                    Entrar na conta
                </h2>

                <form class="form-login" id="loginform" name="loginform" method="post"
                    action="../../controllers/UserController.php?action=logar">
                    <label for="email-login">e-mail</label>
                    <br>
                    <input type="email" class="form-control" id="email-login" name='field_email' required>

                    <label for="senha-login">senha</label>
                    <br>
                    <input type="password" class="form-control" id="senha-login" name="field_password" required>

                    <!-- FUNÇÃO PARA O FUTURO
                        <a class="restaurar-senha-form" href="#link-restauracao-de-senha">Esqueceu sua senha?</a>
                    -->

                    <?php if (isset($_SESSION['msg_erro'])): ?>
                        <br>

                        <div class="justify-content-between align-content-center mensagem">
                            <img class="img-erro align-items-center" src="../../public/exclamation.svg">

                            <span class="mensagem-erro align-items-center">
                                o campo de email ou senha está incorreto
                                <?= $_SESSION['msg_erro'] ?>
                            </span>
                        </div>
                    <?php endif ?>
                    <br>

                    <div class="row justify-content-beetween align-items-center">
                        <div class="col-auto">
                            <button class="btn btn-primary" id="botaologin" type="submit">Entrar</button>

                        </div>

                        <div class="col-auto align-items-center novoporaqui">
                            <p>Novo por aqui? <a id="cadastro" href="cadastro.php">Cadastrar</a></p>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col align-self-start">
                <a href="../index.php">
                    <img class="img-bottom" src="../../public/imagem-bottom.svg">
                </a>
            </div>
        </div>
    </div>

</body>

</html>