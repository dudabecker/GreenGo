<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

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
<?php
	//include_once __DIR__ . "/../helpers/mensagem.php";
	//$caminho = __DIR__ . "/../helpers/mensagem.php";
	//print_r($caminho); 
?>
<h2>Editar espécie</h2>
<?php foreach($data['especies'] as $especie): ?>
	<form action="./EspecieController.php?action=update&idEspecie=<?= $especie->getIdEspecie()?>" method="POST">
		Nome Popular: <input type="text" name="nomePop" value="<?= $especie->getNomePop(); ?>">
		<br>
		Nome Cientifico: <input type="text" name="nomeCie" value="<?= $especie->getNomeCie(); ?>">
		<br>
		Descrição: <input type="text" name="descricao" value="<?= $especie->getDescricao(); ?>">
		<br>
		Ponto: <input type="text" name="pontoEsp" value="<?= $especie->getPontoEsp(); ?>">
		<br>
		Imagem: <input type="text" name="imagem" value="<?= $especie->getImagem(); ?>">
		<br><br>

		Atributos Especiais: <br>  <!--<? if($especie->getFrutifera() == 1){echo 'checked';} ?>-->
		Frutifera: <input type="checkbox" name="frutifera" value="<?= $especie->getFrutifera(); ?>">
		<br>
		Tóxica: <input type="checkbox" name="toxidade" value="<?= $especie->getToxidade(); ?>">
		<br>
		Exótica: <input type="checkbox" name="exotica" value="<?= $especie->getExotica(); ?>">
		<br>
		Rara: <input type="checkbox" name="raridade" value="<?= $especie->getRaridade(); ?>">
		<br>
		Medicinal: <input type="checkbox" name="medicinal" value="<?= $especie->getMedicinal(); ?>">
		<br>
		Comestível: <input type="checkbox" name="comestivel" value="<?= $especie->getComestivel(); ?>">
		<br>
		
		<input type="submit" value="Atualizar">
		<input type="reset" value="Limpar">
	</form>		
<?php endforeach; ?>

</body>
</html>