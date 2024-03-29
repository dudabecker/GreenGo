<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar conta</title>


    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/css/edituser.css">

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


<?php foreach($data['usuario'] as $user): ?>
<body id="fundocadastro">
<form action="./UserController.php?action=update&id=<?= $user->getId()?>" method="POST">
  <div class="form-group">
    <div class="row">
      <div class="col-sm">
        <form>

          <div class="container">
            <div class="col-auto " id="venhacon">
              <span class="img-fluid">
                <img class="img-responsive" src="../public/greengo-div.svg" alt="logocentro" id="imagemcentrocad">
            </div>

            <h1 id="h1">Editar conta</h1>

            <div class="row">
              <div class="col-sm">
                <div class="form-row align-items-left">

                  <label for="formtexto" id="texto">nome</label>
                  <div class="w-100"></div>
                  <input type="text" class="form-control" id="formtexto" aria-describedby="nome-cadastro"
                     name="field_nome" value="<?= $user->getNomeUsuario(); ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm">
                <div class="form-row align-items-left">

                  <label for="formtexto" id="texto">email</label>
                  <div class="w-100"></div>
                  <input type="text" class="form-control" id="formtexto" aria-describedby="email-cadastro"
                    name="field_email" value="<?= $user->getEmail(); ?>">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-sm">
                <div class="form-row align-items-left">

                  <label for="formtexto" id="texto">senha</label>
                  <div class="w-100"></div>
                  <input type="password" class="form-control" id="formtexto" aria-describedby="senha-cadastro"
                    name="field_password"  value="<?= $user->getPassword(); ?>">
                  <div class="w-100"></div>
                  <h6 id="senha-cadastro" style="color: #04574D ">8 caracteres contendo letras e números</h6>
                </div>
              </div>
            </div>

            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label for="caixinha-cad" id="texto-caixinhas">gênero</label>
                <br>
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">gênero</label>
                <select name="field_genero" class="custom-select mr-sm-2" id="caixinha-cad">
                  <option selected value="<?= $user->getGenero(); ?>"><?= $user->getGenero(); ?></option>
                  <option value="feminino">feminino</option>
                  <option value="masculino">masculino</option>
                  <option value="outro">outro</option>
                </select>
              </div>
              <div class="w-100"></div>

              <div class="col-auto my-1">
                <label for="caixinha-cad" id="texto-caixinhas">nível de escolaridade</label>
                <br>
                <select name="field_escolaridade" class="custom-select mr-sm-2" id="caixinha-cad">
                  <option selected value="<?= $user->getEscolaridade(); ?>"><?= $user->getEscolaridade(); ?></option>
                  <option value="6° Ano (EF II)"> 6° ano (EF II) </option>
                  <option value=" 7° Ano (EF II)"> 7° ano (EF II)</option>
                  <option value=" 8° Ano (EF II)"> 8° ano (EF II) </option>
                  <option value=" 9° Ano (EF II)"> 9° ano (EF II) </option>
                  <option value="ensino medio">ensino médio</option>
                  <option value="ensino superior">ensino superior</option>
                </select>
              </div>

            </div>
            <?php endforeach; ?>
            <br>
        </form>
        <div class="form-row align-items-left">
          <div class="col-auto my-1">
            <button class="btn btn-primary" id="botaocadastro" href="termos.php">Concluir</button>

            
          </div>
          <div class="col-sm" id=comecesua>

          </div>
          <div id="pp">
            <a>Continue sua <br> aventura...</a>
          </div>

          <div class="img-fluid" id="icon">
            <a href="index.html"><img src="../public/iconebranco.svg" alt=""></a>
          </div>

        </div>

      </div>
    </div>
  </div>
  </div>

</form>
	</body>
  
</html>
