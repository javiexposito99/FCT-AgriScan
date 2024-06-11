<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link href="http://localhost/FCT/css/pag4.css" type="text/css" rel="stylesheet">


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

            <form action="#" name="pag4" method="post">
                <table id="punto-2">
                    <tr>
                        <th colspan="16">2.2. DATOS IDENTIFICATIVOS MEDIOAMBIENTALES DE LAS PARCELAS</th>
                    </tr>
                    <tr>
                        <td colspan="1" rowspan="2">Id. parcelas</td>
                        <td colspan="7">Cultivo</td>
                        <td colspan="7">Puntos de captación de agua procedente de pozos y masas de agua
                            utilizadas para consumo humano</td>
                        <td colspan="1">Parcelas en zonas específicas</td>
                        
                    </tr>
                    <tr>
                        <td colspan="2">Especie</td>
                        <td colspan="2">Variedad</td>
                        <td colspan="2">Incluido en la parcela (SI/NO)</td>
                        <td colspan="2">Distancia (m)</td>
                        <td colspan="2">Coordenadas UTM</td>
                        <td colspan="2">Denominación</td>
                        <td colspan="2">Totalmente (SI/NO)</td>
                        <td colspan="2">Parcialmente (SI/NO)</td>
                    </tr>
                    <tr>
                        <td><input id="idParcelas" name="idParcelas" type="text"></td>
                        <td colspan="2"><input id="especie" name="especie" type="text"></td>
                        <td colspan="2"><input id="variedad" name="variedad" type="text"></td>
                        <td colspan="2"><input id="incluido" name="incluido" type="text"></td>
                        <td colspan="2"><input id="distancia" name="distancia" type="text"></td>
                        <td colspan="2"><input id="coordenadas" name="coordenadas" type="text"></td>
                        <td colspan="2"><input id="denominacion" name="denominacion" type="text"></td>
                        <td colspan="2"><input id="totalmente" name="totalmente" type="text"></td>
                        <td colspan="2"><input id="parcialmente" name="parcialmente" type="text"></td>
                    </tr>
                    <tr>
                        <td><input id="idParcelas" name="idParcelas" type="text"></td>
                        <td colspan="2"><input id="especie" name="especie" type="text"></td>
                        <td colspan="2"><input id="variedad" name="variedad" type="text"></td>
                        <td colspan="2"><input id="incluido" name="incluido" type="text"></td>
                        <td colspan="2"><input id="distancia" name="distancia" type="text"></td>
                        <td colspan="2"><input id="coordenadas" name="coordenadas" type="text"></td>
                        <td colspan="2"><input id="denominacion" name="denominacion" type="text"></td>
                        <td colspan="2"><input id="totalmente" name="totalmente" type="text"></td>
                        <td colspan="2"><input id="parcialmente" name="parcialmente" type="text"></td>
                    </tr>
                    <tr>
                        <td><input id="idParcelas" name="idParcelas" type="text"></td>
                        <td colspan="2"><input id="especie" name="especie" type="text"></td>
                        <td colspan="2"><input id="variedad" name="variedad" type="text"></td>
                        <td colspan="2"><input id="incluido" name="incluido" type="text"></td>
                        <td colspan="2"><input id="distancia" name="distancia" type="text"></td>
                        <td colspan="2"><input id="coordenadas" name="coordenadas" type="text"></td>
                        <td colspan="2"><input id="denominacion" name="denominacion" type="text"></td>
                        <td colspan="2"><input id="totalmente" name="totalmente" type="text"></td>
                        <td colspan="2"><input id="parcialmente" name="parcialmente" type="text"></td>
                    </tr>
                    <tr>
                        <td><input id="idParcelas" name="idParcelas" type="text"></td>
                        <td colspan="2"><input id="especie" name="especie" type="text"></td>
                        <td colspan="2"><input id="variedad" name="variedad" type="text"></td>
                        <td colspan="2"><input id="incluido" name="incluido" type="text"></td>
                        <td colspan="2"><input id="distancia" name="distancia" type="text"></td>
                        <td colspan="2"><input id="coordenadas" name="coordenadas" type="text"></td>
                        <td colspan="2"><input id="denominacion" name="denominacion" type="text"></td>
                        <td colspan="2"><input id="totalmente" name="totalmente" type="text"></td>
                        <td colspan="2"><input id="parcialmente" name="parcialmente" type="text"></td>
                    </tr>
                    <tr>
                        <td><input id="idParcelas" name="idParcelas" type="text"></td>
                        <td colspan="2"><input id="especie" name="especie" type="text"></td>
                        <td colspan="2"><input id="variedad" name="variedad" type="text"></td>
                        <td colspan="2"><input id="incluido" name="incluido" type="text"></td>
                        <td colspan="2"><input id="distancia" name="distancia" type="text"></td>
                        <td colspan="2"><input id="coordenadas" name="coordenadas" type="text"></td>
                        <td colspan="2"><input id="denominacion" name="denominacion" type="text"></td>
                        <td colspan="2"><input id="totalmente" name="totalmente" type="text"></td>
                        <td colspan="2"><input id="parcialmente" name="parcialmente" type="text"></td>
                    </tr>
                    <tr>
                        <td><input id="idParcelas" name="idParcelas" type="text"></td>
                        <td colspan="2"><input id="especie" name="especie" type="text"></td>
                        <td colspan="2"><input id="variedad" name="variedad" type="text"></td>
                        <td colspan="2"><input id="incluido" name="incluido" type="text"></td>
                        <td colspan="2"><input id="distancia" name="distancia" type="text"></td>
                        <td colspan="2"><input id="coordenadas" name="coordenadas" type="text"></td>
                        <td colspan="2"><input id="denominacion" name="denominacion" type="text"></td>
                        <td colspan="2"><input id="totalmente" name="totalmente" type="text"></td>
                        <td colspan="2"><input id="parcialmente" name="parcialmente" type="text"></td>               
                    </tr>
                    <tr>
                        <td><input id="idParcelas" name="idParcelas" type="text"></td>
                        <td colspan="2"><input id="especie" name="especie" type="text"></td>
                        <td colspan="2"><input id="variedad" name="variedad" type="text"></td>
                        <td colspan="2"><input id="incluido" name="incluido" type="text"></td>
                        <td colspan="2"><input id="distancia" name="distancia" type="text"></td>
                        <td colspan="2"><input id="coordenadas" name="coordenadas" type="text"></td>
                        <td colspan="2"><input id="denominacion" name="denominacion" type="text"></td>
                        <td colspan="2"><input id="totalmente" name="totalmente" type="text"></td>
                        <td colspan="2"><input id="parcialmente" name="parcialmente" type="text"></td>               
                    </tr>
                    <tr>
                        <td><input id="idParcelas" name="idParcelas" type="text"></td>
                        <td colspan="2"><input id="especie" name="especie" type="text"></td>
                        <td colspan="2"><input id="variedad" name="variedad" type="text"></td>
                        <td colspan="2"><input id="incluido" name="incluido" type="text"></td>
                        <td colspan="2"><input id="distancia" name="distancia" type="text"></td>
                        <td colspan="2"><input id="coordenadas" name="coordenadas" type="text"></td>
                        <td colspan="2"><input id="denominacion" name="denominacion" type="text"></td>
                        <td colspan="2"><input id="totalmente" name="totalmente" type="text"></td>
                        <td colspan="2"><input id="parcialmente" name="parcialmente" type="text"></td>               
                    </tr>
                    <tr>
                        <td><input id="idParcelas" name="idParcelas" type="text"></td>
                        <td colspan="2"><input id="especie" name="especie" type="text"></td>
                        <td colspan="2"><input id="variedad" name="variedad" type="text"></td>
                        <td colspan="2"><input id="incluido" name="incluido" type="text"></td>
                        <td colspan="2"><input id="distancia" name="distancia" type="text"></td>
                        <td colspan="2"><input id="coordenadas" name="coordenadas" type="text"></td>
                        <td colspan="2"><input id="denominacion" name="denominacion" type="text"></td>
                        <td colspan="2"><input id="totalmente" name="totalmente" type="text"></td>
                        <td colspan="2"><input id="parcialmente" name="parcialmente" type="text"></td>               
                    </tr>
                    <input type="submit" name="registro">
                    <input type="reset">
                </table>
            </form>

            <!--Mas documento php-->
            <?php
                if(isset($_POST['registro'])){
                    $idParcelas = $_POST['idParcelas'];
                    $especie = $_POST['codigoProvincia'];
                    $variedad = $_POST['terminoMunicipal'];
                    $incluido = $_POST['codigoAgregado'];
                    $distancia = $_POST['zona'];
                    $coordenadas = $_POST['nPoligono'];
                    $denominacion = $_POST['nParcela'];
                    $totalmente = $_POST['nRecinto'];
                    $parcialmente = $_POST['sigpac'];
                    
                    $insertarDatos = "INSERT INTO pag6 VALUES('$idParcelas','$especie','$variedad','$incluido','$distancia',
                                                                    '$coordenadas','$denominacion','$totalmente','$parcialmente')";
                
                    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
            
                }
            ?>

            <div class="footer">
                <div class="linea-footer"></div>
                <div class="texto-footer">
<pre>
Identificar el número de orden de identificación de las parcelas tratadas (Si se trata a todas las parcelas indicar “TODAS”).
Se considerarán zonas específicas, según el artículo 34 del RD 1311/2012, las zonas de extracción de agua para consumo humano, las Zonas de protección de hábitats y especies y Zonas de protección de especies acuáticas
significativas declaradas protegidas en virtud del Reglamento de la Planificación Hidrológica, las Zonas de protección declaradas en el marco del RD 139/2011 para el desarrollo del Listado de Especies Silvestres en Régimen de
Protección Especial y del Catálogo Español de Especies Amenazadas, o del RD 1997/1995 por el que se establecen medidas para contribuir a garantizar la biodiversidad mediante la conservación de los hábitats naturales y de la fauna y
flora silvestres.
Indicar la distancia en metros si el punto de captación está fuera de las parcelas.
Campo voluntario.
Identificar los pozos y las masas de agua superficial utilizadas para extracción de agua para consumo de agua.
En caso afirmativo, indicar las hectáreas de parcela afectada, si se conocen.
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