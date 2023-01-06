<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar conta</title>


    <!--FAVICON-->
    <link rel="icon" href="../public/favicon.svg">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index2.css">

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
</head>
<body>
<?php
	//include_once __DIR__ . "/../helpers/mensagem.php";
	//$caminho = __DIR__ . "/../helpers/mensagem.php";
	//print_r($caminho); 
?>
<h2>Editar Dados</h2>
</p>
<?php foreach($data['usuario'] as $user): ?>
	<form action="./UserController.php?action=update&id=<?= $user->getId()?>" method="POST">
		Nome: <input type="text" name="field_nome" value="<?= $user->getNomeUsuario(); ?>">
		<br>
		Email: <input type="text" name="field_email" value="<?= $user->getEmail(); ?>">
        <br>
        Senha: <input type="password" name="field_password" value="<?= $user->getPassword(); ?>">
		<br>
        gênero<select name="field_genero">
              <option value="<?= $user->getGenero(); ?>"></option>
              <option value="feminino"> feminino </option>
              <option value="masculino"> masculino </option>
              <option value="outro"> outro </option>
              </select>
            <br>
        nível de escolaridade <br>
                <select name="field_escolaridade">
                <option value ="<?= $user->getEscolaridade(); ?>"></option>
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




