<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag3.css" type="text/css" rel="stylesheet">


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
            <h2>2. IDENTIFICACIÓN DE LAS PARCELAS DE LA EXPLOTACIÓN</h2> 
            
            <!--Documento php para guardar los datos en la bbdd-->
            <?php

                $servidor = "localhost";
                $usuario = "root";
                $contraseña = "";
                $baseDeDatos = "datosfct";

                #$enlace = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);
            ?>
            <form action="#" name="pag3" method="post">
                <table id="punto-2">
                    <tr>
                        <th colspan="16">2.1 DATOS IDENTIFICATIVOS Y AGRONÓMICOS DE LAS PARCELAS</th>
                    </tr>
                    <tr>
                        <td id="nOrden" colspan="1" rowspan="2">Nº DE ORDEN</td>
                        <td id="referenciaSigpac" colspan="7">REFERENCIAS SIGPAC</td>
                        <td id="datosAgronomicos" colspan="7">DATOS AGRONÓMICOS</td>
                        <td id="sistemaAsesoramiento" colspan="1" rowspan="2">SISTEMA DE ASESORAMIENTO EN GESTIÓN INTEGRADA DE PLAGAS</td>
                    </tr>
                    <tr>
                        <td id="cProvincia">Código (2) Provincia</td>
                        <td id="tMunicipal">Término municipal (código y nombre)</td>
                        <td id="cAgregado">Código Agregado</td>
                        <td id="Zona">Zona</td>
                        <td id="nPoligono">Nº de Polígono</td>
                        <td id="nParcela">Nº de Parcela</td>
                        <td id="nRecinto">Nº de Recinto</td>
                        <td id="sigpac">Uso SIGPAC</td>
                        <td id="sSigpac">Superficie SIGPAC (ha)</td>
                        <td id="sCultivada">Superficie Cultivada (ha)</td>
                        <td id="Especie">Especie</td>
                        <td id="Variedad">Variedad</td>
                        <td id="Secano">Secano/Regadío</td>
                        <td id="aireLibre">Aire libre o protegido</td>
                    </tr>
                    <tr>
                        <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_cProvincia" name="codigoProvincia" type="text"></td>
                        <td><input id="input_terminoMunicipal" name="terminoMunicipal" type="text"></td>
                        <td><input id="input_cAgregado" name="codigoAgregado" type="text"></td>
                        <td><input id="input_Zona" name="zona" type="text"></td>
                        <td><input id="input_nPoligono" name="nPoligono" type="text"></td>
                        <td><input id="input_nParcela" name="nParcela" type="text"></td>
                        <td><input id="input_nRecinto" name="nRecinto" type="text"></td>
                        <td><input id="input_Sigpac" name="sigpac" type="text"></td>
                        <td><input id="input_sSigpac" name="sSigpac" type="text"></td>
                        <td><input id="input_Cultivada" name="superficieCultivada" type="text"></td>
                        <td><input id="input_Especie" name="especie" type="text"></td>
                        <td><input id="input_Variedad" name="variedad" type="text"></td>
                        <td><input id="input_Secano" name="secano" type="text"></td>
                        <td><input id="input_Aire" name="aire" type="text"></td>
                        <td><input id="input_sAsesoramiento" name="sAsesoramiento" type="text"></td>
                        
                    </tr>
                    
                    <tr>
                    <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_cProvincia" name="codigoProvincia" type="text"></td>
                        <td><input id="input_terminoMunicipal" name="terminoMunicipal" type="text"></td>
                        <td><input id="input_cAgregado" name="codigoAgregado" type="text"></td>
                        <td><input id="input_Zona" name="zona" type="text"></td>
                        <td><input id="input_nPoligono" name="nPoligono" type="text"></td>
                        <td><input id="input_nParcela" name="nParcela" type="text"></td>
                        <td><input id="input_nRecinto" name="nRecinto" type="text"></td>
                        <td><input id="input_Sigpac" name="sigpac" type="text"></td>
                        <td><input id="input_sSigpac" name="sSigpac" type="text"></td>
                        <td><input id="input_Cultivada" name="superficieCultivada" type="text"></td>
                        <td><input id="input_Especie" name="especie" type="text"></td>
                        <td><input id="input_Variedad" name="variedad" type="text"></td>
                        <td><input id="input_Secano" name="secano" type="text"></td>
                        <td><input id="input_Aire" name="aire" type="text"></td>
                        <td><input id="input_sAsesoramiento" name="sAsesoramiento" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_cProvincia" name="codigoProvincia" type="text"></td>
                        <td><input id="input_terminoMunicipal" name="terminoMunicipal" type="text"></td>
                        <td><input id="input_cAgregado" name="codigoAgregado" type="text"></td>
                        <td><input id="input_Zona" name="zona" type="text"></td>
                        <td><input id="input_nPoligono" name="nPoligono" type="text"></td>
                        <td><input id="input_nParcela" name="nParcela" type="text"></td>
                        <td><input id="input_nRecinto" name="nRecinto" type="text"></td>
                        <td><input id="input_Sigpac" name="sigpac" type="text"></td>
                        <td><input id="input_sSigpac" name="sSigpac" type="text"></td>
                        <td><input id="input_Cultivada" name="superficieCultivada" type="text"></td>
                        <td><input id="input_Especie" name="especie" type="text"></td>
                        <td><input id="input_Variedad" name="variedad" type="text"></td>
                        <td><input id="input_Secano" name="secano" type="text"></td>
                        <td><input id="input_Aire" name="aire" type="text"></td>
                        <td><input id="input_sAsesoramiento" name="sAsesoramiento" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_cProvincia" name="codigoProvincia" type="text"></td>
                        <td><input id="input_terminoMunicipal" name="terminoMunicipal" type="text"></td>
                        <td><input id="input_cAgregado" name="codigoAgregado" type="text"></td>
                        <td><input id="input_Zona" name="zona" type="text"></td>
                        <td><input id="input_nPoligono" name="nPoligono" type="text"></td>
                        <td><input id="input_nParcela" name="nParcela" type="text"></td>
                        <td><input id="input_nRecinto" name="nRecinto" type="text"></td>
                        <td><input id="input_Sigpac" name="sigpac" type="text"></td>
                        <td><input id="input_sSigpac" name="sSigpac" type="text"></td>
                        <td><input id="input_Cultivada" name="superficieCultivada" type="text"></td>
                        <td><input id="input_Especie" name="especie" type="text"></td>
                        <td><input id="input_Variedad" name="variedad" type="text"></td>
                        <td><input id="input_Secano" name="secano" type="text"></td>
                        <td><input id="input_Aire" name="aire" type="text"></td>
                        <td><input id="input_sAsesoramiento" name="sAsesoramiento" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_cProvincia" name="codigoProvincia" type="text"></td>
                        <td><input id="input_terminoMunicipal" name="terminoMunicipal" type="text"></td>
                        <td><input id="input_cAgregado" name="codigoAgregado" type="text"></td>
                        <td><input id="input_Zona" name="zona" type="text"></td>
                        <td><input id="input_nPoligono" name="nPoligono" type="text"></td>
                        <td><input id="input_nParcela" name="nParcela" type="text"></td>
                        <td><input id="input_nRecinto" name="nRecinto" type="text"></td>
                        <td><input id="input_Sigpac" name="sigpac" type="text"></td>
                        <td><input id="input_sSigpac" name="sSigpac" type="text"></td>
                        <td><input id="input_Cultivada" name="superficieCultivada" type="text"></td>
                        <td><input id="input_Especie" name="especie" type="text"></td>
                        <td><input id="input_Variedad" name="variedad" type="text"></td>
                        <td><input id="input_Secano" name="secano" type="text"></td>
                        <td><input id="input_Aire" name="aire" type="text"></td>
                        <td><input id="input_sAsesoramiento" name="sAsesoramiento" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_cProvincia" name="codigoProvincia" type="text"></td>
                        <td><input id="input_terminoMunicipal" name="terminoMunicipal" type="text"></td>
                        <td><input id="input_cAgregado" name="codigoAgregado" type="text"></td>
                        <td><input id="input_Zona" name="zona" type="text"></td>
                        <td><input id="input_nPoligono" name="nPoligono" type="text"></td>
                        <td><input id="input_nParcela" name="nParcela" type="text"></td>
                        <td><input id="input_nRecinto" name="nRecinto" type="text"></td>
                        <td><input id="input_Sigpac" name="sigpac" type="text"></td>
                        <td><input id="input_sSigpac" name="sSigpac" type="text"></td>
                        <td><input id="input_Cultivada" name="superficieCultivada" type="text"></td>
                        <td><input id="input_Especie" name="especie" type="text"></td>
                        <td><input id="input_Variedad" name="variedad" type="text"></td>
                        <td><input id="input_Secano" name="secano" type="text"></td>
                        <td><input id="input_Aire" name="aire" type="text"></td>
                        <td><input id="input_sAsesoramiento" name="sAsesoramiento" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_cProvincia" name="codigoProvincia" type="text"></td>
                        <td><input id="input_terminoMunicipal" name="terminoMunicipal" type="text"></td>
                        <td><input id="input_cAgregado" name="codigoAgregado" type="text"></td>
                        <td><input id="input_Zona" name="zona" type="text"></td>
                        <td><input id="input_nPoligono" name="nPoligono" type="text"></td>
                        <td><input id="input_nParcela" name="nParcela" type="text"></td>
                        <td><input id="input_nRecinto" name="nRecinto" type="text"></td>
                        <td><input id="input_Sigpac" name="sigpac" type="text"></td>
                        <td><input id="input_sSigpac" name="sSigpac" type="text"></td>
                        <td><input id="input_Cultivada" name="superficieCultivada" type="text"></td>
                        <td><input id="input_Especie" name="especie" type="text"></td>
                        <td><input id="input_Variedad" name="variedad" type="text"></td>
                        <td><input id="input_Secano" name="secano" type="text"></td>
                        <td><input id="input_Aire" name="aire" type="text"></td>
                        <td><input id="input_sAsesoramiento" name="sAsesoramiento" type="text"></td>
                    </tr>
                    <tr>
                    <td><input id="input_nOrden" name="nOrden" type="text"></td>
                        <td><input id="input_cProvincia" name="codigoProvincia" type="text"></td>
                        <td><input id="input_terminoMunicipal" name="terminoMunicipal" type="text"></td>
                        <td><input id="input_cAgregado" name="codigoAgregado" type="text"></td>
                        <td><input id="input_Zona" name="zona" type="text"></td>
                        <td><input id="input_nPoligono" name="nPoligono" type="text"></td>
                        <td><input id="input_nParcela" name="nParcela" type="text"></td>
                        <td><input id="input_nRecinto" name="nRecinto" type="text"></td>
                        <td><input id="input_Sigpac" name="sigpac" type="text"></td>
                        <td><input id="input_sSigpac" name="sSigpac" type="text"></td>
                        <td><input id="input_Cultivada" name="superficieCultivada" type="text"></td>
                        <td><input id="input_Especie" name="especie" type="text"></td>
                        <td><input id="input_Variedad" name="variedad" type="text"></td>
                        <td><input id="input_Secano" name="secano" type="text"></td>
                        <td><input id="input_Aire" name="aire" type="text"></td>
                        <td><input id="input_sAsesoramiento" name="sAsesoramiento" type="text"></td>
                    </tr>

                    <input type="submit" name="registro">
                    <input type="reset">
                    
                </table>

            </form> 
            
            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $nOrden = $_POST['nOrden'];
                    $codigoProvincia = $_POST['codigoProvincia'];
                    $terminoMunicipal = $_POST['terminoMunicipal'];
                    $codigoAgregado = $_POST['codigoAgregado'];
                    $zona = $_POST['zona'];
                    $nPoligono = $_POST['nPoligono'];
                    $nParcela = $_POST['nParcela'];
                    $nRecinto = $_POST['nRecinto'];
                    $sigpac = $_POST['sigpac'];
                    $sSigpac = $_POST['sSigpac'];
                    $superficieCultivada = $_POST['superficieCultivada'];
                    $secano = $_POST['secano'];
                    $aire = $_POST['aire'];
                    $sAsesoramiento = $_POST['sAsesoramiento'];

                    $insertarDatos = "INSERT INTO pag5 VALUES('$nOrden','$codigoProvincia','$terminoMunicipal',' $codigoAgregado','$zona',
                                                                    '$nPoligono','$nParcela','$nRecinto','$sigpac','$sSigpac',
                                                                    '$superficieCultivada','$secano','$aire','$sAsesoramiento')";
                
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
    <pre>
      Asignar un número correlativo, agrupando las parcelas con un mismo manejo agrícola.
      (AE) Agricultura Ecológica, (PI) Producción Integrada, (CP) Certificación Privada, (Atrias) Agrupación de Tratamiento Integrado en Agricultura, (AS) Asistida de un asesor, (NO) Sin obligación de aplicar la GIP.
      Si se trata de una variedad genéticamente modificada, añadir las siglas OGM.
      Secano (SEC), aspersión (ASP), goteo o localizado (LOC), por gravedad (GRA).
      Aire libre (AL), malla (M), cubierta bajo plástico (BP), invernadero (INV).
    </pre>
                </div>
                <div class="footer-2">
                    <p><strong>Hoja nº </strong><input id="input-nhoja" type="text"> <strong>de la sección nº </strong><input id="input-nseccion" type="text"></p>
                </div>    
                
            </div>
            
        </div>

    

    <script src="/js/script.js"></script>
</body>
</html>