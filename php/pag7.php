<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag7.css" type="text/css" rel="stylesheet">


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
                        <th colspan="10">3.2 REGISTRO DE USO DE SEMILLA TRATADA
                        </th>
                    </tr>
                    <tr>
                        <td colspan="10"><strong>APLICA TRATAMIENTO: <input id="yes1" type="checkbox"> SI <input id="no1" type="checkbox"> NO (1)</strong></td>
                    </tr>
                    <tr>
                        <td colspan="1" rowspan="2"><strong>Fecha de siembra</strong></td>
                        <td colspan="1" rowspan="2"><strong>Id. parcelas</strong></td>
                        <td colspan="2"><strong>Cultivo</strong></td>
                        <td colspan="1" rowspan="2"><strong>Superficie sembrada (Ha)</strong></td>
                        <td colspan="1" rowspan="2"><strong>Cantidad de semilla (Kg)</strong></td>
                        <td colspan="4"><strong>Producto fitosanitario</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Especie</strong></td>
                        <td><strong>Variedad</strong></td>
                        <td><strong>Materia activa / Nombre comercial</strong></td>
                        <td><strong>Nº registro</strong></td>
                    </tr>
                    <tr>
                        <td><input id="input_fecha_siembra" name="fechaSiembra" type="text"></td>
                        <td><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td><input id="input_especie" name="especie" type="text"></td>
                        <td><input id="input_variedad" name="variedad" type="text"></td>
                        <td><input id="input_superficie_sembrada" name="superficieSembrada" type="text"></td>
                        <td><input id="input_cantidad_semilla" name="cantidadSemilla" type="text"></td>
                        <td><input id="input_materia_activa" name="materiaActiva" type="text"></td>
                        <td><input id="input_n_registro" name="nRegistro" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_fecha_siembra" name="fechaSiembra" type="text"></td>
                        <td><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td><input id="input_especie" name="especie" type="text"></td>
                        <td><input id="input_variedad" name="variedad" type="text"></td>
                        <td><input id="input_superficie_sembrada" name="superficieSembrada" type="text"></td>
                        <td><input id="input_cantidad_semilla" name="cantidadSemilla" type="text"></td>
                        <td><input id="input_materia_activa" name="materiaActiva" type="text"></td>
                        <td><input id="input_n_registro" name="nRegistro" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_fecha_siembra" name="fechaSiembra" type="text"></td>
                        <td><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td><input id="input_especie" name="especie" type="text"></td>
                        <td><input id="input_variedad" name="variedad" type="text"></td>
                        <td><input id="input_superficie_sembrada" name="superficieSembrada" type="text"></td>
                        <td><input id="input_cantidad_semilla" name="cantidadSemilla" type="text"></td>
                        <td><input id="input_materia_activa" name="materiaActiva" type="text"></td>
                        <td><input id="input_n_registro" name="nRegistro" type="text"></td>
                    </tr>
                </table>
            </form>

                <!--Mas documento php-->
                <?php
                    if(isset($_POST['registro'])){
                        $fechaSiembra = $_POST['fechaSiembra'];
                        $idParcelas = $_POST['idParcelas'];
                        $especie = $_POST['especie'];
                        $variedad = $_POST['variedad'];
                        $superficieSembrada = $_POST['superficieSembrada'];
                        $cantidadSemilla = $_POST['cantidadSemilla'];
                        $materiaActiva = $_POST['materiaActiva'];
                        $nRegistro = $_POST['nRegistro'];
                        
                        $insertarDatos = "INSERT INTO pag9 VALUES('$fechaSiembra','$idParcelas','$especie','$variedad',
                                                                        '$superficieSembrada','$cantidadSemilla','$materiaActiva','$nRegistro')";
                    
                        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
                
                    }
                ?>


            <form action="#" name="pag6" method="post">        
                <table id="datos-generales-11">
                    <tr>
                        <th colspan="10">3.3 REGISTRO DE TRATAMIENTOS POSTCOSECHA (en producto vegetal)
                        </th>
                    </tr>
                    <tr>
                        <td colspan="10"><strong>APLICA TRATAMIENTO: <input id="yes2" type="checkbox"> SI <input id="no2" type="checkbox"> NO (1)</strong></td>
                    </tr>
                    <tr>
                        <td colspan="1" rowspan="2"><strong>Fecha</strong></td>
                        <td colspan="1" rowspan="2"><strong>Producto vegetal tratado</strong></td>
                        <td colspan="1" rowspan="2"><strong>Problemática fitosanitaria</strong></td>
                        <td colspan="1" rowspan="2"><strong>Cantidad de prod. veg. tratado (Tm)</strong></td>
                        <td colspan="3" rowspan="1"><strong>Producto fitosanitario</strong></td>
                        
                    </tr>
                    <tr>
                        <td><strong>Nombre comercial</strong></td>
                        <td><strong>Nº Registro</strong></td>
                        <td><strong>Cantidad utilizada (kg o l)</strong></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="fecha" id="input_fecha"></td>
                        <td><input type="text" name="productorVegetal" id="input_producto_vegetal"></td>
                        <td><input type="text" name="fitosanitario" id="input_problema_fitosanitario"></td>
                        <td><input type="text" name="cantidad" id="input_cantidad"></td>
                        <td><input type="text" name="nombreComercial" id="input_nombre_comercial"></td>
                        <td><input type="text" name="nRegistro" id="input_n_registro"></td>
                        <td><input type="text" name="cantidadUtilizada" id="input_cantidad_utilizada"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="fecha" id="input_fecha"></td>
                        <td><input type="text" name="productorVegetal" id="input_producto_vegetal"></td>
                        <td><input type="text" name="fitosanitario" id="input_problema_fitosanitario"></td>
                        <td><input type="text" name="cantidad" id="input_cantidad"></td>
                        <td><input type="text" name="nombreComercial" id="input_nombre_comercial"></td>
                        <td><input type="text" name="nRegistro2" id="input_n_registro"></td>
                        <td><input type="text" name="cantidadUtilizada" id="input_cantidad_utilizada"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="fecha" id="input_fecha"></td>
                        <td><input type="text" name="productorVegetal" id="input_producto_vegetal"></td>
                        <td><input type="text" name="fitosanitario" id="input_problema_fitosanitario"></td>
                        <td><input type="text" name="cantidad" id="input_cantidad"></td>
                        <td><input type="text" name="nombreComercial" id="input_nombre_comercial"></td>
                        <td><input type="text" name="nRegistro" id="input_n_registro"></td>
                        <td><input type="text" name="cantidadUtilizada" id="input_cantidad_utilizada"></td>
                    </tr>

                    <input type="submit" name="registro">
                    <input type="reset">
                </table>
            </form>

            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){

                    $fecha = $_POST['fecha'];
                    $productorVegetal = $_POST['productorVegetal'];
                    $fitosanitario = $_POST['fitosanitario'];
                    $cantidad = $_POST['cantidad'];
                    $nombreComercial = $_POST['nombreComercial'];
                    $nRegistro2 = $_POST['nRegistro2'];
                    $cantidadUtilizada = $_POST['cantidadUtilizada'];
                    
                    
                    $insertarDatos = "INSERT INTO pag10 VALUES('$fecha','$productorVegetal','$fitosanitario','$cantidad',
                                                                '$nombreComercial','$nRegistro2','$cantidadUtilizada')";
                
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
                          Identificar el número de orden de identificación de las parcelas tratadas (Si se trata a todas las parcelas indicar “TODAS”).
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