<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/styles-form.css">
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

    <title>Entrar</title>

    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
</head>

<body >
    <nav>
        <div class="container">
            <h1>Entrar na conta</h1>
        <img class="img-top" src="../public/imagem-top.svg">

           <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <div class="form-row align-items-center">

                            <label for="formtexto" id="texto">E-mail</label>
                                <div class="w-100"></div>
                            <input type="text" class="form-control" id="formtexto" aria-describedby="nome-cadastro" name="field_nome">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <div class="form-row align-items-center">

                            <label for="formtexto" id="texto">Senha</label>
                                <div class="w-100"></div>
                            <input type="text" class="form-control" id="formtexto" aria-describedby="nome-cadastro" name="field_nome">

                        </div>
                    </div>
                </div>


          
           </div>
           <img class="img-bottom" src="../public/imagem-bottom.svg">
        </div>
    </nav>
   
</body>
