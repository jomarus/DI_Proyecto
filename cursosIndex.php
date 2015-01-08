<!DOCTYPE html>
<html>
<head>
    <title>Cursos Photocad</title>
    <link href="css/cursosIndex.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>

    <script type="application/javascript">
        $(function() {
            $("#categoriaBoton1").click(function() {
                $("div[id=panelModelado]").hide();
                $("div[id=panelFoto]").hide();
                $("div[id=panelProgramacion]").hide();
                $("div[id=panelOrigami]").hide();
                $("div[id=panelConstruccion]").hide();
                $("div[id=panelModelado]").fadeIn();
                });

            $("#categoriaBoton2").click(function() {
                $("div[id=panelModelado]").hide();
                $("div[id=panelFoto]").hide();
                $("div[id=panelProgramacion]").hide();
                $("div[id=panelOrigami]").hide();
                $("div[id=panelConstruccion]").hide();
                $("div[id=panelFoto]").fadeIn();
                });
            $("#categoriaBoton3").click(function() {
                $("div[id=panelModelado]").hide();
                $("div[id=panelFoto]").hide();
                $("div[id=panelProgramacion]").hide();
                $("div[id=panelOrigami]").hide();
                $("div[id=panelConstruccion]").hide();
                $("div[id=panelProgramacion]").fadeIn();
                });
            $("#categoriaBoton4").click(function() {
                $("div[id=panelModelado]").hide();
                $("div[id=panelFoto]").hide();
                $("div[id=panelProgramacion]").hide();
                $("div[id=panelOrigami]").hide();
                $("div[id=panelConstruccion]").hide();
                $("div[id=panelOrigami]").fadeIn();
                });
            $("#cursos").click(function() {
                $("div[id=panelModelado]").fadeIn();
                $("div[id=panelFoto]").fadeIn();
                $("div[id=panelProgramacion]").fadeIn();
                $("div[id=panelOrigami]").fadeIn();
                $("div[id=panelConstruccion]").fadeIn();
                });
            
             $("#categoriaBoton1").mouseenter(function() {
                $("div[id=categoriaDescripcion]").html("<B>Modelado:</B><br><small>Autocad,3dsMax,Revit,Rhino</small>");
                })
             $("#categoriaBoton2").mouseenter(function() {
                $("div[id=categoriaDescripcion]").html("<B>Fotografia:</B><br><small>Photoshop, Fotogrametria</small>");
                });
            $("#categoriaBoton3").mouseenter(function() {
                $("div[id=categoriaDescripcion]").html("<B>Programacion:</B><br><small>HTML, WebGL, Unity3D</small>");
                })
             $("#categoriaBoton4").mouseenter(function() {
                $("div[id=categoriaDescripcion]").html("<B>Origami:</B><br><small>Figurativo, Modular </small>");
                });
             $("#categoriaBotones").mouseleave(function() {
                $("div[id=categoriaDescripcion]").html("<B>Categorias:</B><br><small>Seleccione entre las diferentes categorias: Modelado, Programacion, Fotografia, Origami</small>");
                });
            
            });
    </script>
</head>

<body>
    <div class="contenedor">
        <div class="inicioMenu">
            <a href="../index.html"><div class="inicioBoton"><div id="inicioLetra">I</div>NICIO</div></a>
            <div class="inicioBoton" id="cursos"><div id="inicioLetra">C</div>URSOS</div>
            <a href="formularioRegistro.html"><div class="inicioBoton"><div id="inicioLetra">R</div>EGISTRO</div></a>
            <a href="admin.php"><div class="inicioBotonLogin"><div id="inicioLetra">L</div>OGIN</div></a>
            <FORM method=post>
                <div id="inicioLogin">
                    Usuario <INPUT type=text name="apellido" size=6>
                    Password <INPUT type=text name="apellido" size=6>   
                </div>
            </FORM>
        </div>
        <div class="categoriaMenu">
            <div id="categoriaBotones">
                <div id="categoriaBoton1" class="categoriaBoton"><img src="imagenes/iconos/icono_CategoriaModelado.jpg"></div>
                <div id="categoriaBoton2" class="categoriaBoton"><img src="imagenes/iconos/icono_CategoriaFoto.jpg"></div>
                <div id="categoriaBoton3" class="categoriaBoton"><img src="imagenes/iconos/icono_CategoriaProgramacion.jpg"></div>
                <div id="categoriaBoton4" class="categoriaBoton"><img src="imagenes/iconos/icono_CategoriaOrigami.jpg"></div>
            </div>
            <div id="categoriaDescripcion">
                <B>Categorias:</B><br><small>Seleccione entre las diferentes categorias: Modelado, Programacion, Fotografia, Origami</small>
            </div>
        </div>
        <div class="contenido">
            <a href="cursoAutocad.html">
                <div id="panelModelado" class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img id="imagenModelado" src="imagenes/cursoAutocad.jpg">
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoModelado"><b>Introduccion a Unity3D + aplicaciones en realidad aumentada</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje C#</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>                                                     <li>Animacion</li>
                                    <li>Menu GUI</li>
                                    <li>Realidad aumentada</li>
                                </ol></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="curso3dsmax.html">
                <div id="panelModelado" class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img src="imagenes/curso3ds.jpg">
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoModelado"><b>Introduccion a Unity3D + aplicaciones en realidad aumentada</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje C#</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>                                                     <li>Animacion</li>
                                    <li>Menu GUI</li>
                                    <li>Realidad aumentada</li>
                                </ol></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="cursoRevit.html">
                <div id="panelModelado" class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img src="imagenes/cursoRevit.jpg">
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoModelado"><b>Introduccion a Unity3D + aplicaciones en realidad aumentada</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje C#</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>                                                     <li>Animacion</li>
                                    <li>Menu GUI</li>
                                    <li>Realidad aumentada</li>
                                </ol></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="cursoRhino.html">
                <div id="panelModelado" class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img src="imagenes/cursoRhino.jpg">
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoModelado"><b>Introduccion a Unity3D + aplicaciones en realidad aumentada</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje C#</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>                                                     <li>Animacion</li>
                                    <li>Menu GUI</li>
                                    <li>Realidad aumentada</li>
                                </ol></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="cursoPhotoshop.html">
                <div id="panelFoto"  class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img src="imagenes/cursoPhotoshop.jpg">
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoFoto"><b>Introduccion a Unity3D + aplicaciones en realidad aumentada</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje C#</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>                                                     <li>Animacion</li>
                                    <li>Menu GUI</li>
                                    <li>Realidad aumentada</li>
                                </ol></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="cursoFotogrametria.html">
                <div id="panelFoto" class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img src="imagenes/cursoFotogrametria.jpg">
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoFoto"><b>Introduccion a Unity3D + aplicaciones en realidad aumentada</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje C#</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>                                                     <li>Animacion</li>
                                    <li>Menu GUI</li>
                                    <li>Realidad aumentada</li>
                                </ol></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="cursoWebGL.html">
                <div id="panelProgramacion" class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img src="imagenes/cursoWebGL.jpg">
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoProgramacion"><b>Introduccion a WebGl, mediante la libreria de alto nivel three.js.</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje javascript</li>
                                    <li>Libreria Three.js</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>
                                    <li>Menu GUI</li>
                                    <li>Interaccion adv.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="cursoUnity3D.html">
                <div id="panelProgramacion" class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img src="imagenes/cursoUnity3d.jpg">
                        
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoProgramacion"><b>Introduccion a Unity3D + aplicaciones en realidad aumentada</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje C#</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>                                                 <li>Animacion</li>
                                    <li>Menu GUI</li>
                                    <li>Realidad aumentada</li>
                                </ol></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="cursoOrigami.html">
                <div id="panelOrigami" class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img src="imagenes/cursoOrigami.jpg">
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoOrigami"><b>Introduccion a Unity3D + aplicaciones en realidad aumentada</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje C#</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>                                                     <li>Animacion</li>
                                    <li>Menu GUI</li>
                                    <li>Realidad aumentada</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="cursoOrigamiModular.html">
                <div id="panelOrigami" class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front"><!--Cara de delante-->
                            <img src="imagenes/cursoOrigamiModular.jpg">
                        
                        </div>
                        <div class="back"><!--Cara de detras-->
                            <div id="infoOrigami"><b>Introduccion a Unity3D + aplicaciones en realidad aumentada</b><br>
                                <ol>
                                    <li>Introduccion</li>
                                    <li>Lenguaje C#</li>
                                    <li>Modelado</li>
                                    <li>Mapeado</li>
                                    <li>Iluminacion</li>                                                 <li>Animacion</li>
                                    <li>Menu GUI</li>
                                    <li>Realidad aumentada</li>
                                </ol></div>
                        </div>
                    </div>
                </div>
            </a>
            
            <div class="contenidoCurso" id="panelConstruccion">
                <img src="imagenes/cursoEnconstruccion.jpg">
            </div>
            <div class="contenidoCurso" id="panelConstruccion">
                <img src="imagenes/cursoEnconstruccion.jpg">
            </div>
            <div class="contenidoCurso" id="panelConstruccion">
                <img src="imagenes/cursoEnconstruccion.jpg">
            </div>    
            <div class="contenidoCurso" id="panelConstruccion">
                <img src="imagenes/cursoEnconstruccion.jpg">
            </div>  
            <div class="contenidoCurso" id="panelConstruccion">
                <img src="imagenes/cursoEnconstruccion.jpg">
            </div>  
        </div>
    </div>     
</body>
</html>