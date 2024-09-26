<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <?php
    $num1 = $_GET['num1'];
    $suma = 0;
    for ($i = 1; $i <= $num1; $i++) {
        $suma += $i;
    }
    echo("La suma de todos los números hasta " .$num1 . "<br>es " . $suma);
    ?><br><br>
<a href="suma.html">Volver</a>
</body>
</html>