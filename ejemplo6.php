<?php
$cliente = "Juan Perez";
$producto = "Teclado";
$precio = 45.8;
$cantidad = 4;
$pdescuento = 2/100;
$descuento = 0;

$importe = $cantidad*$precio;

//Calcular el descuento: Si su importe supera los 200 aplica el 2% del importe

if ($importe > 200){
    $descuento = $pdescuento * $importe;

}


echo"El importe es: $importe"."<br>";
echo"El descuento es: $descuento"."<br>";
echo"El total a pagar es: $importe - $descuento";