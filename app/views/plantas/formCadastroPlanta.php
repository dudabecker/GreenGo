<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Cadastro de plantas</h2>

<form action="./PlantaController.php?action=create" method="POST">
	Zona: <input type="text" name="idZona">
	<br>
    especie: <input type="text" name="idEspecie">
	<br>
	Código Númerico <input type="text" name="codNumerico">
	<br>
    Código QR: <input type="text" name="codQR">
	<br><br>

	<input type="submit" value="Registrar">
	<input type="reset" value="Limpar">
</form>		
</body>
</html>