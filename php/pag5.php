<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag5.css" type="text/css" rel="stylesheet">


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
            <div class="header">
                <h5>Explotación/ Titular de la explotación:</h5>
                <input id="primer-input" type="text">
                <h5>AÑO:</h5>
                <input id="segundo-input" type="text">
            </div>
            <h2>3. INFORMACIÓN SOBRE TRATAMIENTOS FITOSANITARIOS</h2>    

            <!--Documento php para guardar los datos en la bbdd-->
            <?php

                $servidor = "localhost";
                $usuario = "root";
                $contraseña = "";
                $baseDeDatos = "datosfct";

                #$enlace = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);
            ?>
            <form action="#" name="pag5" method="post">
                <table id="punto-2">
                    <tr>
                        <th colspan="14">3.1. REGISTRO DE ACTUACIONES FITOSANITARIAS DE LA PARCELA</th>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="2"><strong>Id. Parcelas</strong></td>
                        <td colspan="2"><strong>Cultivo</strong></td>
                        <td colspan="" rowspan="2"><strong>Intervalo de fechas</strong></td>
                        <td colspan="" rowspan="2"><strong>Superf. tratada (ha)</strong></td>
                        <td colspan="" rowspan="2"><strong>Problema fitosanitario</strong></td>
                        <td colspan="" rowspan="2"><strong>Aplicador</strong></td>
                        <td colspan="" rowspan="2"><strong>Equipo</strong></td>
                        <td colspan="3"><strong>Producto Fitosanitario</strong></td>
                        <td colspan="" rowspan="2"><strong>Eficacia</strong></td>
                        <td colspan="2" rowspan="2"><strong>Observaciones</strong></td>
                    </tr>
                    <tr>
                        <td colspan="1">Especie</td>
                        <td colspan="1">Variedad</td>
                        <td colspan="1">Nombre Comercial</td>
                        <td colspan="1">Nº Registro</td>
                        <td colspan="1">Dosis (kg/ha o l/ha)</td>
                    </tr>
                    <tr>
                        <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td colspan="1"><input id="input_especie_tabla" name="especie" type="text"></td>
                        <td colspan="1"><input id="input_variedad_tabla" name="variedad" type="text"></td>
                        <td colspan="1"><input id="input_int_fecha" name="intervaloFechas" type="text"></td>
                        <td colspan="1"><input id="input_super_tratada" name="superTratada" type="text"></td>
                        <td colspan="1"><input id="input_problema_fitosanitario" name="fitosanitario" type="text"></td>
                        <td colspan="1"><input id="input_aplicador" name="aplicador" type="text"></td>
                        <td colspan="1"><input id="input_equipo" name="equipo" type="text"></td>
                        <td colspan="1"><input id="input_nombre_comercial" name="nombreComercial" type="text"></td>
                        <td colspan="1"><input id="input_n_registro" name="nRegistro" type="text"></td>
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>
                        <td colspan="1"><input id="input_eficacia_tabla" name="eficaciaTabla" type="text"></td>
                        <td colspan="1"><input id="input_observaciones_tabla" name="observaciones" type="text"></td>
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td colspan="1"><input id="input_especie_tabla" name="especie" type="text"></td>
                        <td colspan="1"><input id="input_variedad_tabla" name="variedad" type="text"></td>
                        <td colspan="1"><input id="input_int_fecha" name="intervaloFechas" type="text"></td>
                        <td colspan="1"><input id="input_super_tratada" name="superTratada" type="text"></td>
                        <td colspan="1"><input id="input_problema_fitosanitario" name="fitosanitario" type="text"></td>
                        <td colspan="1"><input id="input_aplicador" name="aplicador" type="text"></td>
                        <td colspan="1"><input id="input_equipo" name="equipo" type="text"></td>
                        <td colspan="1"><input id="input_nombre_comercial" name="nombreComercial" type="text"></td>
                        <td colspan="1"><input id="input_n_registro" name="nRegistro" type="text"></td>
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>
                        <td colspan="1"><input id="input_eficacia_tabla" name="eficaciaTabla" type="text"></td>
                        <td colspan="1"><input id="input_observaciones_tabla" name="observaciones" type="text"></td>
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td colspan="1"><input id="input_especie_tabla" name="especie" type="text"></td>
                        <td colspan="1"><input id="input_variedad_tabla" name="variedad" type="text"></td>
                        <td colspan="1"><input id="input_int_fecha" name="intervaloFechas" type="text"></td>
                        <td colspan="1"><input id="input_super_tratada" name="superTratada" type="text"></td>
                        <td colspan="1"><input id="input_problema_fitosanitario" name="fitosanitario" type="text"></td>
                        <td colspan="1"><input id="input_aplicador" name="aplicador" type="text"></td>
                        <td colspan="1"><input id="input_equipo" name="equipo" type="text"></td>
                        <td colspan="1"><input id="input_nombre_comercial" name="nombreComercial" type="text"></td>
                        <td colspan="1"><input id="input_n_registro" name="nRegistro" type="text"></td>
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>
                        <td colspan="1"><input id="input_eficacia_tabla" name="eficaciaTabla" type="text"></td>
                        <td colspan="1"><input id="input_observaciones_tabla" name="observaciones" type="text"></td>
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td colspan="1"><input id="input_especie_tabla" name="especie" type="text"></td>
                        <td colspan="1"><input id="input_variedad_tabla" name="variedad" type="text"></td>
                        <td colspan="1"><input id="input_int_fecha" name="intervaloFechas" type="text"></td>
                        <td colspan="1"><input id="input_super_tratada" name="superTratada" type="text"></td>
                        <td colspan="1"><input id="input_problema_fitosanitario" name="fitosanitario" type="text"></td>
                        <td colspan="1"><input id="input_aplicador" name="aplicador" type="text"></td>
                        <td colspan="1"><input id="input_equipo" name="equipo" type="text"></td>
                        <td colspan="1"><input id="input_nombre_comercial" name="nombreComercial" type="text"></td>
                        <td colspan="1"><input id="input_n_registro" name="nRegistro" type="text"></td>
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>
                        <td colspan="1"><input id="input_eficacia_tabla" name="eficaciaTabla" type="text"></td>
                        <td colspan="1"><input id="input_observaciones_tabla" name="observaciones" type="text"></td>
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td colspan="1"><input id="input_especie_tabla" name="especie" type="text"></td>
                        <td colspan="1"><input id="input_variedad_tabla" name="variedad" type="text"></td>
                        <td colspan="1"><input id="input_int_fecha" name="intervaloFechas" type="text"></td>
                        <td colspan="1"><input id="input_super_tratada" name="superTratada" type="text"></td>
                        <td colspan="1"><input id="input_problema_fitosanitario" name="fitosanitario" type="text"></td>
                        <td colspan="1"><input id="input_aplicador" name="aplicador" type="text"></td>
                        <td colspan="1"><input id="input_equipo" name="equipo" type="text"></td>
                        <td colspan="1"><input id="input_nombre_comercial" name="nombreComercial" type="text"></td>
                        <td colspan="1"><input id="input_n_registro" name="nRegistro" type="text"></td>
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>
                        <td colspan="1"><input id="input_eficacia_tabla" name="eficaciaTabla" type="text"></td>
                        <td colspan="1"><input id="input_observaciones_tabla" name="observaciones" type="text"></td>
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td colspan="1"><input id="input_especie_tabla" name="especie" type="text"></td>
                        <td colspan="1"><input id="input_variedad_tabla" name="variedad" type="text"></td>
                        <td colspan="1"><input id="input_int_fecha" name="intervaloFechas" type="text"></td>
                        <td colspan="1"><input id="input_super_tratada" name="superTratada" type="text"></td>
                        <td colspan="1"><input id="input_problema_fitosanitario" name="fitosanitario" type="text"></td>
                        <td colspan="1"><input id="input_aplicador" name="aplicador" type="text"></td>
                        <td colspan="1"><input id="input_equipo" name="equipo" type="text"></td>
                        <td colspan="1"><input id="input_nombre_comercial" name="nombreComercial" type="text"></td>
                        <td colspan="1"><input id="input_n_registro" name="nRegistro" type="text"></td>
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>
                        <td colspan="1"><input id="input_eficacia_tabla" name="eficaciaTabla" type="text"></td>
                        <td colspan="1"><input id="input_observaciones_tabla" name="observaciones" type="text"></td>              
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>
                        <td colspan="1"><input id="input_especie_tabla" name="especie" type="text"></td>
                        <td colspan="1"><input id="input_variedad_tabla" name="variedad" type="text"></td>
                        <td colspan="1"><input id="input_int_fecha" name="intervaloFechas" type="text"></td>
                        <td colspan="1"><input id="input_super_tratada" name="superTratada" type="text"></td>
                        <td colspan="1"><input id="input_problema_fitosanitario" name="fitosanitario" type="text"></td>
                        <td colspan="1"><input id="input_aplicador" name="aplicador" type="text"></td>
                        <td colspan="1"><input id="input_equipo" name="equipo" type="text"></td>
                        <td colspan="1"><input id="input_nombre_comercial" name="nombreComercial" type="text"></td>
                        <td colspan="1"><input id="input_n_registro" name="nRegistro" type="text"></td>
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>
                        <td colspan="1"><input id="input_eficacia_tabla" name="eficaciaTabla" type="text"></td>
                        <td colspan="1"><input id="input_observaciones_tabla" name="observaciones" type="text"></td>              
                    </tr>

                    <input type="submit" name="registro">
                    <input type="reset">
                </table>

            </form>

            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $idParcelas = $_POST['idParcelas'];
                    $especie = $_POST['especie'];
                    $variedad = $_POST['variedad'];
                    $intervaloFechas = $_POST['intervaloFechas'];
                    $superTratada = $_POST['superTratada'];
                    $fitosanitario = $_POST['fitosanitario'];
                    $aplicador = $_POST['aplicador'];
                    $equipo = $_POST['equipo'];
                    $nombreComercial = $_POST['nombreComercial'];
                    $nRegistro = $_POST['nRegistro'];
                    $dosis = $_POST['dosis'];
                    $eficaciaTabla = $_POST['eficaciaTabla'];
                    $observaciones = $_POST['observaciones'];
                    
                    $insertarDatos = "INSERT INTO pag7 VALUES('$idParcelas','$especie','$variedad',' $intervaloFechas','$superTratada',
                                                                    '$fitosanitario','$aplicador','$equipo','$nombreComercial','$nRegistro'
                                                                    ,'$dosis','$eficaciaTabla','$observaciones')";
                
                    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
            
                }
            ?>


            <div class="footer">
                <div class="linea-footer"></div>
                <div class="texto-footer">
                    <pre>
                        Indicar el número de orden de identificación de las parcelas tratadas (Si se trata a todas las parcelas indicar “TODAS”).
                        Indicar el intervalo de fechas o la fecha concreta del tratamiento.
                        Número de orden según la relación indicada en el apartado correspondiente de información general.
                        Número de orden según la relación indicada en el apartado correspondiente de información general.
                        Indicar buena, regular o mala.
                    </pre>
                </div>
                <div class="footer-2">
                    <p><strong id="hoja">Hoja nº </strong><input id="input-nhoja" type="text"> <strong id="seccion">de la sección nº </strong><input id="input-nseccion" type="text"></p>
                </div>    
                
            </div>
            
        </div>

   

    <script src="/js/script.js"></script>
</body>
</html>