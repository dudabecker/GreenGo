<?php session_start();?>

<!--
    Adicionar:
        inputs como obrigatorios
        colocar mini texto embaixo da senha descrevendo as caracteristicas q ela tem q ter (oito caracteres com letras e numeros)
        arte da logo
        colocar o botao de cadastro com outro nome no css (esta como de entrar)
        confirmar senha foi adiado, lembrar as meninas de fazer
    Att, Alana
-->


<!--
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
            -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/app/views/index.html">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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


<body background="Desktop - 2.svg">
    
    <form>        
        <div class="form-group">
          <div class="row">
            <div class="col-sm">
                <h1>Criar conta</h1>
                
                <label for="exampleInputnome">nome</label>
                <br>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nome-cadastro" >
                <br>
                
                <label for="exampleInputEmail">email </label>
                <br>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email-cadastro" >
                <br>
                
                <label for="exampleInputPassword">senha</label>
                <br>
                <input type="password" class="form-control" id="exampleInputEmail1">
    
                <small id="senha-cadastro" class="form-text text-muted">8 caracteres contendo letras e numeros</small>
                <br>
                
            <!--
                <label for="exampleInputPassword1">confirmar senha</label>
                <br>
                <input type="password" class="form-control" id="exampleInputEmail1">
                <br>
            -->

        <form>
          
          <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label for="exampleInputPassword">gênero</label>
              <br>
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">gênero</label>
                        <select class="custom-select mr-sm-2" id="exampleInputEmail2">
                            <option selected></option>
                            <option value="feminino">feminino</option>
                            <option value="masculino">masculino</option>
                            <option value="outro">outro</option>
                        </select>
                    </div>
                </div>
         
            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label for="exampleInputPassword">nível de escolaridade</label>
              <br>
                    <!-- <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">anoescolar</label> -->
                        <select class="custom-select mr-sm-2" id="exampleInputEmail2">
                            <option selected></option>
                            <option value="ensino fundamental 1"> ensino fundamental 1 </option>
                            <option value="ensino fundamental 2"> ensino fundamental 2 </option>
                            <option value="ensino medio"> ensino médio </option>
                            <option value="ensino superior"> ensino superior </option>
                        </select> 
                    </div>
                </div>
              
              <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Li e concordo com os termos de uso</label>
                </div>
              </div>
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary" id="botaocadastro">Cadastrar</button>
              </div>
              <div class="col-auto md-2">
                <label type="text"  id="jatemumaconta">Já tem uma conta?</button>
              </div>
            </div>
          </form>
          
          </body>
            
          
</html>
