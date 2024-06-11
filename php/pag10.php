<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag10.css" type="text/css" rel="stylesheet">


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

            <h2>5. REGISTRO DE COSECHA COMERCIALIZADA</h2>
            
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
                        <th id="fecha-tb" colspan="1" rowspan="2"><strong>Fecha</strong></th>
                        <th colspan="1" rowspan="2"><strong>Producto</strong></th>
                        <th colspan="1" rowspan="2"><strong>Cantidad de producto (kg)</strong></th>
                        <th colspan="1" rowspan="2"><strong>Nº de orden parcela/s de origen(1)</strong></th>
                        <th colspan="1" rowspan="2"><strong>Nº de albarán o factura(2)</strong></th>
                        <th colspan="1" rowspan="2"><strong>Nº de lote(2)</strong></th>
                        <th colspan="6" rowspan="1"><strong>Cliente</strong></th>
                    </tr>
                    <tr>
                        <!--Fila intermedia-->
                        <th id="nombre-tb"><strong>Nombre o razón social</strong></th>
                        <th id="nif-tb"><strong>NIF</strong></th>
                        <th colspan="2" id="direccion-tb"><strong>Dirección</strong></th>
                        <th><strong>Nº de RGSEAA(2)</strong></th>
                        
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>
                    <tr>                   
                        <td><input id="input_fecha" name="fecha" type="text"></td>
                        <td><input id="input_producto" name="producto" type="text"></td>
                        <td><input id="input_cantidad_producto" name="cantidad_producto" type="text"></td>
                        <td><input id="input_n_ordenparcela" name="n_ordenparcela" type="text"></td>
                        <td><input id="input_n_albaran" name="n_albaran" type="text"></td>
                        <td><input id="input_n_lote" name="n_lote" type="text"></td>
                        <td><input id="input_nombre" name="nombre" type="text"></td>
                        <td><input id="input_nif" name="nif" type="text"></td>
                        <td colspan="2"><input id="input_direccion" name="direccion" type="text"></td>
                        <td><input id="input_rgseaa" name="rgseaa" type="text"></td>
                    </tr>        
                    
                    
                </table>
            </form>


            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $fecha = $_POST['fecha'];
                    $producto = $_POST['producto'];
                    $cantidad_producto = $_POST['cantidad_producto'];
                    $n_ordenparcela = $_POST['n_ordenparcela'];
                    $n_albaran = $_POST['n_albaran'];
                    $n_lote = $_POST['n_lote'];
                    $nombre = $_POST['nombre'];
                    $nif = $_POST['nif'];
                    $direccion = $_POST['direccion'];
                    $rgseaa = $_POST['rgseaa'];

                    
                    $insertarDatos = "INSERT INTO tabla5 VALUES('$fecha','$producto','$cantidad_producto','$n_ordenparcela',
                                                                    '$n_albaran','$n_lote','$nombre','$nif',
                                                                    '$direccion','$rgseaa')";
                
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
                            Número de orden según la relación correspondiente en la hoja de identificación de parcelas.
                            Campo voluntario.
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
