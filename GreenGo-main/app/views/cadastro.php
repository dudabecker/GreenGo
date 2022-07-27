<?php session_start(); //só copiei do login
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/styles.css">
    <link rel="stylesheet" type="text/css" href="../public/styles-form.css">

    <title>cadastro</title>
</head>

<body class="fundo-branco">
    
    <img class="img-top" src="../../public/imagem-top.png">

    <div class="container">
        <form class="form-cadastro" id="cadastroform" name="cadastroform" method="post" action="../controllers/userController.php?action=create">

            <h2 class="titulo-form">
                criar uma conta
            </h2> <br>

            <?php if(isset($_SESSION['msg_erro'])): ?>
            <span> <?= $_SESSION['msg_erro'] ?> </span>
            <?php endif ?>

            <br/> 
            
            <label>
               nome <br>
                <input class="input-form" type="text" name="field_name" placeholder="greengo" autocomplete="off">
            </label> <br>

            <label>
                genero <br>
                <select name="field_genero">
                <option value="feminino"> feminino </option>
                <option value="masculino"> masculino </option>
                </select>
            </label> <br>

            <label>
                escolaridade <br>
                <select name="field_escolaridade">
                <option value="ensino fundamental 1"> ensino fundamental 1 </option>
                <option value="ensino fundamental 2"> ensino fundamental 2 </option>
                <option value="ensino medio"> ensino medio </option>
                <option value="ensino superior"> ensino superior </option>
                </select>
            </label> <br>
            <label>
                E-mail <br>
                <input class="input-form" type="text" name="field_email" placeholder="greengo@email.com" autocomplete="off" >
            </label> <br>

            <label>
                Senha <br>
                <input class="input-form" type="password" name="field_password" placeholder="greengo123" autocomplete="off" >
            </label> <br>
            
            <a class="restaurar-senha-form" href="#link-restauracao-de-senha">Esqueceu sua senha?</a>
            <br>

            <div>
                <button class="entrar-btn me-auto">
                    Cadastrar
                </button>

                <span class="trocar-form me-auto">
                    Já possui conta? <a href="login.php" class="link-login">Entrar</a>
                </span>
            </div>

        </form>
    </div>
    <br>

    <img class="img-bottom" src="../../public/imagem-bottom.png">
    
</body>

</html>
