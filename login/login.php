<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link href="http://localhost/FCT/login/login.css" type="text/css" rel="stylesheet">


</head>
<body>

    <div class="container">
        <form action="validar.php" method="POST">
            <h5>Cuaderno de campo</h5>

            <img id="logo-login" src="http://localhost/FCT/img/logo-icono.jpeg">
            <h1 id="titulo">Iniciar Sesión</h1>
            <div class="datos-form">
                <input id="nif" type="text" placeholder=" NIF" name="usuario">
                <input id="contraseña" type="password" placeholder=" Contraseña" name="contraseña">
                <div class="checkbox">
                    <input type="checkbox">
                    <label>¿Olvidaste tu contraseña?</label>
                </div>
                <input type="submit" name="enviar" id="enviar_login">
            </div>    
        
        </form>

        <form action="http://localhost:8080/health" method="GET" >
           
                <input type="submit" name="enviar" id="enviar_login" value="LLAMAR API">
            </div>    
        
        </form>
    </div>
</body>
</html>