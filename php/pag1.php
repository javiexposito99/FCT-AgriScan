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
    

    <div class="cuadernoAgricola">Cuaderno Agrícola</div>
    
    <div class="barra-superior">
        <img src="http://localhost/FCT/img/logo-icono.jpeg">
        <div class="datos-usuario">
            <label id="usuario">Usuario</label>
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
        


        <h2>INFORMACIÓN GENERAL</h2>
        
        <div class="fecha-apertura">
            <h4>FECHA DE APERTURA DEL CUADERNO</h4>
            <span id="fecha"></span>
        </div> 
        
        <!--Documento php para guardar los datos en la bbdd-->
        <?php

            $servidor = "localhost";
            $usuario = "root";
            $contraseña = "";
            $baseDeDatos = "datosfct";

            #$enlace = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);

        ?>

        <form action="#" name="pag1" method="post">
            <table id="datos-generales-11">
                <tr>
                    <th colspan="5">1.1 DATOS GENERALES DE LA EXPLOTACIÓN</th>
                </tr>
                <tr>
                    <td colspan="3">NOMBRE Y APELLIDOS O RAZÓN SOCIAL:<input id="input-na" name="nombre" type="text"></td>
                    <td colspan="3">NIF:<input id="input-nif" name="nif" type="text"></td>
                </tr>
                <tr>
                    <td colspan="2">Nº Registro de Explotaciones Nacional:<input id="input-registro" name="explotacionesNacionales" type="text"></td>
                    <td colspan="3">Nº Registro de Explotaciones Autonómico:<input id="input-registro2" name="explotacionesAutonomo" type="text"></td>
                </tr>
                <tr>
                    <td>Dirección:<input id="input-direcion" name="direcion" type="text"></td>
                    <td colspan="2">Localidad:<input id="input-localidad" name="localidad" type="text"></td>
                    <td>C. Postal:<input id="input-codigoPostal" name="codigoPostal" type="text"></td>
                    <td>Provincia:<input id="input-provincia" name="provincia" type="text"></td>
                </tr>
                <tr>
                    <td>Teléfono fijo:<input id="input-tlf-fijo" name="tlfFijo" type="text"></td>
                    <td colspan="2">Teléfono móvil:<input id="input-tlf-movil" name="tlfMovil" type="text"></td>
                    <td colspan="2">e-mail:<input id="input-email" name="email" type="text"></td>
                </tr>
                <tr>
                    <th colspan="5">TITULAR O REPRESENTANTE DE LA EXPLOTACIÓN</th>
                </tr>
                <tr>
                    <td colspan="3">Nombre y apellidos:<input id="input-na2" type="text"></td>
                    <td colspan="2">NIF:<input id="input-nif" type="text"></td>
                </tr>
                <tr>
                    <td>Dirección:<input id="input-direcion" type="text"></td>
                    <td colspan="2">Localidad:<input id="input-localidad" type="text"></td>
                    <td>C. Postal:<input id="input-codigoPostal" type="text"></td>
                    <td>Provincia:<input id="input-provincia" type="text"></td>
                </tr>
                <tr>
                    <td>Tipo de representación:<input id="input-representacion" name="tipoRepresentacion" type="text"></td>
                    <td colspan="2">Teléfono:<input id="input-tlf" type="text"></td>
                    <td colspan="2">e-mail:<input id="input-email" type="text"></td>
                </tr>

                <input type="submit" name="registro">
                <input type="reset">
                
            </table>
        </form>

        <!--Mas documento php-->
        <?php
            if(isset($_POST['registro'])){
                $nombre = $_POST['nombre'];
                $nif = $_POST['nif'];
                $explotacionesNacionales = $_POST['explotacionesNacionales'];
                $explotacionesAutonomo = $_POST['explotacionesAutonomo'];
                $direcion = $_POST['direcion'];
                $localidad = $_POST['localidad'];
                $codigoPostal = $_POST['codigoPostal'];
                $provincia = $_POST['provincia'];
                $tlfFijo = $_POST['tlfFijo'];
                $tlfMovil = $_POST['tlfMovil'];
                $email = $_POST['email'];
                $tipoRepresentacion = $_POST[''];

                $insertarDatosTabla = "INSERT INTO pag1 VALUES('$nombre','$nif','$explotacionesNacionales','$explotacionesAutonomo','$direcion',
                                                                '$localidad','$codigoPostal','$provincia','$tlfFijo','$tlfMovil','$email','$')";
            
                $ejecutarInsertar = mysqli_query($enlace, $insertarDatosTabla);
        
            }
           

        ?>
        



        <div class="cuadro-firma"></div>
        <div class="footer">
            <span id="primer-p">(1) La persona firmante se hace responsable de la veracidad de los datos consignados en el presente cuaderno de explotación.</span>
            <div class="footer-1">
                <h5>Explotación/ Titular de la explotación:</h5>
                <input id="primer-input" type="text">
                <h5>AÑO:</h5>
                <input id="segundo-input" type="text">
            </div>
            <div class="footer-2">
                <p>Hoja nº <input id="input-nhoja" type="text"> de la sección nº <input id="input-nseccion" type="text"></p>
            </div>
        </div>
    </div>


    <script src="/js/script.js"></script>
</body>
</html>