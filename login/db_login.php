<!--Establecemos conexion con la BD-->
<?php

            $servidor = "localhost";
            $usuario = "root";
            $contraseña = "";
            $baseDeDatos = "validar";

            $conexion = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);

?>