<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/styles-form.css">

    <title>Entrar</title>

    <!--FAVICON-->
    <link rel="icon" href="../../public/favicon.svg">
</head>

<body class="fundo-branco">

    <img class="img-top" src="../../public/imagem-top.svg">

    <div class="container">
        <form class="form-login" id="loginform" name="loginform" method="post"
            action="../../controllers/LoginController.php?action=logar">

            <h2 class="titulo-form">
                Entrar na conta
            </h2> <br>

            <?php if (isset($_SESSION['msg_erro'])): ?>
            <span>
                <?= $_SESSION['msg_erro'] ?>
            </span>
            <?php endif ?>

            <label>
                E-mail <br>
                <input class="input-form" type="email" name="field_email" autocomplete="off" required>
            </label> <br>

            <label>
                Senha <br>
                <input class="input-form" type="password" name="field_password" autocomplete="off" required>
            </label> <br>

            <a class="restaurar-senha-form" href="#link-restauracao-de-senha">Esqueceu sua senha?</a>
            <br>

            <div>
                <button class="entrar-btn me-auto">
                    Entrar
                </button>

                <span class="trocar-form me-auto">
                    Novo por aqui? <a href="cadastro.php" class="link-cadastro">Cadastrar</a>
                </span>
            </div>

        </form>
    </div>
    <br>

    <img class="img-bottom" src="../../public/imagem-bottom.svg">

</body>

</html>