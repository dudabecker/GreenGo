<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
	
	<!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/css/perfil.css">
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
                            <img class="img-responsive" src="../public/icone 3.svg" alt="">
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
<h2>Cadastro de especies</h2>
<form action="./EspecieController.php?action=create" method="POST">
	Imagem: <input type="text" name="imagem">
	<br>
	Nome Popular: <input type="text" name="nomePop">
	<br>
	Nome Cientifico: <input type="text" name="nomeCie">
	<br>
	Descrição: <input type="text" name="descricao">
	<br>
	Ponto Especie: <input type="number" name="pontoEsp"> 
	<br>
	Atributos Especiais: <br><br>
	Frutifera 	<input type="checkbox" name="frutifera" value="1"><br>
	Tóxica 		<input type="checkbox" name="toxidade" value="1"><br>
	Exótica	    <input type="checkbox" name="exotica" value="1"><br>
	Rara		<input type="checkbox" name="raridade" value="1"><br>
	Medicinal	<input type="checkbox" name="medicinal" value="1"><br>
	Comestivel  <input type="checkbox" name="comestivel" value="1"><br>
	<input type="submit" value="Registrar">
	<input type="reset" value="Limpar">
</form>		
</body>
</html>