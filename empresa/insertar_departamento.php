<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        fieldset {
            text-align: center;
        }

        input,
        a,
        button {
            margin: 0px 10px 5px;
        }
    </style>
    <title>Insertar Departamentos</title>
</head>

<body>
    <?php
    require 'auxiliar.php';

    $codigo = obtener_post('codigo');
    $denominacion = obtener_post('denominacion');

    if (isset($codigo, $denominacion)) {
        $pdo = conectar();
        $sent = $pdo->prepare("INSERT
                                 INTO departamentos (codigo, denominacion)
                               VALUES (:codigo, :denominacion)");
        $sent->execute([
            ':codigo' => $codigo,
            ':denominacion' => $denominacion,
        ]);
        return volver();
    }
    ?>
    <fieldset>
        <legend>Datos:</legend>
        <form action="" method="post">
            <label>
                Código:
                <input type="text" name="codigo" size="10" value="<?= $codigo ?>">
            </label>
            </div>
            <div>
                <label>
                    Denominación:
                    <input type="text" name="denominacion" value="<?= $denominacion ?>">
                </label>
        </form>
        <button type="submit">Enviar</button>
        <a href="index.php">volver</a>
    </fieldset>
</body>

</html>