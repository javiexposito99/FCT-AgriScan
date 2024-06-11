<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag9.css" type="text/css" rel="stylesheet">


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

            <h2>4. REGISTRO DE ANÁLISIS DE PRODUCTOS FITOSANITARIOS EN
                CASO DE HABERSE REALIZADO</h2>
                
                 <!--Documento php para guardar los datos en la bbdd-->
            <?php

                $servidor = "localhost";
                $usuario = "root";
                $contraseña = "";
                $baseDeDatos = "datosfct";

                #$enlace = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);
            ?>


            <form action="#" name="pag6" method="post">
                <table id="punto-2">
                    <tr>
                        <th colspan="" rowspan="2"><strong>Fecha</strong></th>
                        <th colspan="" rowspan="2"><strong>Material analizado</strong></th>
                        <th colspan="" rowspan="2"><strong>Cultivo o cosecha muestreado/s</strong></th>
                        <th colspan="" rowspan="2"><strong>Nº Boletín de análisis</strong></th>
                        <th colspan="" rowspan="2"><strong>Laboratorio (Nombre y dirección)</strong></th>
                        <th colspan="" rowspan="2"><strong>Sustancias activas detectadas</strong></th>
                    </tr>
                    <tr>
                        <!--Primera fila no mostrada-->
                    </tr>
                    <tr>
                        <!--Fila intermedia-->
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>
                    <tr>                   
                        <td><input type="text" id="input_fecha" name="fecha"></td>
                        <td><input type="text" id="input_material" name="material"></td>
                        <td><input type="text" id="input_cultivo" name="cultivo"></td>
                        <td><input type="text" id="input_boletin" name="boletin"></td>
                        <td><input type="text" id="input_laboratorio" name="laboratorio"></td>
                        <td><input type="text" id="input_sustancias" name="sustancias"></td>
                    </tr>        
                    
                    
                </table>
            </form>

            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $fecha = $_POST['fecha'];
                    $material = $_POST['material'];
                    $cultivo = $_POST['cultivo'];
                    $boletin = $_POST['boletin'];
                    $laboratorio = $_POST['laboratorio'];
                    $sustancias = $_POST['sustancias'];
                    
                    /*Tabla 4 contendra los datos de la pagina9*/ 
                    $insertarDatos = "INSERT INTO tabla4 VALUES('$fecha','$material','$cultivo','$boletin',
                                                                    '$laboratorio','$sustancias')";
                
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
                            Indicar vegetal, tierra o agua.
                            En caso de cultivos, indicar el número de orden de las parcela/s muestreadas.
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
