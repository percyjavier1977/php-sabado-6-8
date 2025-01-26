<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylos.css">
    <title>Document</title>
</head>
<body>
    <form action="ventas.php" method="post">
        <h2>SISTEMA DE VENTAS</h2>
        <label for="">Producto:</label>
        <input type="text" name="txtproducto" id="">

        <label for="">Precio unitario:</label>
        <input type="number" name="txtprecio" id="">

        <label for="">Cantidad:</label>
        <input type="number" name="txtcantidad" id="">

        <br><br>
        <input type="submit" value="Calcular">

    </form>
</body>
</html>