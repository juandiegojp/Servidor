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
            margin: auto;
        }

        fieldset {
            display: flex;
            flex-direction: column;
            align-items: center;
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

    $codigo1 = (isset($_GET['codigo1'])) ? trim($_GET['codigo1']) : null;
    $codigo2 = (isset($_GET['codigo2'])) ? trim($_GET['codigo2']) : null;
    $denominacion = (isset($_GET['denominacion'])) ? trim($_GET['denominacion']) : null;
    ?>

    <div>
        <form action="" method="get">
            <fieldset>
                <legend>Criterios de búsqueda: </legend>
                <label>Desde Código
                    <input type="text" size="8" name="codigo1" id="codigo1" value="<?= $codigo1 ?>">
                </label>
                <label>Hasta Código
                    <input type="text" size="8" name="codigo2" id="codigo2" value="<?= $codigo2 ?>">
                </label>
                <label>Denominación
                    <input type="text" size="8" name="denominacion" id="denominacion" value="<?= $denominacion ?>">
                </label>
                <button type="submit">Buscar</button>
            </fieldset>
        </form>
    </div>
    <?php
    $pdo = new PDO('pgsql:host=localhost;dbname=empresa', 'empresa', 'empresa');
    $pdo->beginTransaction();
    $sent = $pdo->query('LOCK TABLE departamentos IN SHARE MODE');
    $sent = $pdo->prepare('SELECT COUNT(*) 
                            FROM departamentos 
                            WHERE codigo <= :codigo2 AND codigo >= :codigo1 
                            AND denominacion = :denominacion');
    $sent->execute([':codigo1' => $codigo1,':codigo2' => $codigo2, ':denominacion' => $denominacion]);
    $total = $sent->fetchColumn();
    $sent = $pdo->prepare('SELECT * 
                        FROM departamentos
                        WHERE codigo <= :codigo2 AND codigo >= :codigo1 
                        AND denominacion = :denominacion
                        ORDER BY codigo');
    $sent->execute([':codigo1' => $codigo1,':codigo2' => $codigo2, ':denominacion' => $denominacion]);
    $pdo->commit();
    ?>
    <table>
        <caption>Base de Datos: Empresa</caption>
        <thead>
            <tr>
                
                <th>Código</th>
                <th>Denominación</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($sent as $filas) { ?>    
            <tr>
                    <td> <?php echo $filas['codigo']; ?> </td>
                    <td> <?php echo $filas['denominacion']; ?> </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php  ?>
    <p> Número total de filas: <?php echo $total ?> </p>
</body>
</html>