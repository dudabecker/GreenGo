<?php
//include_once __DIR__ . "/../helpers/mensagem.php";
//$caminho = __DIR__ . "/../helpers/mensagem.php";
//print_r($caminho); 
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Espécie</title>

    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/css/registro.css">
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
    <script src="js/registro.js"></script>
    <link rel="stylesheet" href="views/js/registro.js">
    <link rel="stylesheet" href="css/editorwys.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/script.js"></script>
</head>


<nav id="indexinteiro">
    <div class="col-xs-12" id="nav-container">
        <div id="itensmenu">
            <nav class="navbar navbar-expand-lg " id="menu">
                <a href="index.html" class="nav-brand">
                    <div class="row justify-content-md-left">
                        <div id="imgmenu">
                            <img class="img-responsive" src="../public/logo-green.svg" alt="">
                        </div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                        <div class="navbar-nav" id="navbar-links">

                            <a class="nav-item nav-link" id="identificar-menu" href="projeto.html"> Projeto </a>
                            <a class="nav-item nav-link" id="identificar-menu" href="./mapa.php"> Mapa</a>
                            <a class="nav-item nav-link" id="identificar-menu"
                                href="../Controllers/PlantaController.php?action=formIdentificarPlanta"> Jogar </a>
                            <a class="nav-item nav-link" id="identificar-menu"> Registro </a>
                            <a class="nav-item nav-link" id="identificar-menu"> Quiz </a>
                            <a class="nav-item nav-link" id="identificar-menu"> Equipes </a>
                            <a class="nav-item nav-link" id="botaoentrar" href="/"> Adm </a>
                        </div>
                    </div>
                </nav>
            </nav>
        </div>
    </div>
</nav>

<body>
    <main>
        <div class="container">
            <?php foreach ($data['especies'] as $especie): ?>

                <h1 id="titulo">Editar
                    <?= $especie->getNomeCie(); ?>!
                </h1>

                <div class="row">
                    <div class="col">
                        <div class="form-row align-items-left">
                            <form action="./EspecieController.php?action=update&idEspecie=<?= $especie->getIdEspecie() ?>"
                                method="POST">

                                <label for="formtexto" id="texto">Nome científico</label>
                                <div class="w-100"></div>
                                <input type="text" name="nomeCie" class="form-control" id="formtexto"
                                    value="<?= $especie->getNomeCie(); ?>">
                                <div class="w-100"></div>

                                <label for="formtexto" id="texto">Nome popular</label>
                                <div class="w-100"></div>
                                <input type="text" name="nomePop" class="form-control" id="formtexto"
                                    value="<?= $especie->getNomePop(); ?>">

                                <label for="formtexto" id="texto">Pontos</label>
                                <div class="w-100"></div>
                                <input type="number" name="pontoEsp" class="form-control" id="number" min="0"
                                    value="<?= $especie->getPontoEsp(); ?>">

                                <div class="container" id="container-checkbox">
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group form-check">
                                                <div id="atributos">
                                                    <a>Atributos específicos</a>
                                                    <div class="w-100"></div>
                                                    <br>
                                                </div>
                                                <div class="form-group form-check" id="form1">

                                                    <input type="checkbox" name="comestivel" class="form-check-input"
                                                        id="botaocheck1" value="<?= $especie->getComestivel(); ?>">

                                                    <label class="form-check-label" for="botaocheck1"
                                                        id="texto-checkbox">Comestível</label>
                                                </div>
                                                <div class="form-group form-check" id="form2">
                                                    <input type="checkbox" name="exotica" class="form-check-input"
                                                        id="botaocheck2" value="<?= $especie->getExotica(); ?>">

                                                    <label class="form-check-label" for="botaocheck2"
                                                        id="texto-checkbox">Exótica</label>
                                                </div>
                                                <div class="form-group form-check" id="form3">
                                                    <input type="checkbox" name="frutifera" class="form-check-input"
                                                        id="botaocheck3" value="<?= $especie->getFrutifera(); ?>">

                                                    <label class="form-check-label" for="botaocheck3"
                                                        id="texto-checkbox">Frutífera</label>
                                                </div>
                                                <div class="form-group form-check" id="form4">
                                                    <input type="checkbox" name="medicinal" class="form-check-input"
                                                        id="botaocheck4" value="<?= $especie->getMedicinal(); ?>">

                                                    <label class="form-check-label" for="botaocheck4"
                                                        id="texto-checkbox">Medicinal</label>
                                                </div>
                                                <div class="form-group form-check" id="form5">
                                                    <input type="checkbox" name="raridade" class="form-check-input"
                                                        id="botaocheck5" value="<?= $especie->getRaridade(); ?>">

                                                    <label class="form-check-label" for="botaocheck5"
                                                        id="texto-checkbox">Rara</label>
                                                </div>
                                                <div class="form-group form-check" id="form6">
                                                    <input type="checkbox" name="toxidade" class="form-check-input"
                                                        id="botaocheck6" value="<?= $especie->getToxidade(); ?>">

                                                    <label class="form-check-label" for="botaocheck6"
                                                        id="texto-checkbox">Tóxica</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-sm" id="imagemreg">

                        <a id="carregueimagemtexto"> Carregue uma imagem</a> <br>

                        <label class="picture align-content-center" for="picture__input" tabIndex="0">
                            <span class="picture__image">
                                <img class="img-camera" src="../public/camera.svg">
                            </span>
                        </label>
                        <input type="file" name="imagem" id="picture__input" accept=".png, .jpg, .jpeg">
                        <script
                            src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
                        <a id="carregueimagemtexto2"> .png .jpg ou .jpeg tamanho mínimo: 2MB tamanho
                            máximo: 5MB </a>

                    </div>

                    <div class="container" id="caixadetexto">
                        <a id="textodescritivo">Texto descritivo</a>
                        <textarea id="txtconteudo" name="descricao" value="<?= $especie->getDescricao(); ?>"></textarea>

                        <script src="../views/ckeditor/build/ckeditor.js"></script>
                        <script>ClassicEditor
                                .create(document.querySelector('#txtconteudo'), {
                                    licenseKey: '',

                                })
                                .then(editor => {
                                    window.editor = editor;
                                })
                                .catch(error => {
                                    console.error('Oops, something went wrong!');
                                    console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
                                    console.warn('Build id: mnx0o2etqvuk-d6hv5tpaevt5');
                                    console.error(error);
                                });
                        </script>
                    </div>

                    <div class="container">
                        <button type="submit" class="btn btn-primary btn-lg" id="botoesregistrar"><a>Pronto</a> </button>
                        <button type="reset" class="btn btn-secondary btn-lg" id="botoeslimpar"> <a id="limpar"> Limpar</a>
                        </button>
                    </div>

                    </form>
                <?php endforeach; ?>

            </div>
        </div>
        <br><br>
    </main>
</body>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/grayscale.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/registro.js"></script>

</html>