<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonas</title>
</head>
<body>


    <h1>Zonas</h1>

    <ul>
        <?php foreach($data['zonas'] as $zona): ?>

            <li>
                <?= $zona['idZona'] ?>
                <?= $zona['qntPlantas'] ?>
            </li>

        <?php endforeach; ?>
    </ul>
    
</body>
</html>