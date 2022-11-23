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
<h2>Editar Dados</h2>
</p>
<?php foreach($data['usuarios'] as $user): ?>
	<form action="./UserController.php?action=update&id=<?= $user->getId()?>" method="POST">
		Nome: <input type="text" name="field_nome" value="<?= $user->getUsername(); ?>" placeholder="<?= $user->getUsername(); ?>">
		<br>
		Email: <input type="text" name="field_email" value="<?= $user->getEmail(); ?>">
        <br>
        Senha: <input type="password" name="field_password" value="<?= $user->getPassword(); ?>">
		<br>
        gênero<select name="field_genero">
              <option value="feminino"> feminino </option>
              <option value="masculino"> masculino </option>
              <option value="outro"> outro </option>
              </select>
            <br>
        nível de escolaridade <br>
                <select name="field_escolaridade">
                    <option value="ensino fundamental 1"> ensino fundamental 1 </option>
                    <option value="ensino fundamental 2"> ensino fundamental 2 </option>
                    <option value="ensino medio"> ensino médio </option>
                    <option value="ensino superior"> ensino superior </option>
                </select>    
</p>
		<input type="submit" value="Salvar">
		<input type="reset" value="Limpar">
	</form>		
<?php endforeach; ?>
