<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag6.css" type="text/css" rel="stylesheet">


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
            <form action="#" name="pag6" method="post">
                <table id="punto-2">
                    <tr>
                        <th colspan="16">3.1. bis REGISTRO DE TRATAMIENTOS FITOSANITARIOS DE LA PARCELA
                            (SOLAMENTE PARA CULTIVOS Y SUPERFICIES OBJETO DE ASESORAMIENTO)
                            </th>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2"><strong>CULTIVO</strong></td>
                        <td colspan="3" rowspan="2"><strong>DATOS DE LA PARCELA</strong></td>
                        <td colspan="2" rowspan="2"><strong>PLAGA A CONTROLAR</strong></td>
                        <td colspan="3" rowspan="2"><strong>ALTERNATIVAS NO QUÍMICAS DE INTERVENCIÓN</strong></td>
                        <td colspan="4" rowspan="2"><strong>ALTERNATIVAS QUÍMICAS DE INTERVENCIÓN</strong></td>
                        <td colspan="" rowspan="3"><strong>Eficacia de la intervención (Buena, regular o mala)</strong></td>
                        <td colspan="" rowspan="3"><strong>Observaciones</strong></td>
                    </tr>
                    <tr>
                        <!--Fila intermedia-->
                    </tr>
                    <tr>
                        <td colspan="1"><strong>Especie</strong></td>                    
                        <td colspan="1"><strong>Variedad</strong></td>                    
                        <td colspan="1"><strong>Id. parcelas (1)</strong></td>                    
                        <td colspan="1"><strong>Superficie cultivada (ha)</strong></td>                    
                        <td colspan="1"><strong>Superficie tratada (ha)</strong></td>                    
                        <td colspan="1"><strong>Plaga</strong></td>                    
                        <td colspan="1"><strong>Justificación de la actuación (Superación de umbrales, condiciones meteorologicas, etc.)</strong></td>
                        <td colspan="1"><strong>Tipo de medida</strong></td>                    
                        <td colspan="1"><strong>Intensidad de la medida (Nº de trampas, nº de difusores, etc.)</strong></td>                    
                        <td colspan="1"><strong>Fecha de actuación</strong></td>                    
                        <td colspan="1"><strong>Nombre comercial</strong></td>                    
                        <td colspan="1"><strong>Número de registro</strong></td>                    
                        <td colspan="1"><strong>Dosis utilizada (l ó kg. / ha)</strong></td>                    
                        <td colspan="1"><strong>Fecha de actuación</strong></td>                    

                    </tr>
                    <tr>
                        <td colspan="1"><input id="input_especie" name="especie" type="text"></td>                    
                        <td colspan="1"><input id="input_variedad" name="variedad" type="text"></td>                    
                        <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_cultivada" name="superficieCultivada" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_tratada" name="superficieTratada" type="text"></td>                    
                        <td colspan="1"><input id="input_plaga" name="plaga" type="text"></td>                    
                        <td colspan="1"><input id="input_justificacion" name="justificacion" type="text"></td>
                        <td colspan="1"><input id="input_medida" name="medida" type="text"></td>                    
                        <td colspan="1"><input id="input_intensidad_medida" name="intensidadMedida" type="text"></td>                    
                        <td colspan="1"><input id="input_actuacion" name="actuacion" type="text"></td>                    
                        <td colspan="1"><input id="input_comercial" name="comercial" type="text"></td>                    
                        <td colspan="1"><input id="input_registro" name="registro" type="text"></td>                    
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>                    
                        <td colspan="1"><input id="input_fech_actuacion" name="fechActuacion" type="text"></td>
                        <td colspan="1"><input id="input_intervencion" name="intervencion" type="text"></td>
                        <td colspan="1"><input id="input_observaciones" name="observaciones" type="text"></td>
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_especie" name="especie" type="text"></td>                    
                        <td colspan="1"><input id="input_variedad" name="variedad" type="text"></td>                    
                        <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_cultivada" name="superficieCultivada" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_tratada" name="superficieTratada" type="text"></td>                    
                        <td colspan="1"><input id="input_plaga" name="plaga" type="text"></td>                    
                        <td colspan="1"><input id="input_justificacion" name="justificacion" type="text"></td>
                        <td colspan="1"><input id="input_medida" name="medida" type="text"></td>                    
                        <td colspan="1"><input id="input_intensidad_medida" name="intensidadMedida" type="text"></td>                    
                        <td colspan="1"><input id="input_actuacion" name="actuacion" type="text"></td>                    
                        <td colspan="1"><input id="input_comercial" name="comercial" type="text"></td>                    
                        <td colspan="1"><input id="input_registro" name="registro" type="text"></td>                    
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>                    
                        <td colspan="1"><input id="input_fech_actuacion" name="fechActuacion" type="text"></td>
                        <td colspan="1"><input id="input_intervencion" name="intervencion" type="text"></td>
                        <td colspan="1"><input id="input_observaciones" name="observaciones" type="text"></td>
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_especie" name="especie" type="text"></td>                    
                        <td colspan="1"><input id="input_variedad" name="variedad" type="text"></td>                    
                        <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_cultivada" name="superficieCultivada" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_tratada" name="superficieTratada" type="text"></td>                    
                        <td colspan="1"><input id="input_plaga" name="plaga" type="text"></td>                    
                        <td colspan="1"><input id="input_justificacion" name="justificacion" type="text"></td>
                        <td colspan="1"><input id="input_medida" name="medida" type="text"></td>                    
                        <td colspan="1"><input id="input_intensidad_medida" name="intensidadMedida" type="text"></td>                    
                        <td colspan="1"><input id="input_actuacion" name="actuacion" type="text"></td>                    
                        <td colspan="1"><input id="input_comercial" name="comercial" type="text"></td>                    
                        <td colspan="1"><input id="input_registro" name="registro" type="text"></td>                    
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>                    
                        <td colspan="1"><input id="input_fech_actuacion" name="fechActuacion" type="text"></td>
                        <td colspan="1"><input id="input_intervencion" name="intervencion" type="text"></td>
                        <td colspan="1"><input id="input_observaciones" name="observaciones" type="text"></td>
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_especie" name="especie" type="text"></td>                    
                        <td colspan="1"><input id="input_variedad" name="variedad" type="text"></td>                    
                        <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_cultivada" name="superficieCultivada" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_tratada" name="superficieTratada" type="text"></td>                    
                        <td colspan="1"><input id="input_plaga" name="plaga" type="text"></td>                    
                        <td colspan="1"><input id="input_justificacion" name="justificacion" type="text"></td>
                        <td colspan="1"><input id="input_medida" name="medida" type="text"></td>                    
                        <td colspan="1"><input id="input_intensidad_medida" name="intensidadMedida" type="text"></td>                    
                        <td colspan="1"><input id="input_actuacion" name="actuacion" type="text"></td>                    
                        <td colspan="1"><input id="input_comercial" name="comercial" type="text"></td>                    
                        <td colspan="1"><input id="input_registro" name="registro" type="text"></td>                    
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>                    
                        <td colspan="1"><input id="input_fech_actuacion" name="fechActuacion" type="text"></td>
                        <td colspan="1"><input id="input_intervencion" name="intervencion" type="text"></td>
                        <td colspan="1"><input id="input_observaciones" name="observaciones" type="text"></td>
                    </tr>
                    <tr>
                    <td colspan="1"><input id="input_especie" name="especie" type="text"></td>                    
                        <td colspan="1"><input id="input_variedad" name="variedad" type="text"></td>                    
                        <td colspan="1"><input id="input_id_parcelas" name="idParcelas" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_cultivada" name="superficieCultivada" type="text"></td>                    
                        <td colspan="1"><input id="input_superficie_tratada" name="superficieTratada" type="text"></td>                    
                        <td colspan="1"><input id="input_plaga" name="plaga" type="text"></td>                    
                        <td colspan="1"><input id="input_justificacion" name="justificacion" type="text"></td>
                        <td colspan="1"><input id="input_medida" name="medida" type="text"></td>                    
                        <td colspan="1"><input id="input_intensidad_medida" name="intensidadMedida" type="text"></td>                    
                        <td colspan="1"><input id="input_actuacion" name="actuacion" type="text"></td>                    
                        <td colspan="1"><input id="input_comercial" name="comercial" type="text"></td>                    
                        <td colspan="1"><input id="input_registro" name="registro" type="text"></td>                    
                        <td colspan="1"><input id="input_dosis" name="dosis" type="text"></td>                    
                        <td colspan="1"><input id="input_fech_actuacion" name="fechActuacion" type="text"></td>
                        <td colspan="1"><input id="input_intervencion" name="intervencion" type="text"></td>
                        <td colspan="1"><input id="input_observaciones" name="observaciones" type="text"></td>            
                    </tr>

                    <input type="submit" name="registro">
                    <input type="reset">
                </table>

            </form>
            
            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $especie = $_POST['especie'];
                    $variedad = $_POST['variedad'];
                    $idParcelas = $_POST['idParcelas'];
                    $superficieCultivada = $_POST['superficieCultivada'];
                    $superficieTratada = $_POST['superficieTratada'];
                    $plaga = $_POST['plaga'];
                    $justificacion = $_POST['justificacion'];
                    $medida = $_POST['medida'];
                    $intensidadMedida = $_POST['intensidadMedida'];
                    $actuacion = $_POST['actuacion'];
                    $comercial = $_POST['comercial'];
                    $registro = $_POST['registro'];
                    $dosis = $_POST['dosis'];
                    $fechActuacion = $_POST['fechActuacion'];
                    $intervencion = $_POST['intervencion'];
                    $observaciones = $_POST['observaciones'];
                    
                    $insertarDatos = "INSERT INTO pag8 VALUES('$especie','$variedad',' $idParcelas','$superficieCultivada',
                                                                    '$superficieTratada','$plaga','$justificacion','$medida','$intensidadMedida'
                                                                    ,'$actuacion','$comercial','$registro','$dosis','$fechActuacion','$intervencion','$observaciones')";
                
                    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
            
                }
            ?>



            <div class="footer">
                <div class="firma">
                    <div class="cuadro-firma"></div>
                    <div class="cuadro2-firma"></div>
                </div>    
                <div class="texto-footer">
                    
                </div>
                <div class="footer-3">
                    <h5>Explotación/ Titular de la explotación:</h5>
                    <input id="primer3-input" type="text">
                    <h5>AÑO:</h5>
                    <input id="segundo3-input" type="text">
                </div>
                <p id="parrafo-footer3">Indicar el número de orden de identificación de las parcelas tratadas (Si se trata a todas las parcelas indicar “TODAS”).</p>
                <div class="footer-2">
                    <p><strong id="hoja">Hoja nº </strong><input id="input-nhoja" type="text"> <strong id="seccion">de la sección nº </strong><input id="input-nseccion" type="text"></p>
                </div>    
                
            </div>
            
        </div>

    

    <script src="/js/script.js"></script>
</body>
</html>