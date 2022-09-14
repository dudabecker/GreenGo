<?php session_start(); //só copiei do login?>

<!--
    Adicionar:
        inputs como obrigatorios
        colocar mini texto embaixo da senha descrevendo as caracteristicas q ela tem q ter (oito caracteres com letras e numeros)
        arte da logo
        colocar o botao de cadastro com outro nome no css (esta como de entrar)
        confirmar senha foi adiado, lembrar as meninas de fazer
    Att, Alana
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/styles.css">
    <link rel="stylesheet" type="text/css" href="../public/styles-form.css">

    <title>Cadastro</title>
</head>

<body class="fundo-branco">
    
    <div class="container">
        <form class="form-cadastro" id="cadastroform" name="cadastroform" method="post" action="../controllers/userController.php?action=create">

            <h2 class="titulo-form">
                Criar uma conta
            </h2> <br>

            <?php if(isset($_SESSION['msg_erro'])): ?>
            <span> <?= $_SESSION['msg_erro'] ?> </span>
            <?php endif ?>

            <br/> 
            
            <label>
                nome <br>
                <input class="input-form" type="text" name="field_nome" autocomplete="off">
            </label> <br>

            <label>
                e-mail <br>
                <input class="input-form" type="text" name="field_email" autocomplete="off" >
            </label> <br>

            <label>
                senha <br>
                <input class="input-form" type="password" name="field_password" autocomplete="off" >
            </label> <br>
<!--
            <label>
                confirmar senha <br>
                <input class="input-form" type="password" name="field_password" autocomplete="off" >
            </label> <br>
-->
            <label>
                gênero <br>
                <select name="field_genero">
                    <option value="feminino"> feminino </option>
                    <option value="masculino"> masculino </option>
                    <option value="outro"> outro </option>
                </select>
            </label> <br>

            <label>
                nível de escolaridade <br>
                <select name="field_escolaridade">
                    <option value="ensino fundamental 1"> ensino fundamental 1 </option>
                    <option value="ensino fundamental 2"> ensino fundamental 2 </option>
                    <option value="ensino medio"> ensino médio </option>
                    <option value="ensino superior"> ensino superior </option>
                </select>
            </label> <br>

            <label>
                <input class="input-form" type="checkbox" name="field_termos" required >
                Li e concordo com os <a href="/"><u>Termos de Uso</u></a>
            </label> <br>
            
        
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
    
</body>

</html>
