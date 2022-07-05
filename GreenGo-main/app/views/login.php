<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../models/styles.css">
    <link rel="stylesheet" type="text/css" href="../models/styles-form.css">

    <title>Entrar</title>
</head>

<body class="fundo-branco">
    
    <img class="img-top" src="../../public/imagem-top.png">

    <div class="container">
        <form class="form-login" id="loginform" name="loginform" method="post" action="../controllers/loginController.php?action=logar">

            <h2 class="titulo-form">
                Entrar na conta
            </h2> <br>

            <?php if(isset($_SESSION['msg_erro'])): ?>
            <span> <?= $_SESSION['msg_erro'] ?> </span>
            <?php endif ?>

            <br/> 

            <label>
                E-mail <br>
                <input class="input-form" type="text" name="field_email" placeholder="greengo@email.com" autocomplete="off" value="mariaehsb@gmail.com">
            </label> <br>

            <label>
                Senha <br>
                <input class="input-form" type="password" name="field_password" placeholder="greengo123" autocomplete="off" value="4444">
            </label> <br>
            
            <a class="restaurar-senha-form" href="#link-restauracao-de-senha">Esqueceu sua senha?</a>
            <br>

            <div>
                <button class="entrar-btn me-auto">
                    Entrar
                </button>

                <span class="trocar-form me-auto">
                    Novo por aqui? <a href="cadastro.html" class="link-cadastro">Cadastrar</a>
                </span>
            </div>

        </form>
    </div>
    <br>

    <img class="img-bottom" src="../../public/imagem-bottom.png">
    
</body>

</html>
