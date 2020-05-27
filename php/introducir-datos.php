<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar Datos</title>
        <link rel="icon" href="../img/ucateci-circulo.png">
        <link rel="stylesheet" href="../css/stilos-principal.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <body style="background-color: white;"></body>

    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="../index.html">Home</a>  
            <a href="./lista-reportes-v1.php">Codigo Version 1.0</a>
            <a href="./lista-reportes-v2.php">Codigo Version 2.0</a>
            <a href="./lista-reportes-v3.php">Codigo Version 3.0</a>
            <a class="active" href="./introducir-datos.php">Introducir datos</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <br>
        <form action="datos.php" method="post">
            Nombre:
            <input type="text" name="PersonaNombre"><br>
            Apellido:
            <input type="text" name="PersonaApellido"><br>
            Matricula:
            <input type="number" name="matricula"><br>
            Calificación:
            <input type="text" name="calif"><br>
            <input type="submit" value="INSERTAR">
        </form>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                }
                else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>