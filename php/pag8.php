<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag8.css" type="text/css" rel="stylesheet">


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

        <!--Cuadro principal-->
        <div class="panel-principal">
            <h2>3. INFORMACIÓN SOBRE TRATAMIENTOS FITOSANITARIOS</h2>

            <!--Documento php para guardar los datos en la bbdd-->
            <?php

                $servidor = "localhost";
                $usuario = "root";
                $contraseña = "";
                $baseDeDatos = "datosfct";

                #$enlace = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);
            ?>
               
            <form action="#" name="pag6" method="post">   
                <table id="datos-generales-11">
                    <tr>
                        <th colspan="10">3.4 REGISTRO DE TRATAMIENTOS DE LOS LOCALES DE ALMACENAMIENTO
                        </th>
                    </tr>
                    <tr>
                        <td colspan="10"><strong>APLICA TRATAMIENTO: <input id="yes1" type="checkbox"> SI <input id="no1" type="checkbox"> NO (1)</strong></td>
                    </tr>
                    <tr>
                        <td colspan="1" rowspan="2"><strong>Fecha</strong></td>
                        <td colspan="1" rowspan="2"><strong>Local tratado (tipo y dirección)</strong></td>
                        <td colspan="2" rowspan="2"><strong>Problemática Fitosanitaria</strong></td>
                        <td colspan="1" rowspan="2"><strong>Volumen tratado (m3)</strong></td>
                        <td colspan="5"><strong>Producto</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Nombre comercial</strong></td>
                        <td><strong>Nº Registro</strong></td>
                        <td><strong>Cantidad utilizada (kg o l)</strong></td>
                    </tr>
                    <tr>    
                        <td><input id="input_fecha_tabla1" name="fechaTabla1" type="text"></td>
                        <td><input id="input_tratado_tabla1" name="tratadoTabla1" type="text"></td>
                        <td colspan="2"><input id="input_problematica_tabla1" name="problematicaTabla1" type="text"></td>
                        <td><input id="input_volumen_tabla1" name="volumenTabla1" type="text"></td>
                        <td><input id="input_nombrecomercial_tabla1" name="nombrecomercialTabla1" type="text"></td>
                        <td><input id="input_n_registro" name="nRegistroTabla1" type="text"></td>
                        <td><input id="input_cantidad_utilizada" name="cantidadUtilizadaTabla1" type="text"></td>
                    </tr>
                    <tr>
                        <td><input id="input_fecha_tabla1" name="fechaTabla1" type="text"></td>
                        <td><input id="input_tratado_tabla1" name="tratadoTabla1" type="text"></td>
                        <td colspan="2"><input id="input_problematica_tabla1" name="problematicaTabla1" type="text"></td>
                        <td><input id="input_volumen_tabla1" name="volumenTabla1" type="text"></td>
                        <td><input id="input_nombrecomercial_tabla1" name="nombrecomercialTabla1" type="text"></td>
                        <td><input id="input_n_registro" name="nRegistroTabla1" type="text"></td>
                        <td><input id="input_cantidad_utilizada" name="cantidadUtilizadaTabla1" type="text"></td>
                    </tr>
                    <tr>
                        <td><input id="input_fecha_tabla1" name="fechaTabla1" type="text"></td>
                        <td><input id="input_tratado_tabla1" name="tratadoTabla1" type="text"></td>
                        <td colspan="2"><input id="input_problematica_tabla1" name="problematicaTabla1" type="text"></td>
                        <td><input id="input_volumen_tabla1" name="volumenTabla1" type="text"></td>
                        <td><input id="input_nombrecomercial_tabla1" name="nombrecomercialTabla1" type="text"></td>
                        <td><input id="input_n_registro" name="nRegistroTabla1" type="text"></td>
                        <td><input id="input_cantidad_utilizada" name="cantidadUtilizadaTabla1" type="text"></td>
                    </tr>
                </table>
            </form>

            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $fechaTabla1 = $_POST['fechaTabla1'];
                    $tratadoTabla1 = $_POST['tratadoTabla1'];
                    $problematicaTabla1 = $_POST['problematicaTabla1'];
                    $volumenTabla1 = $_POST['volumenTabla1'];
                    $nombrecomercialTabla1 = $_POST['nombrecomercialTabla1'];
                    $nRegistroTabla1 = $_POST['nRegistroTabla1'];
                    $cantidadUtilizadaTabla1 = $_POST['cantidadUtilizadaTabla1'];
                    
                    
                    $insertarDatos = "INSERT INTO pag11 VALUES('$fechaTabla1','$tratadoTabla1','$problematicaTabla1','$volumenTabla1',
                                                                    '$nombrecomercialTabla1','$nRegistroTabla1','$cantidadUtilizadaTabla1')";
                
                    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
            
                }
            ?>


            <form action="#" name="pag6" method="post"> 
                <table id="datos-generales-11">
                    <tr>
                        <th colspan="10">3.5 REGISTRO DE TRATAMIENTOS DE LOS MEDIOS DE TRANSPORTE
                        </th>
                    </tr>
                    <tr>
                        <td colspan="10"><strong>APLICA TRATAMIENTO: <input id="yes2" type="checkbox"> SI <input id="no2" type="checkbox"> NO (1)</strong></td>
                    </tr>
                    <tr>
                        <td colspan="1" rowspan="2"><strong>Fecha</strong></td>
                        <td colspan="1" rowspan="2"><strong>Vehículo tratado (tipo, modelo y matrícula)</strong></td>
                        <td colspan="1" rowspan="2"><strong>Problemática Fitosanitaria</strong></td>
                        <td colspan="1" rowspan="2"><strong>Volumen tratado (m3)</strong></td>
                        <td colspan="3" rowspan="1"><strong>Producto</strong></td>
                        
                    </tr>
                    <tr>
                        <td><strong>Nombre comercial</strong></td>
                        <td><strong>Nº Registro</strong></td>
                        <td><strong>Cantidad utilizada (kg o l)</strong></td>
                    </tr>
                    <tr>
                        <td><input id="input_fecha_tabla2" name="fechaTabla2" type="text"></td>
                        <td><input id="input_vehiculo_tabla2" name="vehiculoTabla2" type="text"></td>
                        <td><input id="input_problematica_tabla2" name="problematicaTabla2" type="text"></td>
                        <td><input id="input_volumen_tabla2" name="volumenTabla2" type="text"></td>
                        <td><input id="input_nombre_tabla2" name="nombreTabla2" type="text"></td>
                        <td><input id="input_n_registro_tabla2" name="nRegistroTabla2" type="text"></td>
                        <td><input id="input_cantidad_tabla2" name="cantidadTabla2" type="text"></td>
                    </tr>
                    <tr>
                        <td><input id="input_fecha_tabla2" name="fechaTabla2" type="text"></td>
                        <td><input id="input_vehiculo_tabla2" name="vehiculoTabla2" type="text"></td>
                        <td><input id="input_problematica_tabla2" name="problematicaTabla2" type="text"></td>
                        <td><input id="input_volumen_tabla2" name="volumenTabla2" type="text"></td>
                        <td><input id="input_nombre_tabla2" name="nombreTabla2" type="text"></td>
                        <td><input id="input_n_registro_tabla2" name="nRegistroTabla2" type="text"></td>
                        <td><input id="input_cantidad_tabla2" name="cantidadTabla2" type="text"></td>
                    </tr>
                    <tr>
                        <td><input id="input_fecha_tabla2" name="fechaTabla2" type="text"></td>
                        <td><input id="input_vehiculo_tabla2" name="vehiculoTabla2" type="text"></td>
                        <td><input id="input_problematica_tabla2" name="problematicaTabla2" type="text"></td>
                        <td><input id="input_volumen_tabla2" name="volumenTabla2" type="text"></td>
                        <td><input id="input_nombre_tabla2" name="nombreTabla2" type="text"></td>
                        <td><input id="input_n_registro_tabla2" name="nRegistroTabla2" type="text"></td>
                        <td><input id="input_cantidad_tabla2" name="cantidadTabla2" type="text"></td>
                    </tr>
                </table>
            </form>


            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){

                    $fechaTabla2 = $_POST['fechaTabla2'];
                    $vehiculoTabla2 = $_POST['vehiculoTabla2'];
                    $problematicaTabla2 = $_POST['problematicaTabla2'];
                    $volumenTabla2 = $_POST['volumenTabla2'];
                    $nombreTabla2 = $_POST['nombreTabla2'];
                    $nRegistroTabla2 = $_POST['nRegistroTabla2'];
                    $cantidadTabla2 = $_POST['cantidadTabla2'];
                    
                    
                    $insertarDatos = "INSERT INTO pag12 VALUES('$fechaTabla2','$vehiculoTabla2','$problematicaTabla2','$volumenTabla2',
                                                                    '$nombreTabla2','$nRegistroTabla2','$cantidadTabla2')";
                
                    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
            
                }
            ?>
            
            <div class="footer">
                <div class="footer-1">            
                    <h5>Explotación/ Titular de la explotación:</h5>
                    <input id="primer-input" type="text">
                    <h5>AÑO:</h5>
                    <input id="segundo-input" type="text">
                </div>
                <div class="footer-2">
                    <div class="izquierda">    
                        <pre>
                          Marcar con una cruz.
                            
                        </pre>
                    </div>
                    <div class="derecha">
                        <p><strong>Hoja nº </strong><input id="input-nhoja" type="text"> <strong>de la sección nº </strong><input id="input-nseccion" type="text"></p>
                    </div>    
                </div>    
                
            </div>


        </div>

    

    <script src="/js/script.js"></script>
</body>
</html>