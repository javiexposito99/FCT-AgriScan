
<!--Proceso para validar los datos enviados del login-->
<?php

/*Llamamos a la conexión de la BD.*/
include('db_login.php');

$userDB = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

/*Consulta a la tabla usuarios de mi BD.*/
$consulta="SELECT * FROM rol where usuario='$userDB' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

/*Variable fila con el objetivo de objetivo de obtener los datos.*/
$filas=mysqli_num_rows($resultado);
/*Creamos un metodo de inicio de sesion*/
session_start();
$_SESSION["userDB"]=$userDB;

if($filas){
    
    header("location:../panel_principal/panel_principal.php"); //Si es correcto que me direccione a dicha página.
}else{
    include("login.php"); //En el caso de no ser correcto. Me redireccione a la misma página de nuevo.
    ?>
    <h5 class="error-login">ERROR DE AUTENTIFICACIÓN</h5>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);











