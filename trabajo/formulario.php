<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del cliente</title>
</head>
<body>
    <ul>
        <li> DNI:
            <?php echo $_POST['dni']; ?>
        </li>
        <li> Nombre:
            <?php echo $_POST['nombre']; ?>
        </li>
    </ul>
    <a href="formulario.html">Volver</a>
</body>
</html>