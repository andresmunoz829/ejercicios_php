<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <h3>
        <?php
            $edad = $_GET['edad'];
            if ($edad>0) {
                if ($edad<13) {
                    echo("Infante");
                } elseif($edad>12&&$edad<18) {
                    echo("Adolescente");
                } elseif($edad>17&&$edad<61) {
                    echo("Adulto");
                } else {
                    echo("Anciano");
                }
            } else {
                echo("Número incorrecto, debe ser mayor a 0");
            }
            
            
        ?>
    </h3>
    <a href="edad.html">Volver</a>
    
</body>
</html>