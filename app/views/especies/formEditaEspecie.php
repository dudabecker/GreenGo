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