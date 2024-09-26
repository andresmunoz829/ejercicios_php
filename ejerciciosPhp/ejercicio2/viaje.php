<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viaje</title>
</head>
<body>
    <h3>
        <?php
        $distancia = $_GET['distancia'];
        $velocidad = $_GET['velocidad'];
        $tiempo = $distancia / $velocidad;
        echo("El tiempo en llegar es: " . round($tiempo, 2));
        ?>
    </h3>
    
</body>
</html>