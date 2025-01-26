<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $producto = $_POST['txtproducto'];
        $precio = $_POST['txtprecio'];
        $cantidad = $_POST['txtcantidad'];

        $importe = $cantidad * $precio;

        echo '<div class="resultados">';
        echo '<h3>Resusltado de la venta</h3>';
        echo '<table>';
        echo '<tr><th>Producto</th><td>'.htmlspecialchars($producto).'</td></tr>';
        echo '<tr><th>Cantidad</th><td>'.$cantidad.'</td></tr>';
        echo '<tr><th>Precio</th><td>'.number_format($precio,2).'</td></tr>';
        echo '<tr><th>Importe</th><td>'.number_format($importe,2).'</td></tr>';
        echo '</table>';
        echo '</div>';

    }