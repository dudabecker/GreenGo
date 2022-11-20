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
    <title>Registro</title>

    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/registro.css">
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
    <link rel="stylesheet" href="js/registro.js">
    <link rel="stylesheet" href="../css/editorwys.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/script.js"></script>

    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
</head>


<nav id="indexinteiro">

    <div class="col-xs-12" id="nav-container">

        <div id="itensmenu">

            <nav class="navbar navbar-expand-lg " id="menu">
                <a href="index.html" class="nav-brand">
                    <div class="row justify-content-md-left">
                        <div id="imgmenu">
                            <img class="img-responsive" src="../../public/icone 3.svg" alt="">
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
                        <a class="nav-item nav-link" id="identificar-menu"> Registro </a>
                        <a class="nav-item nav-link" id="identificar-menu"> Quiz </a>
                        <a class="nav-item nav-link" id="identificar-menu"> Equipes </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="/"> Adm </a>
                    </div>
                </div>

            </nav>
        </div>
    </div>

</nav>

<body>
    <main>
        <nav id="primeirotextoindex">
            <div class="container">
                <div class="row justify-content-md-left">

                    <div id="corpo-registro">

                        <div class="row">
                            <div class="col">
                                <h1 id="primeirotextoreg"> Registre uma espécie!</h1>
                            </div>
                        </div>

                        <form action="/controllers/EspecieController.php?action=create" method="POST">
                        <div class="container" id="reg1">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-row align-items-left">

                                        <label for="formtexto" id="texto">Nome popular</label>
                                            <div class="w-100"></div>
                                            <input type="text" name="nomePop" class="form-control" id="formtexto"
                                                aria-describedby="nome-cadastro">
                                                
                                        <label for="formtexto" id="texto">Nome científico</label>

                                        <input type="text" name="nomeCie" class="form-control" id="formtexto"
                                            aria-describedby="nome-cadastro">
                                    </div>

                                    <label id="pontos">
                                        Pontos <br>
                                        <input class="input-form" type="number" min="0" name="pontoEsp"
                                            autocomplete="off">
                                    </label> <br>


                                </div>

                                <div class="col-sm">

                                    Carregue uma imagem <br>

                                    <label class="picture" for="picture__input" tabIndex="0">
                                        <span class="picture__image"></span>
                                    </label>
                                    <input type="file" name="imagem" id="picture__input">
                                    <script
                                        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <nav>
            <div class="container" id="container-checkbox">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group form-check">
                            <div>
                                <a>Atributos especificos</a>
                                <div class="w-100"></div>
                                <br>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="comestivel" class="form-check-input" id="botaocheck">
                                    <label class="form-check-label" for="botaocheck"
                                        id="texto-checkbox">Comestível</label>

                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="exotica" class="form-check-input" id="botaocheck">
                                    <label class="form-check-label" for="botaocheck" id="texto-checkbox">Exótica</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="frutifera" class="form-check-input" id="botaocheck">
                                    <label class="form-check-label" for="botaocheck"
                                        id="texto-checkbox">Frutífera</label>
                                    <span></span>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="medicinal" class="form-check-input" id="botaocheck">
                                    <label class="form-check-label" for="botaocheck"
                                        id="texto-checkbox">Medicinal</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="raridade" class="form-check-input" id="botaocheck">
                                    <label class="form-check-label" for="botaocheck" id="texto-checkbox">Rara</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="toxidade" class="form-check-input" id="botaocheck">
                                    <label class="form-check-label" for="botaocheck" id="texto-checkbox">Tóxica</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>



        <nav id="primeirotextoindex">
            <br>
            <div class="container">
                <textarea id="txtconteudo" name="descricao"></textarea>

                <script src="ckeditor/build/ckeditor.js"></script>
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
            </div>
        </nav>
        <nav>
            <div class="container" id="caixa-adicione-individuos">
                <div class="row justify-content-md-left">
                    <h4>Adicione individuos</h4>
                    <div class="w-100"></div>
                    <div class="row">
                        <img class="img-responsive" src="../../public/mais.svg" id="mais-registro">
                    </div>
                    <form id="form-registro">
                        <div class="col-auto my-1">
                            <label for="caixinha-cad">Zona</label>
                            <br>
                            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect"></label>
                            <select class="custom-select mr-sm-2" id="caixinha-cad">
                                <option selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </form>

                </div>
            </div>
        </nav>
                    </form> <!-- onde seria o fim do form, não sei onde é -->

        <label class="chk">
            <input type="checkbox" name="exemplo" />
            <span></span>
        </label>

    </main>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/registro.js"></script>
</body>

</html>