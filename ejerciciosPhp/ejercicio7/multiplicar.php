<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <h3>
        <?php
            $num1 = $_GET['num1'];
            $multiplicacion = 0;

            if ($num1>0&& $num1<11) {
                for ($i=1; $i <= 10 ; $i++) { 
                    $multiplicacion = $num1*$i;
                   echo("$num1 * $i = " . $multiplicacion . "<br>");
                }
            } else {
                echo("Dime un número del 1 al 10");
            }
            
        ?>
    </h3>
    <a href="multiplicar.html">Volver</a>
    
</body>
</html>