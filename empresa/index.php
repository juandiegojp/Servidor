<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
</head>
<body>
    <?php
    $pdo = new PDO('pgsql:host=localhost;dbname=empresa', 'empresa', 'empresa');
    $sent = $pdo->query('select * from departamentos ORDER BY codigo');
    
    $fila = $sent->fetchAll();
    //var_dump($fila);
    print_r($fila);
    ?>
</body>
</html>