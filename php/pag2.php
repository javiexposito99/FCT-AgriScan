<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag2.css" type="text/css" rel="stylesheet">


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
                    <option value="/pag2/pag2.php">1.2 Personas o empresas que intervienen</option>
                    <option value="/pag2/pag2.php">1.3 Equipos de aplicación de productos</option>
                    <option value="/pag2/pag2.php">1.4 Agrupación o entidad de asesoramiento</option>
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
            

            <!--Documento php para guardar los datos en la bbdd-->
            <?php

                $servidor = "localhost";
                $usuario = "root";
                $contraseña = "";
                $baseDeDatos = "datosfct";

                #$enlace = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);
            ?>

            <h2>INFORMACIÓN GENERAL</h2>
                
            <form action="#" name="pag2" method="post">
                <table id="datos-generales-11">
                    <tr>
                        <th colspan="10">1.2 PERSONAS O EMPRESAS QUE INTERVIENEN EN EL TRATAMIENTO CON PRODUCTOS FITOSANITARIOS</th>
                    </tr>
        
                    <tr id="cabecera-12">
                        <th id="colum-uno" rowspan="2">Nº de orden</th>
                        <th id="colum-dos" rowspan="2">Nombre y apellidos/ Empresas de servicios</th>
                        <th id="colum-tres" rowspan="2">NIF</th>
                        <th id="colum-cuatro" rowspan="2">Nº Inscripción ROPO</th>
                        <th id="colum-cinco" colspan="4">Tipo de carné</th>
                        <th id="colum-seis" rowspan="2">Asesor</th>
                    </tr>
                    <tr>
                        <th id="colum-cinco" colspan="1">Básico</th>
                        <th id="colum-cinco" colspan="1">Cualif</th>
                        <th id="colum-cinco" colspan="1">Fumig</th>
                        <th id="colum-cinco" colspan="1">Piloto</th>
                    </tr>
                    <tr>
                        <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_nombreyapellido" name="nombreyapellido" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td><input id="input_nInscripcion" name="nInscripcion" type="text"></td>
                        <td><input id="input_cinco" name="basic" type="text"></td>
                        <td><input id="input_cinco" name="cualif" type="text"></td>
                        <td><input id="input_cinco" name="fumig" type="text"></td>
                        <td><input id="input_cinco" name="piloto" type="text"></td>
                        <td><input id="input_seis" name="asesor" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_nombreyapellido" name="nombreyapellido" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td><input id="input_nInscripcion" name="nInscripcion" type="text"></td>
                        <td><input id="input_cinco" name="basic" type="text"></td>
                        <td><input id="input_cinco" name="cualif" type="text"></td>
                        <td><input id="input_cinco" name="fumig" type="text"></td>
                        <td><input id="input_cinco" name="piloto" type="text"></td>
                        <td><input id="input_seis" name="asesor" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_nombreyapellido" name="nombreyapellido" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td><input id="input_nInscripcion" name="nInscripcion" type="text"></td>
                        <td><input id="input_cinco" name="basic" type="text"></td>
                        <td><input id="input_cinco" name="cualif" type="text"></td>
                        <td><input id="input_cinco" name="fumig" type="text"></td>
                        <td><input id="input_cinco" name="piloto" type="text"></td>
                        <td><input id="input_seis" name="asesor" type="text"></td>
                    </tr>
                    
                    <input type="submit" name="registro">
                    <input type="reset">

                </table>
            </form>

            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $nOrden = $_POST['nOrden'];
                    $nombreyapellido = $_POST['nombreyapellido'];
                    $nif = $_POST['nif'];
                    $nInscripcion = $_POST['nInscripcion'];
                    $basic = $_POST['basic'];
                    $cualif = $_POST['cualif'];
                    $fumig = $_POST['fumig'];
                    $piloto = $_POST['piloto'];
                    $asesor = $_POST['asesor'];

                    $insertarDatos = "INSERT INTO pag2 VALUES('$nOrden','$nombreyapellido','$nif',' $nInscripcion','$basic',
                                                                    '$cualif','$fumig','$piloto','$asesor')";
                
                    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
            
                }
            ?>

            <form action="#" name="pag2" method="post">
                <table id="datos-generales-11">
                    <tr>
                        <th colspan="9">1.3 EQUIPOS DE APLICACIÓN DE PRODUCTOS FITOSANITARIOS PROPIOS DE LA EXPLOTACIÓN</th>
                    </tr>
                    <tr id="cabecera-12">
                        <th colspan="2" id="colum-uno-tabla2">Nº de orden</th>
                        <th colspan="2" id="colum-dos-tabla2">Descripción del equipo</th>
                        <th colspan="1" id="colum-tres-tabla2">Nº inscrip. ROMA</th>
                        <th colspan="3" id="colum-cuatro-tabla2">Fecha de adquisición</th>
                        <th colspan="2" id="colum-cinco-tabla2">Fecha de la ultima inspección</th>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="input_nOrden" name="nOrdenTabla2" type="text"></td>
                        <td colspan="2"><input id="input-descripcionEquipo" name="descripcionEquipoTabla2" type="text"></td>
                        <td colspan="1"><input id="input_roma" name="romaTabla2" type="text"></td>
                        <td colspan="3"><input id="input_fechaAquisicion" name="fechaAquisicionTabla2" type="text"></td>
                        <td colspan="2"><input id="input_fechaInspeccion" name="fechaInpeccionTabla2" type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="input_nOrden" name="nOrdenTabla2" type="text"></td>
                        <td colspan="2"><input id="input-descripcionEquipo" name="descripcionEquipoTabla2" type="text"></td>
                        <td colspan="1"><input id="input_roma" name="romaTabla2" type="text"></td>
                        <td colspan="3"><input id="input_fechaAquisicion" name="fechaAquisicionTabla2" type="text"></td>
                        <td colspan="2"><input id="input_fechaInspeccion" name="fechaInpeccionTabla2" type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="input_nOrden" name="nOrdenTabla2" type="text"></td>
                        <td colspan="2"><input id="input-descripcionEquipo" name="descripcionEquipoTabla2" type="text"></td>
                        <td colspan="1"><input id="input_roma" name="romaTabla2" type="text"></td>
                        <td colspan="3"><input id="input_fechaAquisicion" name="fechaAquisicionTabla2" type="text"></td>
                        <td colspan="2"><input id="input_fechaInspeccion" name="fechaInpeccionTabla2" type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="input_nOrden" name="nOrdenTabla2" type="text"></td>
                        <td colspan="2"><input id="input-descripcionEquipo" name="descripcionEquipoTabla2" type="text"></td>
                        <td colspan="1"><input id="input_roma" name="romaTabla2" type="text"></td>
                        <td colspan="3"><input id="input_fechaAquisicion" name="fechaAquisicionTabla2" type="text"></td>
                        <td colspan="2"><input id="input_fechaInspeccion" name="fechaInpeccionTabla2" type="text"></td>
                    </tr>
                    
                </table>
            </form>
            
            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $nOrdenTabla2 = $_POST['nOrdenTabla2'];
                    $descripcionEquipoTabla2 = $_POST['descripcionEquipoTabla2'];
                    $romaTabla2 = $_POST['romaTabla2'];
                    $fechaAquisicionTabla2 = $_POST['fechaAquisicionTabla2'];
                    $fechaInpeccionTabla2 = $_POST['fechaInpeccionTabla2'];
                    

                    $insertarDatos = "INSERT INTO pag3 VALUES('$nOrdenTabla2','$descripcionEquipoTabla2','$fechaAquisicionTabla2',' $fechaInpeccionTabla2')";
                
                    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
            
                }
            ?>

            <form action="#" name="pag2" method="post">
                <table id="datos-generales-11">
                    <tr>
                        <th colspan="9">1.4 AGRUPACIÓN O ENTIDAD DE ASESORAMIENTO A LA QUE PERTENECE LA EXPLOTACIÓN</th>
                    </tr>
                    <tr id="cabecera-12">
                        <th colspan="2" id="colum-uno-tabla3">Nombre o razón social</th>
                        <th colspan="1" id="colum-dos-tabla3">NIF</th>
                        <th colspan="1" id="colum-tres-tabla3">Nº de identificación</th>
                        <th colspan="2" id="colum-cuatro-tabla3">Tipo de explotación</th>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="input_nRazon" name="nRazonTabla3" type="text"></td>
                        <td colspan="1"><input id="input_DNI" name="dniTabla3" type="text"></td>
                        <td colspan="1"><input id="input_fechaAquisicion-tabla3" name="fechaAquisicionTabla3" type="text"></td>
                        <td colspan="2"><input id="input_tipoExplotacion" name="tipoExplotacionTabla3" type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="input_nRazon" name="nRazonTabla3" type="text"></td>
                        <td colspan="1"><input id="input_DNI" name="dniTabla3" type="text"></td>
                        <td colspan="1"><input id="input_fechaAquisicion-tabla3" name="fechaAquisicionTabla3" type="text"></td>
                        <td colspan="2"><input id="input_tipoExplotacion" name="tipoExplotacionTabla3" type="text"></td>
                    </tr>
                </table>
            </form>

            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $nRazonTabla3 = $_POST['nRazonTabla3'];
                    $dniTabla3 = $_POST['dniTabla3'];
                    $fechaAquisicionTabla3 = $_POST['fechaAquisicionTabla3'];
                    $tipoExplotacionTabla3 = $_POST['tipoExplotacionTabla3'];
                    

                    $insertarDatos = "INSERT INTO pag4 VALUES('$nRazonTabla3','$dniTabla3','$fechaAquisicionTabla3',' $tipoExplotacionTabla3')";
                
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
                
                <div class="texto-footer">
                    <p>Rellenar lo que proceda.</p>
                    <p>Marcar con una cruz.</p>
                    <p>Indicar el tipo de equipo o máquina, marca y modelo.</p>
                    <p>En equipos en los que no sea obligatoria la inscripción en el ROMA, indicar el número de referencia en el censo correspondiente, en su caso.</p>
                    <p> Tipo de explotación en cuanto a gestión integrada de plagas: (AE) Agricultura Ecológica, (PI) Producción Integrada, (CP) Certificación Privada, (Atrias) Agrupación de Tratamiento Integrado en Agricultura, (AS) Asistida de un
                        asesor, (NO) Sin obligación de aplicar la GIP.</p>
                </div>
                <div class="footer-2">
                    <p><strong>Hoja nº </strong><input id="input-nhoja" type="text"> <strong>de la sección nº </strong><input id="input-nseccion" type="text"></p>
                </div>    
                
            </div>


        </div>

   

    <script src="/js/script.js"></script>
</body>
</html>