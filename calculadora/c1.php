<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAA</title>
</head>

<body>
    <?php
    require 'auxiliar.php';

    
    $op1 = trim($_GET['op1']);
    $op2 = trim($_GET['op2']);
    $op = trim($_GET['op']);

    $res = calcular_resultado($op1, $op2, $op);

    ?>
    <p>
        Resultado: <?= $res ?>
    </p>
</body>
</html>