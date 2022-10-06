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
    $cadena1 = preg_replace('/\s+/', '', $_GET['adn1']);
    $cadena2 = preg_replace('/\s+/', '', $_GET['adn2']);
    $error = null;

    /* if (comprobar_cadenas($cadena1, $cadena2, $error)) {?> 
        <p> <?= "funcionaa??" ?> </p> <?php
    } */ ?>

        
    <p> <?= $error ?> </p>
    <p> <?= $cadena1 ?> </p>
    <p> <?= $cadena2 ?> </p>
    <p> <?= hamming($cadena1, $cadena2) ?> </p>
</body>
</html>
