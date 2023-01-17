<?php session_start(); ?>
<?php if (isset($_SESSION['msg_erro'])): ?>
  <span>
    <?= $_SESSION['msg_erro'] ?>
  </span>
<?php endif ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>

  <link rel="icon" href="../../public/favicon.svg">
  <link rel="stylesheet" href="../css/cadastro copy.css">
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


<body class="container-fluid">
  <div class="row">
    <div class="col-md-6 justify-content-end formulario">
      <h1 class="titulo">Criar conta</h1>

      <form method="post" action="../../controllers/UserController.php?action=create">
        <div class="row form-row align-items-left">
          <div class="col-sm">
            <label for="nome-cadastro">nome</label>
            <br>
            <input type="text" class="form-control" id="nome-cadastro" name='field_nome' required>

            <label for="email-cadastro">e-mail</label>
            <br>
            <input type="email" class="form-control" id="email-cadastro" name='field_email' required>

            <label for="senha-cadastro">senha</label>
            <br>
            <input type="password" class="form-control" id="senha-cadastro" name="field_password" required>
            <h6 class="senha-cadastro">8 caracteres contendo letras e números</h6>

            <label for="caixinha-cad">gênero</label>
            <br>
            <select name="field_genero" class="custom-select mr-sm-2" id="caixinha-cad" required>
              <option selected></option>
              <option value="feminino">feminino</option>
              <option value="masculino">masculino</option>
              <option value="outro">outro</option>
            </select>
            <br>
            <br>


            <label for="caixinha-cad" id="texto-caixinhas">nível de escolaridade</label>
            <br>
            <select name="field_escolaridade" class="custom-select mr-sm-2" id="caixinha-cad" required>
              <option selected></option>
              <option value="6° Ano (EF II)"> 6° ano (EF II) </option>
              <option value="7° Ano (EF II)"> 7° ano (EF II)</option>
              <option value="8° Ano (EF II)"> 8° ano (EF II) </option>
              <option value="9° Ano (EF II)"> 9° ano (EF II) </option>
              <option value="Ensino Médio">ensino médio</option>
              <option value="Ensino Superior">ensino superior</option>
            </select>
            <br>
            <br>

            <div class="row justify-content-start align-items-center">
              <div class="col-auto">
                <button class="btn btn-primary" id="botaocadastro" href="../termos.html">Cadastrar</button>

              </div>
              <div class="col-auto">
                <p id="jatemumaconta">Já tem uma conta? <a id="entrar" href="login.php">Entrar</a></p>
              </div>

              <div class="row container justify-content-start align-items-center">
                <p class="container termos">
                  Ao clicar em “Cadastrar”, você aceita o nosso
                  <a class="termos" href="../termos.php" target="__blank">Termo de Consentimento
                    Livre e Esclarecido</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="col col-logo">
      <img class="logo-div" src="../../public/greengo-div.svg" alt="logo">
    </div>

    <div class="row col align-items-end justify-content-end comece">
      <p class="aventura">
        Comece sua <br> aventura...
      </p>

      <div class="img-fluid">
        <a href="../index.html">
          <img id="icon" src="../../public/logo-rosa.svg" alt="">
        </a>
      </div>
    </div>
  </div>
</body>

</html>