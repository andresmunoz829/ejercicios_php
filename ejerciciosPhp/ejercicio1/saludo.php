<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <h3>
        <?php
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            echo ("Saludos $nombre $apellido")
        ?>
    </h3>
    
</body>
</html>