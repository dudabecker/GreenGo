<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>

    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/projeto.css">
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

    <link rel="stylesheet" href="css/perfil.css">

</head>

<nav>
    <div class="col-xs-12" id="nav-container">
        <div id="itensmenu">
            <nav class="navbar navbar-expand-lg " id="menu">
                <a href="../views/index.php" class="nav-brand">
                    <div class="row justify-content-md-left">
                        <div id="imgmenu">
                        <img class="img-responsive" src="../public/logo-green.svg"  id="logo" >
                        </div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> <img src="../public/menu.svg" id="menuicon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">

                        <a class="nav-item nav-link" id="projeto-menu" href="../views/projeto.php"> Projeto </a>
                        <a class="nav-item nav-link" id="mapa-menu" href="..\controllers\EspecieController.php?action=EspeciesMapa"> Mapa</a>
                        <a class="nav-item nav-link" id="itemmenu" href="./PlantaController.php?action=formIdentificarPlanta"> Jogar </a>
                        <a class="nav-item nav-link" id="botaoentrar" href="../views/users/login.php"> Entrar </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>

<body>

    <div class="container">
        <div id="sobre">
            <h2 class="titulo">
                O que é o <img src="../public/isologo-greengo-verde.svg" class="isologo">?
            </h2>

            <p> É o resultado dos avanços de um projeto de extensão denominado <b>Green Go: Gamificação da Identificação
                    de
                    Plantas do IFPR</b>,
                do Instituto Federal do Paraná Campus Foz do Iguaçu. Ele envolve estudantes de dois cursos, Meio
                Ambiente e
                Informática, colaborando
                na integração na comunidade local entre si e com seu meio.
            </p>

            <h3 class="subtitulo">
                Nosso objetivo
            </h3>

            <p>
                Buscando conhecer mais a área verde que nos envolve, o projeto desenvolve, em atividades de extensão
                voltadas
                para a educação ambiental,
                um sistema gamificado de identificação da flora arbórea e arborescente (árvores), bem como o conjunto
                amplo
                de
                plantas alimentícias não
                convencionais (PANCs) e de ervas medicinais do IFPR-Foz.
            </p>
        </div>

        <div id="local">
            <h3 class="subtitulo">
                Onde nós estamos
            </h3>

            <p>
                Av. Araucária, 780 - Vila A, Foz do Iguaçu - PR, 85860-000
            </p>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.0197082142813!2d-54.579028385399354!3d-25.504389242080048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f6907761e60b9d%3A0xd20bd6ad5f147b9a!2sIFPR%20-%20Instituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Foz%20do%20Igua%C3%A7u!5e0!3m2!1spt-BR!2sbr!4v1666209048362!5m2!1spt-BR!2sbr"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps">
            </iframe>
        </div>

        <div id="nos">
            <h3 class="subtitulo">
                Quem somos nós?
            </h3>

            <div class="container">

                <!--MARCELA-->
                <div class="row justify-content-md-left">
                    <div class="d-flex justify-content-start">
                        <div class="img-coord">
                            <img src="../public/marcela.jpg" class="coordenador">
                        </div>
                    </div>

                    <div class="txt-coord align-self-center">
                        <span>
                            <b>MARCELA TURIM KOSCHEVIC</b> <br>
                            Coordenadora da Equipe de Informática <br>
                            <small>marcela.turim@ifpr.edu.br</small>
                        </span>
                    </div>
                </div>


                <!--FRANCO-->
                <div class="row justify-content-md-left">
                    <div class="d-flex justify-content-start">
                        <div class="img-coord">
                            <img src="../public/franco.jpg" class="coordenador">
                        </div>
                    </div>

                    <div class="txt-coord align-self-center">
                        <span>
                            <b>FRANCO HARLOS EZEQUIEL</b> <br>
                            Coordenador da Equipe de Meio Ambiente <br>
                            <small>franco.harlos@ifpr.edu.br</small>
                        </span>
                    </div>
                </div>

                <!--HUMBERTO-->
                <div class="row justify-content-md-left">
                    <div class="d-flex justify-content-start">
                        <div class="img-coord">
                            <img src="../public/humberto.jpg" class="coordenador">
                        </div>
                    </div>

                    <div class="txt-coord align-self-center">
                        <span>
                            <b>HUMBERTO MARTINS BENEDUZZI</b> <br>
                            Coordenador da Equipe de Informática <br>
                            <small>humberto.beneduzzi@ifpr.edu.br</small>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div id="nois">
            <img src="../public/nois.jpg" class="img-fluid alunas">

            <div class="membro">
                <b>MARIA EDUARDA HECK SOUZA BENEDITO</b> <br>
                Desenvolvedora Back-end e Modeladora do Sistema <br>
                <small>mariaehsb@gmail.com</small>
            </div>

            <div class="membro">
                <b>ALANA BRANDÃO DE OLIVEIRA</b> <br>
                Designer UI/UX E Documentadora do Sistema <br>
                <small>oliveiraalanabrandao@gmail.com</small>
            </div>

            <div class="membro">
                <b>MARIA EDUARDA DE OLIVEIRA BECKER</b> <br>
                Desenvolvedora Back-end e Modeladora do Sistema <br>
                <small>dudabecker@gmail.com</small>
            </div>

            <div class="membro">
                <b>NICOLLY TAVASSI DE SOUZA</b> <br>
                Desenvolvedora Front-end<br>
                <small>nicollytavassii@gmail.com</small>
            </div>
        </div>

        <div id="medalhistas">
            <h3 class="subtitulo">
                Somos medalhistas!
            </h3>

            <img class="img-medalha img-fluid" src="../public/medalhistas.png">

            <p>
                3º Lugar na categoria Ciências Exatas e da Terra na XI Feira de Inovação das Ciências e Engenharias
                2022!
            </p>
        </div>

        <div id="apoio">
            <h3 class="subtitulo">
                Com o apoio de
            </h3>

            <div class="container">
                <div class="row  d-flex justify-content-around">
                    <div class="col">
                        <a href="https://foz.ifpr.edu.br/" target="_blank"><img id="ifpr" src="../public/foz-horizontal.png"></a>
                    </div>

                    <div class="col">
                        <a href="https://foz.ifpr.edu.br/iftech-apresentara-prototipos-e-produtos-desenvolvidos-por-diferentes-cursos-do-campus/" target="_blank"><img id="nit" src="../public/nit.png"></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>

</html>