<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar planta</title>

    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
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
    <link rel="stylesheet" href="../views/css/adicionarplanta.css">
    <link rel="stylesheet" href="../views/css/cabecalho.css">


    <script src="js/registro.js"></script>
    <link rel="stylesheet" href="../views/js/registro.js">
    <link rel="stylesheet" href="css/editorwys.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/script.js"></script>

    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
</head>

<nav>
    <div class="col-xs-12" id="nav-container">

    <div id="itensmenu">

            <nav class="navbar navbar-expand-lg " id="menu">
                <a href="../views/indexADM.php" class="nav-brand">
                    <div class="row justify-content-md-left">
                        <div id="imgmenu">
                            <img class="img-responsive"  id="logo" >
                        </div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> <img src="../public/menu.svg" id="menuicon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav" id="navbar-links">
                        <a class="nav-item nav-link" id="projeto-menu" href="../views/projetoADM.php"> Projeto </a>
                        <a class="nav-item nav-link" id="mapa-menu" href="..\controllers\EspecieControllerADM.php?action=EspeciesMapa"> Mapa</a>
                        <a class="nav-item nav-link" id="itemmenu" href="./PlantaControllerADM.php?action=findAll"> Plantas </a>
                        <a class="nav-item nav-link" id="zonas-menu" href="./ZonaController.php?action=findZonas"> Zonas </a>
                        <a class="nav-item nav-link" id="especies-menu" href="./EspecieControllerADM.php?action=findAll"> Espécies </a>
                        <a class="nav-item nav-link" id="usuarios-menu" href="./UserController.php?action=findAll"> Usuários </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="../controllers/UserController.php?action=sair"> Sair  </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>
<body>
    <main>
            <div class="container">
                <div class="row justify-content-md-left">

                    <div id="corpo-registro">

                       <div class="row">
                            <div class="col">
                                <h1 id="primeirotextoreg"> Editando o indivíduo!</h1>
                            </div>
                        </div>
                        <?php foreach ($data['plantas'] as $planta): ?>
                        <form action="./plantaControllerADM.php?action=update&idPlanta=<?= $planta->getIdPlanta() ?>" method="POST">
                            <div class="container" id="reg1">
                                <div class="row">
                                    <div class="col-sm">


                                        <div class="form-row align-items-left">

                                            <label for="formtexto" id="texto">Identificação da espécie</label>
                                            <div class="w-100"></div>
                                            <input type="text" name="idEspecie" class="form-control" id="formtexto"
                                                value="<?= $planta->getIdEspecie(); ?>">
                                                <div class="w-100"></div>
                                                
                                            <label for="formtexto" id="texto">Código numérico</label>
                                            <div class="w-100"></div>
                                            <input type="text" name="codNumerico" class="form-control" id="formtextoo"
                                            value="<?= $planta->getCodNumerico(); ?>">


                                                <div class="w-100"></div>
                                           
                                                
                                                
                                            <label for="zonasselect" id="texto">Zona</label>
                                            <div class="w-100"></div>
                                                <select class="custom-select mr-sm-2"  name="idZona" id="zonasselect" >
                                                    
                                                        <option selected ></option>
                                                        <option value="1"> Zona 1</option>
                                                        <option value="2"> Zona 2</option>
                                                        <option value="3"> Zona 3 </option>
                                                        <option value="4"> Zona 4 </option>
                                                        <option value="5"> Zona 5 </option>
                                                        <option value="6"> Zona 6 </option>
                                                </select>
                                            <div class="w-100"></div>
                                            <!--
                                            <label for="number" id="texto">Pontos</label>
                                            <div class="w-100"></div>
                                            <input type="number" name="inputnumber" class="form-control" id="number">
                                            -->

                                            <div class="w-100"></div>
                                            <label for="formtexto" id="texto">Nome social</label>

                                            <div class="w-100"></div>
                                            <input type="text" name="nomeSocial" class="form-control" id="form2"
                                            value="<?= $planta->getNomeSocial(); ?>">

                                        </div>

                                    </div>

                                    <nav>
                                        <!--<div class="col-sm" id="imagemreg">

                                            <a id="carregueimagemtexto"> Carregue uma imagem</a> <br>

                                            <label class="picture align-content-center" for="picture__input" tabIndex="0">
                                                <span class="picture__image">
                                                    <img class="img-camera" src="../../public/camera.svg">
                                                </span>
                                            </label>
                                            <input type="file" name="imagem" id="picture__input" accept=".png, .jpg, .jpeg">
                                            <script
                                                src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
                                            <a id="carregueimagemtexto2"> .png .jpg ou .jpeg tamanho mínimo: 2MB tamanho
                                                máximo: 5MB </a>
                                        </div>-->
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container" id="caixadetexto">
                <a id="textodescritivo">História</a>
                <textarea id="txtconteudo" name="historia" value="<?= $planta->getHistoria(); ?>"></textarea>

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

            </div>

        </nav>

        <div class="container">
            <button type="submit" class="btn btn-primary btn-lg" id="botoesregistrar"><a>Pronto</a> </button>
            <button type="reset" class="btn btn-secondary btn-lg" id="botoeslimpar"> <a id="limpar"> Limpar</a>
            <button type="submit" class="btn btn-secondary btn-lg" id="botoesexcluir"> <a > Excluir</a>
            </button>
        </div>


        </form>

<!--
        <form action="./PlantaControllerADM.php?action=update&idPlanta=<?= $planta->getIdPlanta()?>" method="POST">
            Número de identificação da espécie: <input type="text" name="idEspecie" value="<?= $planta->getIdEspecie(); ?>">
            <br>
            Número de identificação da zona: <input type="text" name="idZona" value="<?= $planta->getIdZona(); ?>">
            <br>
            Código numérico: <input type="text" name="codNumerico" value="<?= $planta->getCodNumerico(); ?>">
            <br>
            Código QR: <input type="text" name="codQR" value="<?= $planta->getCodQR(); ?>">
            <br><br>
            
            <input type="submit" value="Atualizar">
            <input type="reset" value="Limpar">
        </form>	
                    -->	
<?php endforeach; ?>


    </main>

</body>

</html>