<?php
$cliente = "Juan Perez";
$producto = "Teclado";
$precio = 45.8;
$cantidad = 4;
$pdescuento = 2/100;
$descuento = 0;

$importe = $cantidad*$precio;
if ($importe > 200){
    $descuento = $pdescuento * $importe;

}
$tpagar = $importe - $descuento;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="factura">
        <h1>Factura del cliente</h1>
        <p class="colorp"><strong>Cliente: </strong><?=$cliente ?></p>
        <p class="colorp"><strong>Producto: </strong><?=$producto?></p>
        <p class="colorp"><strong>Precio: </strong><?=$precio?></p>
        <p class="colorp"><strong>Cantidad: </strong><?=$cantidad?></p>
        <hr>
        <p><strong>Importe: </strong><?=$importe?></p>
        <p><strong>Descuento: </strong><?=$descuento?></p>
        <p><strong>Total a pagar: </strong><?=$tpagar?></p>
    </div>
</body>
</html>