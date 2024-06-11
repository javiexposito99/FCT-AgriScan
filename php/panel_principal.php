<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag1.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

    <?php    
    session_start();
    ?>

    <div class="cuadernoAgricola">Cuaderno Agrícola</div>
    
    <div class="barra-superior">
        <img src="http://localhost/FCT/img/logo-icono.jpeg">
        <div class="datos-usuario">
            <label id="usuario"><?php echo $_SESSION["userDB"] ?></label>
            <label id="nif">NIF</label>
        </div>    
        <button>Cerrar Sesión</button>
    </div>
    
    <!--Barra superior-->
    <div class="linea-superior"></div>
    <!--Barra lateral de nuestro menu-->

    
    <div class="barra-lateral">
        <div class="elige-año">
            <div id="uno" class="años">2022</div>
            <div id="dos" class="años">2023</div>
            <div id="tres" class="años">2024</div>
        </div>

        <div class="informacion-general">
            <select id="opciones" onchange="irA(this)">
                <option value="/pag1/pag1.php">INFORMACIÓN GENERAL</option>
                <option value="/pag1/pag1.php">1.1 Datos generales de la explotación</option>
                <option value="http://localhost/FCT/pag2/pag2.php">1.2 Personas o empresas que intervienen</option>
                <option value="http://localhost/FCT/pag2/pag2.php">1.3 Equipos de aplicación de productos</option>
                <option value="http://localhost/FCT/pag2/pag2.php">1.4 Agrupación o entidad de asesoramiento</option>
            </select>
        </div>

        <div class="informacion-general">
            <select id="opciones" onchange="irA(this)">
                <option value="/pag3/pag3.php">PARCELAS DE EXPLOTACIÓN</option>
                <option value="/pag3/pag3.php">2.1 Datos identificativos y agronómicos de las parcelas</option>
                <option value="/pag4/pag4.php">2.2 Datos identificativos medioambientales de las parcelas</option>
            </select>
        </div>

        <div class="informacion-general">
            <select id="opciones" onchange="irA(this)">
                <option value="/pag5/pag5.php">TRATAMIENTOS FITOSANITARIOS</option>
                <option value="/pag5/pag5.php">3.1 Registro de actuaciones fitosanitarias de la parcela</option>
                <option value="/pag6/pag6.php">3.1 bis Registro de tratamientos fitosanitarios de la parcela</option>
                <option value="/pag7/pag7.php">3.2 Registro de uso de semilla tratada</option>
                <option value="/pag7/pag7.php">3.3 Registro de tratamientos postcosecha</option>
                <option value="/pag8/pag8.php">3.4 Registro de tratamientos de los locales de almacenamiento</option>
                <option value="/pag8/pag8.php">3.5 Registro de tratamientos de los medios de transporte</option>
            </select>
        </div>

        <div class="informacion-general">
            <select id="opciones" onchange="irA(this)">
                <option value="/pag9/pag9.php">REGISTRO DE ANÁLISIS DE PRODUCTOS</option>
                <option value="/pag9/pag9.php">REGISTRO DE ANÁLISIS DE PRODUCTOS</option>
            </select>
        </div>

        <div class="informacion-general">
            <select id="opciones" onchange="irA(this)">
                <option value="/pag10/pag10.php">COSECHA COMERCIALIZADA</option>
                <option value="/pag10/pag10.php">COSECHA COMERCIALIZADA</option>
            </select>
        </div>

        <div class="informacion-general">
            <select id="opciones" onchange="irA(this)">
                <option value="/pag11/pag11.php">REGISTRO DE FERTILIZACIÓN</option>
                <option value="/pag11/pag11.php">REGISTRO DE FERTILIZACIÓN</option>
            </select>
        </div>            

        <div class="informacion-general">
            <select id="opciones" onchange="irA(this)">
                <option value="/pag12/pag12.php">DOCUMENTACIÓN</option>
                <option value="/pag12/pag12.php">DOCUMENTACIÓN</option>
            </select>
        </div>

        <div class="exportar">
            <button>Exportar a PDF</button>
        </div>


    </div>


   
    
    <!--Cuadro principal panel 1.1-->
    <div class="panel-principal-11">
        
        <img src="http://localhost/FCT/img/portada.img">

    
        
        
    </div>  


        

    <script src="/js/script.js"></script>
</body>
</html>