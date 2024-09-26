<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana</title>
    <link rel="stylesheet" href="../index.css">
</head>

<body>

    <?php
    $num1 = $_GET['num1'];
    if ($num1<8 && $num1 > 0) {
        switch ($num1) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miércoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sábado";
                break;
            case 7:
                echo "Domingo";
                break;
        }
    } else {
        echo ("Número introducido incorrecto");
    }
    
    ?>
        <a href="semana.html">Volver</a>


</body>

</html>