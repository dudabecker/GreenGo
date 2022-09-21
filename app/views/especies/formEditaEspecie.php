<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	include_once __DIR__ . "/../helpers/mensagem.php";
	//$caminho = __DIR__ . "/../helpers/mensagem.php";
	//print_r($caminho); 
?>
<h2>Editar especie</h2>
<p/>
<?php foreach($data['especies'] as $especie): ?>
	<form action="./EspecieController.php?action=update&idEspecie=<?= $especie->getIdEspecie()?>" method="POST">
		Nome Popular: <input type="text" name="nomePop" value="<?= $especie->getNomePop(); ?>">
		<br>
		Nome Cientifico: <input type="text" name="nomeCie" value="<?= $especie->getNomeCie(); ?>">
		<br>
		Frutifera: <input type="text" name="frutifera" value="<?= $especie->getFrutifera(); ?>">
		<p/>
		<input type="submit" value="Atualizar">
		<input type="reset" value="Limpar">
	</form>		
<?php endforeach; ?>

</body>
</html>