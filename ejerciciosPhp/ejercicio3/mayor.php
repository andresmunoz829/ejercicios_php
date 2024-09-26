<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <h3>
        <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];
        if ($num1 > $num2 && $num1 > $num3) {
            echo("El número 1 es el mayor " .$num1 );
        } elseif($num2>$num1 && $num2>$num3) {
            echo("El número 2 es el mayor " . $num2);
        } else {
            echo("El número 3 es el mayor ". $num3);
        }
        
        ?>
        <br><br>
        <a href="mayor.html">Volver</a>
    </h3>
    
</body>
</html>