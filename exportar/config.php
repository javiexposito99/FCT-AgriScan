<!DOCTYPE html>
<html lang="es">

<head>

</head>

<body>

    <!--Documento php para guardar los datos en la bbdd-->
    <?php

        $servidor = "localhost";
        $usuario = "root";
        $contraseña = "";
        $baseDeDatos = "datosfct";

        $enlace = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);

    ?>

    <script src="/js/script.js"></script>
</body>
</html>