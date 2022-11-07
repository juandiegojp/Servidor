<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
    <title>Biblioteca</title>
</head>

<body>
    <?php
    require 'comunes/auxiliar.php';
    $pdo = conectar();
    $pdo->beginTransaction();
    $pdo->exec('LOCK TABLE libros IN SHARE MODE');
    $where = [];
    $execute = [];
    $sent = $pdo->prepare("SELECT * FROM libros ORDER BY id");
    $sent->execute();
    $pdo->commit();
    ?>
    <table>
        <thead>
            <th>Título</th>
            <th>Fecha de Lanzamiento</th>
            <th>Autor</th>
            <th>Categoría</th>
            <th>Editorial</th>
        </thead>
        <tbody>
            <?php foreach ($sent as $fila) : ?>
                <tr>
                    <td><?= $fila['titulo'] ?></td>
                    <td><?= $fila['fecha_lanzamiento'] ?></td>
                    <td><?= $fila['autor'] ?></td>
                    <td><?= $fila['categoria'] ?></td>
                    <td><?= $fila['editorial'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>