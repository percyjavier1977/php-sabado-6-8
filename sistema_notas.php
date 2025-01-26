<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>SISTEMA DE NOTAS</h1>
    <form action="datos.php" method="post">
        <label for="">Nombres:</label>
        <input type="text" name="txtnombre" id="" placeholder="Ingrese sus nombre" >

        <label for="">Curso:</label>
        <input type="text" name="txtcurso" id="" placeholder="Ingrese el curso">

        <label for="">Nota 1:</label>
        <input type="number" name="n1" id="">

        <label for="">Nota 2:</label>
        <input type="number" name="n2" id="">

        <label for="">Nota 3:</label>
        <input type="number" name="n3" id="">

        <br><br>
        <input type="submit" value="Enviar datos">
        <br><br>
        <input type="reset" value="Limpiar datos">


    </form>
</body>
</html>