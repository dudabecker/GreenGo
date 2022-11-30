<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Editar planta</h2>

<form action="./PlantaController.php?action=update&idPlanta<?= $planta['idPlanta']?>" method="POST">
	Espécie: <input type="text" name="idEspecie" placeholder="<?= $planta['idEspecie']?>" >
	<br>
	Zona: <input type="text" name="idZona" placeholder="<?= $planta['idZona']?>">
	<br>
	Código Númerico <input type="text" name="codNumerico" placeholder="<?= $planta['codNumerico']?>" >
	<br>
    Código QR: <input type="text" name="codQR" placeholder="<?= $planta['codQR']?> ">
	<br><br>

	<input type="submit" value="Atualizar">
	<input type="reset" value="Limpar">
</form>		
</body>
</html>