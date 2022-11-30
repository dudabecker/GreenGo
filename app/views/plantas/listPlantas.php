<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <link rel="stylesheet" type="text/css" href="../views/helpers/estilos.css">
    <script src="../views/helpers/funcoescrud.js" type="text/javascript"></script>


</head>
<body>
<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	//include_once __DIR__ . "/../helpers/mensagem.php";
	//$caminho = __DIR__ . "/../helpers/mensagem.php";
	//print_r($caminho); 
?>
    
    <h1>Plantas</h1>
    <ul>
        <?php foreach($data['plantas'] as $planta): ?>

            <li>
                Identificação da Planta: <?= $planta['idPlanta'] ?><br>
                Espécie: <?= $planta['idEspecie'] ?><br>
                Zona: <?= $planta['idZona'] ?><br>
                Código Numérico: <?= $planta['codNumerico'] ?><br>
                Codigo QR: <?= $planta['codQR'] ?><br><br>
                [ <a href="./PlantaController.php?action=edit&idPlanta=<?= $planta['idPlanta'] ?>">Editar</a> ] 
                [ <a href="./PlantaController.php?action=deletePlantaById&id=<?= $planta['idPlanta'] ?>">Excluir</a> ]<br><br>
            </li>             
        <?php endforeach; ?>
    </ul>

    [ <a href="./PlantaController.php?action=loadFormNew">Cadastrar novo</a> ]
    
</body>
</html>