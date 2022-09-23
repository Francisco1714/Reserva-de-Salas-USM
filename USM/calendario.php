<!DOCTYPE html>

<html>
    <link href="Estilos/Style.css" rel="stylesheet" /> 
    <head>
        <meta http-equiv="Content-type" content="text/html; charset-UTF-8"/>
        <title>Ver Calendario</title>
        <div class="header">
            &nbsp;
            <img src="img/logo.png" class="logo"/>
             <div class="titulo">Universidad Federico Santa Maria</div>
          </div>
    </head>
        <body>  
           <div class="boton">
               <button class="btn1">Importar Excel</button>
           
            <a href="index.php"><button class="btn2">Volver</button></a>
           </div>     
           <?php
                    require 'conexion.php';
                    $sql="SELECT * FROM tbl_testeo";
                    $result=mysqli_query($conexion,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                ?>
            <table class="tabla">
                <tr class="color1">
                     <th scope="row"> Salas </th>
                    <th colspan="20"> Lunes </th>
                    <th colspan="20"> Martes </th>
                    <th colspan="20"> Miercoles </th>
                    <th colspan="20"> Jueves </th>
                    <th colspan="20"> Viernes </th>
                    <th colspan="20"> Sabado </th>
                </tr>
                <tr class="color1">
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>

                 

                </tr>

            </tr>
          
                <tr>
                    <th class="color">A101</th>
          
                  
                    <td><?php echo $mostrar['direccion'] ?></td>
                    <td><?php echo $mostrar['id'] ?></td>
                 
         
                </tr>
                <tr>
                    <th class="color">A102</th>
                    
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
 
                </tr>
                <tr>
                    <th class="color">A103</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">A104</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">A105</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">A108</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">A110</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">A111</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">A112</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">BELLOTO1</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">BELLOTO2</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">BELLOTO3</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B101</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>

                    
                </tr>
                <tr>
                    <th class="color">B102</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B103</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B104</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B105(Laboratorio)</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B106</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B107</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B108</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B109</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B201</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B202</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B203</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B204</th>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
                <tr>
                    <th class="color">B205</th>
                </tr>
                <tr>
                    <th class="color">B206</th>
                </tr>
                <tr>
                    <th class="color">B207</th>
                </tr>
                <tr>
                    <th class="color">B208</th>
                </tr>
                <tr>
                    <th class="color">B209</th>
                </tr>
                <tr>
                    <th class="color">C201</th>
                </tr>
                <tr>
                    <th class="color">C202</th>
                </tr>
                <tr>
                    <th class="color">C203</th>
                </tr>
                <tr>
                    <th class="color">D201</th>
                </tr>
                <tr>
                    <th class="color">D202</th>
                </tr>
                <tr>
                    <th class="color">D203</th>
                </tr>
                <tr>
                    <th class="color">Escuela De Vuelo-Externo-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Escuela Vuelo Aerosantamaria</th>
                </tr>
                <tr>
                    <th class="color">E104</th>
                </tr>
                <tr>
                    <th class="color">Gim-Externo-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Gim-Multiuso-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Gim-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Lab-Aeronautico 1</th>
                </tr>
                <tr>
                    <th class="color">Lab-Aeronautico 2</th>
                </tr>
                <tr>
                    <th class="color">Lab-A100 Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Lab-B001-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Lab-B003-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Lab-D104</th>
                </tr>
                <tr>
                    <th class="color">Lab-Fisica1-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Lab-Fisica2-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Lab-Fisica3- Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Lab-Quimica-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Sala Reunion Aca Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Sala Reunion Informatica</th>
                </tr>
                <tr>
                    <th class="color">Sala-Reunion-Industria-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Sala-Reunion-Sector-A-Vitacura </th>
                </tr>
                <tr>
                    <th class="color">Simulador Vuelo-Vitacura</th>
                </tr>
                <tr>
                    <th class="color">Sin Sala</th>
                </tr>
                <tr>
                    <th class="color">Taller Metal-Mecanico</th>
                </tr>
                <tr>
                    <th class="color">Valparaiso</th>
                </tr>
              <?php
                    }
                ?> 
            </table>
            
            <div class="container"></div>
            <footer class="footer">
                <section class="footer-main">
                <div class="footer-item">
                    <h2 class="footer-titulo">Universidad</h2>
                    <ul>
                        <li><a href="https://usm.cl/universidad/historia/">Nuestra Historia</a></li>
                        <li><a href="https://usm.cl/universidad/federico-santa-maria/">Federico Santa Maria</a></li>
                        <li><a href="https://usm.cl/universidad/plan-estrategico-institucional/">Definiciones Estrategicas</a></li>
                        <li><a href="https://usm.cl/universidad/modelo-educativo/">Modelo Educativo</a></li>
                        <li><a href="https://usm.cl/universidad/rectoria/">Organización</a></li>
                        <li><a href="https://usm.cl/admision/indicadores-institucionales/">Informacion Estadística USM</a></li>
                        
                        <h2 class="footer-titulo">Campus Y Sedes</h2>
                        <li><a href="https://usm.cl/universidad/campus-y-sedes/">Información Campus y Sedes</a></li>
                        <li><a href="https://tour360.usm.cl/">Tour Virtual</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h2 class="footer-titulo">Extensión y Cultura</h2>
                    <ul>
                        <li><a href="https://comunicaciones.usm.cl/" class="a">Dirección General de Comunicaciones</a></li>
                        <li><a href="https://vinculacion.usm.cl/">Dirección General de Vinculación con el Medio</a></li>
                        <li><a href="https://oai.usm.cl/">Oficina de Asuntos Internacionales</a></li>
                        <li><a href="https://exalumnos.usm.cl/">Red de Ex-Alumnos</a></li>
                        <li><a href="https://usm.cl/noticias/">Noticias USM</a></li>
                        <li><a href="https://usm.cl/eventos/">Eventos USM</a></li>
                        <li><a href="https://radio.usm.cl/">Radio USM</a></li>
                        <li><a href="https://cultura.usm.cl/">Cultura USM</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h2 class="footer-titulo">Servicios</h2>
                    <ul>
                        <li><a href="https://aula.usm.cl/">Aula USM</a></li>
                        <li><a href="https://biblioteca.usm.cl/c.php?g=926221">Biblioteca USM</a></li>
                        <li><a href="https://autoservicio.usm.cl/PROD/twbkwbis.P_GenMenu?name=homepage">Portal de Autoservicio Institucional</a></li>
                        <li><a href="https://dti.usm.cl/">Dirección de Tecnologías de la Información</a></li>
                        <li><a href="http://www.portalreportes.usm.cl/">Portal de Reportes UDAI</a></li>
                        <li><a href="https://siga.usm.cl/pag/">Sistema de Información de Gestión Académica</a></li>
                        <li><a href="https://argos-erp.usm.cl/">Sistema Integrado de Información Argos ERP</a></li>
                        <li><a href="https://srh.usm.cl/">Sistema de Remuneraciones Históricas</a></li>
                        <li><a href="https://directorio.usm.cl/">Directorio USM</a></li>
                        <li><a href="https://usm.hiringroom.com/jobs">Trabaja con nosotros</a></li>
                    </ul>
        
                    <ul class="usmCL-logo">
                    <a href="https://usm.cl/" class="usm"><img src="img/usmCL.PNG" class="usmCL"></a>
                    </ul>
        
                    <ul class="footer-social-lista">
        
                        <a href="https://www.facebook.com/usantamaria"><img src="img/facebook.png" class="f"></a>
                        <a href="https://twitter.com/usantamaria"><img src="img/twitter.png" class="t"></a>
                        <a href="https://www.youtube.com/channel/UCr5rEvayXIC0YnJxDAWuWtQ"><img src="img/youtube.png" class="y"></a>
                        <a href="https://www.instagram.com/usantamaria/"><img src="img/instagram.png" class="i"></a></li>
                        <a href="https://www.linkedin.com/school/usantamaria/"><img src="img/linkedin.png" class="l"></a></li>
                    </ul>
                </div>
                </section>
                <section class="footer-social">
                    <ul class="footer-asociados"></ul>
                    <a href="https://acceso.mineduc.cl/"><img src="img/acceso superior.png" class="acceso"></a>
                    <a href="https://www.consejoderectores.cl/"><img src="img/cruch.png" class="cruch"></a>
                    <a href="https://redg9.cl/"><img src="img/G9logo.PNG" class="g9"></a>
                    <a href="https://www.auregionales.cl/"><img src="img/AURlogo.PNG" class="aur"></a>
                    <a href="https://consejoderectoresvalparaiso.cl/"><img src="img/CRUVlogo.PNG" class="cruv"></a>
                    <a href="https://www.reuna.cl/"><img src="img/REUNAlogo.PNG" class="reuna"></a>
                    <a href="https://www.universia.net/cl/home.html"><img src="img/UNIVERSIAlogo.PNG" class="universia"></a>
                </section>
            </footer>
        </body>
       
</html>