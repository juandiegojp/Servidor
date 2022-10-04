<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamming</title>
</head>
<body>
    <?php
    require 'auxiliar.php';
    $op = trim($_GET['adn1']);
    $cadena1 = trim($_GET['adn1']);
    $cadena2 = trim($_GET['adn2']);
    $error = null;
    
    comprobar_cadenas($cadena1, $cadena2, $error);
    ?>
    <p> <?= trim($_GET['adn1']); ?> </p>
    <p> <?= $op ?> </p>
</body>
</html>
