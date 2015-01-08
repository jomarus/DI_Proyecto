<!DOCTYPE html>
<html>
<head>
    <title>Cursos Photocad</title>
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
    <?php include_once("conexion.php");?>
    <script type="application/javascript">
    
        var categoria;
        
        function variablesDOM(){
            categoria=document.getElementById("categoriaDescripcion");
        }
        function categorias(curso){
            if(curso == "usuarios"){
                categoria.innerHTML="<B>Usuarios:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>";
            }else if(curso == "autocad"){
                categoria.innerHTML="<B>Autocad:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == "3dsmax"){
                categoria.innerHTML="<B>3dsMax:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == "revit"){
                categoria.innerHTML="<B>Revit:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == "rhinoceros"){
                categoria.innerHTML="<B>Rhinoceros:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == "photoshop"){
                categoria.innerHTML="<B>Photoshop:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == "fotogrametria"){
                categoria.innerHTML="<B>Fotogrametria:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == "webgl"){
                categoria.innerHTML="<B>WebGL:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == "unity3d"){
                categoria.innerHTML="<B>Unity3D:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == "origami"){
                categoria.innerHTML="<B>Orimagi:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == "origamimodular"){
                categoria.innerHTML="<B>Origami Modular:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }else if(curso == ""){
                categoria.innerHTML="<B>Categorias:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>"; 
            }
        }
    </script>
</head>

<body onload="variablesDOM()">
    <div class="contenedor">
        <div class="inicioMenu">
            <a href="../index.html"><div class="inicioBoton"><div id="inicioLetra">I</div>NICIO</div></a>
            <a href="cursosIndex.html"><div class="inicioBoton" id="cursos"><div id="inicioLetra">C</div>URSOS</div></a>
            <a href="formularioRegistro.html"><div class="inicioBoton"><div id="inicioLetra">R</div>EGISTRO</div></a>
            <FORM action="admin.php" method="post">
                <a href="admin.html">
                    <div class="inicioBotonLogin"><div id="inicioLetra">L</div>OGIN</div>
                </a>
                <div id="inicioLogin">
                    Usuario <INPUT type=text name="apellido" size=6>
                    Password <INPUT type=text name="apellido" size=6>   
                </div>
            </FORM>
        </div>
        <div class="categoriaMenu">
            <FORM method=post name='formularioCategorias' action>
                <button type="submit" name="usuarios" value="usuarios" ><img src="imagenes/iconos/iconoUsuarios.jpg" onmouseover="categorias('usuarios')" onmouseout="categorias('')"></button>
                <button type="submit" name="autocad" value="autocad" ><img src="imagenes/iconos/iconoAutocad.jpg" onmouseover="categorias('autocad')" onmouseout="categorias('')"></button>
                <button type="submit" name="3dsmax" value="3dsmax" ><img src="imagenes/iconos/icono3dsmax.jpg" onmouseover="categorias('3dsmax')" onmouseout="categorias('')"></button>
                <button type="submit" name="revit" value="revit" ><img src="imagenes/iconos/iconoRevit.jpg" onmouseover="categorias('revit')" onmouseout="categorias('')"></button>           
                <button type="submit" name="rhinoceros" value="rhinoceros" ><img src="imagenes/iconos/iconoRhino.jpg "onmouseover="categorias('rhinoceros')" onmouseout="categorias('')" ></button>
                <button type="submit" name="photoshop" value="photoshop" ><img src="imagenes/iconos/iconoPhotoshop.jpg" onmouseover="categorias('photoshop')" onmouseout="categorias('')"></button>
                <button type="submit" name="fotogrametria" value="fotogrametria" ><img src="imagenes/iconos/iconoFoto.jpg" onmouseover="categorias('fotogrametria')" onmouseout="categorias('')"></button>
                <button type="submit" name="webgl" value="webgl" onmouseover="categorias('webgl')" onmouseout="categorias('')"><img src="imagenes/iconos/iconoWebGL.jpg"></button>
                <button type="submit" name="unity3d" value="unity3d" ><img src="imagenes/iconos/iconoUnity3D.jpg" onmouseover="categorias('unity3d')" onmouseout="categorias('')"></button>           
                <button type="submit" name="origami" value="origami" ><img src="imagenes/iconos/iconoOrigami.jpg" onmouseover="categorias('origami')" onmouseout="categorias('')"</button>
                <button type="submit" name="origamimodular" value="origamimodular" ><img src="imagenes/iconos/iconoOrigami2.jpg" onmouseover="categorias('origamimodular')" onmouseout="categorias('')"></button>
            </FORM>
            
            <div id="categoriaDescripcion">
                <B>Categorias:</B><br><small>Seleccione entre las diferentes cursos y usuarios</small>
            </div>
        </div>
        <div class="contenido">
            <div class="datosBD">
                <?php
                $user="Usuario";
                $password="Contrasena";

                //Asignar query como array
                $result=mysql_query("SELECT * FROM estudiantes",$conexion);
                   echo "<table id='datos'>";
                if (isset($_POST['usuarios']))   {
                    //Asignar query como array
                    $result=mysql_query("SELECT * FROM estudiantes",$conexion);
                    //Listar filas
                        echo "<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Mail</th><th>Usuario</th><th>Password</th><th>Fecha de alta</th></tr>";
                    while($row = mysql_fetch_array($result)){
                        echo "<tr><td id='idbd'>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["apellidos"]."</td><td>".$row["mail"]."</td><td>".$row["usuario"]."</td><td>".$row["password"]."</td><td id='fecha'>".$row["fecha"]."</td></tr>";
                    }
                    
                } elseif ( isset($_POST['autocad']) )   {
                $result=mysql_query("SELECT estudiantes.nombre, estudiantes.apellidos, cursos.curso, cursos_estudiantes.fecha_Descarga FROM estudiantes
                                        INNER JOIN cursos_estudiantes
                                            ON estudiantes.id = cursos_estudiantes.estudiante_id
                                        INNER JOIN cursos
                                            ON cursos.id = cursos_estudiantes.curso_id
                                        WHERE cursos.curso= 'Autocad'
                                        ORDER BY estudiantes.nombre;",$conexion);
                        echo "<tr><th>Nombre</th><th>Apellidos</th><th>Curso</th><th>Fecha de descarga</th></tr>";
                    while($row = mysql_fetch_array($result)){
                        echo "<tr><td>".$row["nombre"]."</td><td>".$row["apellidos"]."</td><td>".$row["curso"]."</td><td>".$row["fecha_Descarga"]."</td></tr>";
                    }
                }
                echo "</table>";
                ?>
            </div> 
            
            <div class="formularioAdmin">
                <FORM method=post>
                    
                <div id="formularioAdminBotones">
                    <div id="boton">Nuevo</div>
                    <div id="boton">Modificar</div>
                    <div id="boton">Borrar</div>
                    <div id="boton">Eliminar</div>

                    <!--<INPUT type="submit" value="Enviar">-->
                </div> 
                    
                <TABLE id="formularioAdminTabla" border=0> 
                <TR>
                    <td> &nbsp &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp</td>
                    <TD height=30>Nombre</TD>
                    <TD>
                        <INPUT type=text name="nombre" size="5">
                    </TD>
                        
                    <TD colspan=2 align="right">Genero 
                    H <INPUT type=radio name="genero" value="M">
                    M <INPUT type=radio name="genero" value="F">
                    </TD>



                    <td>&nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp  &nbsp</td>
                    <TD>Usuario</TD>
                    <TD>
                        <INPUT type=text name="nombre" size="10">
                    </TD>
                    <TD align="right" >
                        ID <INPUT type=text name="nombre" size="3">
                    </TD>
                </TR>
                        
                <TR><td></td>
                    <TD height=37>Apellidos</TD>
                    <TD align="right"  colspan=3>
                    <INPUT type=text name="apellido" size=36>
                    </TD>
                        <td></td>
                    <TD>Password</TD>
                    <TD>
                        <INPUT type=text name="nombre" size="10">
                    </TD>
                </TR>
                <TR><td></td>
                    <TD height=37>E-Mail</TD>
                    <TD align="right"  colspan=3>
                    <INPUT type=text name="apellido" size=36>
                    </TD>
                        <td></td>
                   <TD rowspan=2>Intereses</TD>
                    <TD rowspan=2>
                        <input type="checkbox" name="option1" value="Milk"> Arquitectura<br> 
                        <input type="checkbox" name="option3" value="Cheese"> Restauracion<br>
                        <input type="checkbox" name="option2" value="Butter" > Informatica 
                    </TD>
                    <TD rowspan=2 colspan=2>
                        <input type="checkbox" name="option2" value="Butter" > Dise&ntildeo<br>
                        <input type="checkbox" name="option1" value="Milk"> Fotogrametria<br>
                        <input type="checkbox" name="option3" value="Cheese"> Fotografia    
                    </td>
                </TR>
                <TR><td></td>
                    <TD height=37>Edad</TD>
                    <TD>
                        <INPUT type=text name="nombre" size="1">
                    </TD>
                    <TD>Estudios</TD>
                    <TD align="right">
                    <SELECT name="ocupación"  >
                        <OPTION VALUE="profesor">Profesor</OPTION>
                        <OPTION VALUE="estudiante">Estudiante</OPTION>
                        <OPTION VALUE="ingeniero">Ingeniero</OPTION>
                        <OPTION VALUE="jubilado">Jubilado</OPTION>
                        <OPTION VALUE="otro">Otro</OPTION>
                    </SELECT>
                    </TD> 
                </TR>
                </TABLE>
                </FORM>
            </div>   
        </div>
    </div>
</body>
</html>