<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }

        td, th {
            border: 1px solid black;
            padding: 20px;
        }
    </style>
    <title>Base de datos</title>
</head>

<body>
    <?php
    $pdo = new PDO('pgsql:host=localhost;dbname=empresa', 'empresa', 'empresa');
    $sent = $pdo->query('select * from departamentos ORDER BY codigo');

    $fila = $sent->fetchAll();
    //var_dump($fila);

    //print_r($fila);
    ?>
    <table>
        <caption>Base de Datos: Empresa</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Denominación</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php foreach ($fila as $filas) { ?>
                    <td> <?php echo $filas['id']; ?> </td>
                    <td> <?php echo $filas['codigo']; ?> </td>
                    <td> <?php echo $filas['denominacion']; ?> </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>

</html>