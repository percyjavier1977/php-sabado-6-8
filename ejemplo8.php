<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nota1 = $_POST['txtnota1'];
    $nota2 = $_POST['txtnota2'];
    $nota3 = $_POST['txtnota3'];

    $promedio = ($nota1+$nota2+$nota3)/3;
    $promedio = round($promedio);
    $notamaxima = max($nota1,$nota2,$nota3);
    $notaminima = min($nota1,$nota2,$nota3);

    if ($promedio>10){
        $obs = "Aprobado";
    }else{
        $obs="Desaprobado";
    }

    echo "El promedio es: $promedio"."<br>";
    echo "El nota máxima es: $notamaxima"."<br>";
    echo "El nota mínima es: $notaminima"."<br>";
    echo "La observación es: $obs"."<br>";

}
?>

