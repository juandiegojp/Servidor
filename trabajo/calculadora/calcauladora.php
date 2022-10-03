<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <p>Resultado: </p>
    <?php
    /**
     * Ricardo ha trimeado los valores pasados por el usuario.
     * Lo que es lo mismo, hacer trim($_GET['op1']).
     */

    switch ($_GET['operador']) {
        case 'suma':
            echo $_GET['op1'] + $_GET['op2'];
            break;
        case 'resta':
            echo $_GET['op1'] - $_GET['op2'];
            break;
        case 'multiplicar':
            echo $_GET['op1'] * $_GET['op2'];
            break;
        case 'dividir':
            echo $_GET['op1'] / $_GET['op2'];
            break;
        default:
            echo "No entiendo qué estás haciendo.";
            break;
    }
    ?>
</body>

</html>