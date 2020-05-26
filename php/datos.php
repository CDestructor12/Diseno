<html>
    <head>
    <meta charset="UTF-8">
    <title>Insertar Datos</title>
    <link rel="icon" href="../img/ucateci-circulo.png">
    </head>
    <body>
        <?php
        

        $conexion = mysqli_connect("localhost","report","reporte01","bd_estudiantes");
        $acentos = $conexion ->query("SET NAMES 'UTF8'");
        $sql = "INSERT INTO estudiantes(matricula, nombres, apellidos, calif) values ($_REQUEST[matricula],'$_REQUEST[PersonaNombre]','$_REQUEST[PersonaApellido]','$_REQUEST[calif]')";
        $consulta = mysqli_query($conexion, $sql);
        
        if($consulta){
            echo "El alumno ha sido introducido";
        }
        else {
            echo "Error: El alumno no ha sido introducido";
        }
        mysqli_close($conexion);
        ?>
    </body>
</html>