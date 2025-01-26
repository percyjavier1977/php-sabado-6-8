<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nombre = $_POST['txtnombre'];
    $curso = $_POST['txtcurso'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $promedio = ($n1+$n2+$n3)/3;
    $promedio = round($promedio);
    if ($promedio > 10){
        $obs = "Aprobado";

    }else{
        $obs = "Desaprobado";
    }
    
    echo "Alumno: $nombre"."<br>";
    echo "Curso: $curso"."<br>";
    echo "Nota 1: $n1 "."<br>";
    echo "Nota 2: $n2 "."<br>";
    echo "Nota 3: $n3 "."<br>";
    echo "El promedio es: $promedio "."<br>";
    echo "Observación: $obs "."<br>";
  
    



}