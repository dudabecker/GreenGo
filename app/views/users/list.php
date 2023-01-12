<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuários</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>

  <div class="container">

    <h1>Usuarios</h1>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nome</th>
          <th scope="col">genero</th>
          <th scope="col">escolaridade</th>
          <th scope="col">email</th>
          <th scope="col">ver perfil</th>
          <th scope="col"> editar </th>

        </tr>
      </thead>
      <tbody>

        <?php foreach ($data['usuarios'] as $user): ?>

        <tr>
          <th scope="row">
            <?= $user['id'] ?>
          </th>
          <td>
            <?= $user['nomeUsuario'] ?>
          </td>
          <td>
            <?= $user['genero'] ?>
          </td>
          <td>
            <?= $user['escolaridade'] ?>
          </td>
          <td>
            <?= $user['email'] ?>
          </td>

          <td> <a href='../controllers/UserController.php?action=verPerfil&id=<?= $user['id'] ?>'> Mostrar
              usuario</a> </td>
          <td><a href='../controllers/UserController.php?action=edit&id=<?= $user['id']?>'> Editar </a> </td>

        </tr>

        <?php endforeach; ?>

      </tbody>
    </table>



  </div>

</body>

</html>