<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

    <h1>Usuarios</h1>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">opcoes</th>

    </tr>
  </thead>
  <tbody>
  
  <?php foreach($data['usuarios'] as $user): ?>

    <tr>
      <th scope="row"><?= $user->getId() ?></th>
      <td><?= $user->getUsername() ?></td>
      <td><?= $user->getEmail() ?> </td>
      <td><?= $user->getPassword() ?></td>
      <td><a href="<?= $user->getId() ?>"> mostrar usuario</a></td>
    </tr>

    <?php endforeach; ?>
    
  </tbody>
</table>



    </div>

</body>
</html>
