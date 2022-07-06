<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

    <h1>Zonas</h1>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Quantidade de plantas</th>
      <th scope="col">opcoes</th>
    </tr>
  </thead>
  <tbody>
  
  <?php foreach($data['zonas'] as $zona): ?>

    <tr>
      <th scope="row"><?= $zona -> getIdZona() ?></th>
      <td><?= $zona->getQntPlantas() ?> </td>
      <td><a href="<?= $zona->findZonaByIdZona($idParam) ?>"> mostrar zona </a></td>
    </tr>

    <?php endforeach; ?>
    
  </tbody>
</table>





    </div>

</body>
</html>
