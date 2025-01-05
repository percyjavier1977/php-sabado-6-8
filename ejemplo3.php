<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Aritméticas</title>
</head>
<body>
    <h1>OPERACIONES BÁSICAS ARITMÉTICAS</h1>
    <?php
    $n1 = 5;
    $n2 = 4;
    $suma = $n1 + $n2;
    $resta = $n1 - $n2;
    $multi = $n1 * $n2;
    $divi = $n1 / $n2;

    echo"La suma es: $suma"."<br>";
    echo"La resta es: $resta"."<br>";
    echo"La multiplicación es: $multi"."<br>";
    echo"La división es: $divi"."<br>";
    ?>
    <p>Se han realizado operaciones matemáticas con los números <strong><?php echo $n1 ?>
    </strong> y <strong><?php echo $n2 ?></strong></p>
</body>
</html>