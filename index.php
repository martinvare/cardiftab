<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> </title>
    <meta name="author" content=" ">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="robots" content="all">
	
    <link rel="shortcut icon" href="/favicon.png">
    
    <link href='http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,800,700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 7]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
    <![endif]-->

    <script src="scripts/modernizr-latest.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <script src="scripts/masonry.pkgd.min.js"></script>

	<script type="text/javascript" src="scripts/jquery.sudoSlider.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			var sudoSlider = $("#slider").sudoSlider();
		});	
		$(document).ready(function(){	
			var sudoSlider = $("#descargas").sudoSlider();
		});	
	</script>

    
    <!-- ANALYTICS 
    <?php include_once("analyticstracking.php") ?>-->
    
<script>
var ns6=document.getElementById&&!document.all
function restrictinput(maxlength,e,placeholder){
if (window.event&&event.srcElement.value.length>=maxlength)
return false
else if (e.target&&e.target==eval(placeholder)&&e.target.value.length>=maxlength){
var pressedkey=/[a-zA-Z0-9.,/]/ //detect alphanumeric keys
if (pressedkey.test(String.fromCharCode(e.which)))
e.stopPropagation()
}
}
function countlimit(maxlength,e,placeholder){
var theform=eval(placeholder)
var lengthleft=maxlength-theform.value.length
var placeholderobj=document.all? document.all[placeholder] : document.getElementById(placeholder)
if (window.event||e.target&&e.target==eval(placeholder)){
if (lengthleft<0)
theform.value=theform.value.substring(0,maxlength)
placeholderobj.innerHTML=lengthleft
} }
function displaylimit(theform,thelimit){
var limit_text='<span id="'+theform.toString()+'">'+thelimit+'</span>'
if (document.all||ns6)
document.write(limit_text)
if (document.all){
eval(theform).onkeypress=function(){ return restrictinput(thelimit,event,theform)}
eval(theform).onkeyup=function(){ countlimit(thelimit,event,theform)}
} else if (ns6){
document.body.addEventListener('keypress', function(event) { restrictinput(thelimit,event,theform) }, true); 
document.body.addEventListener('keyup', function(event) { countlimit(thelimit,event,theform) }, true); 
} }
</script>
    
</head>

<body id="index">

  <!-- INICIO CONTENEDOR 100% -->
  <div id="container">
  
    <!-- INICIO HEADER -->
    <header>
      <div class="content maso">
        <a href="index.php" class="logo" title="Monsanto"></a>
        <nav>
          <ul>
            <li class="first"><a href="noticias.php" class="bt01" title="Noticias">Noticias</a></li>
            <li><a href="biblioteca.php" class="bt02" title="Biblioteca">Biblioteca</a></li>
            <li><a href="preguntas.php" class="bt03" title="Preguntas">Preguntas</a></li>
            <li><a href="la-planta.php" class="bt04" title="La Planta">La Planta</a></li>
            <li><a href="comunidad.php" class="bt05" title="Comunidad">Comunidad</a></li>
            <li class="last"><a href="agricultura-sustentable.php" class="bt06" title="Agricultura Sustentable">Agricultura<br> Sustentable</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </header>
    <!-- FIN HEADER -->


    <!-- INICIO CONTENIDO -->
    <div class="bg-claro">
      <div class="back">
        <div class="content">
          <div class="wrap">
            <h1>Tus dudas nos interesan. Animate. Preguntá. <strong>Monsanto te responde.</strong></h1>
            <h2>En Monsanto amamos lo que hacemos. Y amamos dónde lo hacemos. Por eso amamos Malvinas. Y por eso nuestro trabajo allí se basa en el respeto hacia su comunidad y hacia su entorno. Y por eso también queremos escucharte, responderte, y contarte cómo hacemos lo que hacemos.</h2>
          </div>
          <form name="formulario" class="right" id="pregunta">
            <fieldset>
              <input type="text" name="nombre" placeholder="Tu nombre">
            </fieldset>
            <fieldset class="contador relative">
              <input type="text" name="pregunta" placeholder="Tu pregunta">
			  <script> displaylimit("document.formulario.pregunta",140) </script>
            </fieldset>
            <fieldset>
              <textarea name="nombre" placeholder="Más información sobre tu pregunta"></textarea>
            </fieldset>
            <fieldset>
              <input type="text" name="email" placeholder="Tu email para responderte">
            </fieldset>

            <fieldset>
              <div class="buttons">
                <input type="submit" name="enviar" value="ENVIAR">
                <input type="reset" name="borrar" value="BORRAR">
              </div>
              <div class="captcha">
                <img src="images/temp-captcha.png" class="block">
              </div>
            </fieldset>
          </form>
		  <div class="clear"></div>
        </div>
      </div>
    </div>
    <!-- FIN CONTENIDO -->

    <!-- INICIO CONTENIDO -->
    <div class="bg-gris">
      <div class="back">
      <div class="content maso">
        <h4 class="one"><span>PREGUNTAS DESTACADAS</span></h4>
		
        <div class="cuadros">
        
          <div class="cuadro">
            <h5><a href="#" title="¿QUÉ IMPACTO TIENE LA PLANTA EN EL ECOSISTEMA DE LA ZONA?">¿Es verdad que van a desterrar a la gente que vive en la zona para poder hac er la construcción?</a></h5>
            <b>James Deen</b>
            <section>
              <span></span>
              <a href="#" class="rta">Conocé nuestra respuesta</a>
            </section>
          </div>

          <div class="cuadro">
            <h5><a href="#" title="¿QUÉ IMPACTO TIENE LA PLANTA EN EL ECOSISTEMA DE LA ZONA?">¿Es verdad que van a desterrar a la gente que vive en la zona para poder hac er la construcción?</a></h5>
            <b>James Deen</b>
            <section>
              <span></span>
              <img src="images/temp-cuadro-img.jpg" class="block" alt="¿QUÉ IMPACTO TIENE LA PLANTA EN EL ECOSISTEMA DE LA ZONA?">
              <a href="#" class="rta">Conocé nuestra respuesta</a>
            </section>
          </div>

          <div class="cuadro">
            <h5><a href="#" title="¿QUÉ IMPACTO TIENE LA PLANTA EN EL ECOSISTEMA DE LA ZONA?">¿Es verdad que van a desterrar a la gente que vive en la zona para poder hac er la construcción?</a></h5>
            <b>James Deen</b>
            <section>
              <span></span>
              <a href="#" class="rta">Conocé nuestra respuesta</a>
            </section>
          </div>

          <div class="cuadro">
            <h5><a href="#" title="¿QUÉ IMPACTO TIENE LA PLANTA EN EL ECOSISTEMA DE LA ZONA?">¿Es verdad que van a desterrar a la gente que vive en la zona para poder hac er la construcción?</a></h5>
            <b>James Deen</b>
            <section>
              <span></span>
              <img src="images/temp-cuadro-img.jpg" class="block" alt="¿QUÉ IMPACTO TIENE LA PLANTA EN EL ECOSISTEMA DE LA ZONA?">
              <a href="#" class="rta">Conocé nuestra respuesta</a>
            </section>
          </div>

          <div class="cuadro">
            <h5><a href="#" title="¿QUÉ IMPACTO TIENE LA PLANTA EN EL ECOSISTEMA DE LA ZONA?">¿Es verdad que van a desterrar a la gente que vive en la zona para poder hac er la construcción?</a></h5>
            <b>James Deen</b>
            <section>
              <span></span>
              <iframe width="460" height="259" src="http://www.youtube.com/embed/BgKNwXDrJsc?autoplay=0" frameborder="0" allowfullscreen></iframe>
              <a href="#" class="rta">Conocé nuestra respuesta</a>
            </section>
          </div>

          <div class="cuadro">
            <h5><a href="#" title="¿QUÉ IMPACTO TIENE LA PLANTA EN EL ECOSISTEMA DE LA ZONA?">¿Es verdad que van a desterrar a la gente que vive en la zona para poder hac er la construcción?</a></h5>
            <b>James Deen</b>
            <section>
              <span></span>
              <a href="#" class="rta">Conocé nuestra respuesta</a>
            </section>
          </div>

        <div class="clear"></div>



        </div>
        
        <div class="clear"></div>
        


          <a href="#" class="mas"><span><img src="images/ico-mas.png" alt="Ver más"></span></a>


        </div>
      </div>
    </div>
    <!-- FIN CONTENIDO -->

    <!-- INICIO CONTENIDO -->
    <div class="bg-oscuro">
      <div class="back">
      
      <div class="content maso">
        
        <section id="noticias">
          <h4 class="one"><span>ULTIMAS NOTICIAS</span></h4>
          
          <div class="cuadross">
          
            <div class="noticia">
              <a href="#" title="" class="img"><img src="images/temp-noticia-01.jpg" alt="Noicia" class="block"><span></span></a>
                    <article>
                      <a href="#">Monsanto y la Comunidad de Córdoba</a>
                      <p>Creemos firmemente en la responsabilidad de devolver a las sociedades en las que operamos parte de lo que éstas nos brindan a diario. Desde Monsanto implementamos programas sociales y prod … </p>
                    </article>
                    <ul class="detalles">
                      <li>
                        <div class="fecha"><b>26</b> ENE</div>
                      </li>
                      <li>
                        <div class="seccion">PLANTA</div>
                      </li>
                      <li>
                        <a href="#" class="mas-sobre">Más sobre esta noticia</a>
                      </li>
                      <div class="clear"></div>
                    </ul>
                  </div>
                  
                  <div class="noticia">
                    <a href="#" title="" class="img"><img src="images/temp-noticia-02.jpg" alt="Noicia" class="block"><span></span></a>
                    <article>
                      <a href="#">Monsanto apuesta a la educación de los trabajadores rurales</a>
                      <p>Buenos Aires, enero de 2014.- Desde enero de 2013 Monsanto desarrolla un Programa de Capacitación en el campamento San Luis (Rojas, Provincia de Buenos Aie Monsanto implementamos programas nte en la respon nte en la responsabilidad nte en la responsabilidad nte en la responsabilid e Monsanto implementamos programas nte en la respon nte en la responsabilidad nte en la responsabilidad nte en la responsabilidres), con el objetivo de mejorar la calidad de vida, fortalecer las capacidades laborales y oportunidades de desarrollo humano de sus empleados rurales. En … </p>
                    </article>
                    <ul class="detalles">
                      <li>
                        <div class="fecha"><b>25</b> ENE</div>
                      </li>
                      <li>
                        <div class="seccion">RSC</div>
                      </li>
                      <li>
                        <a href="#" class="mas-sobre">Más sobre esta noticia</a>
                      </li>
                      <div class="clear"></div>
                    </ul>
                  </div>
                  

                  <div class="noticia">
                    <a href="#" title="" class="img"><img src="images/temp-noticia-01.jpg" alt="Noicia" class="block"><span></span></a>
                    <article>
                      <a href="#">Monsanto y la Comunidad de Córdoba</a>
                      <p>Creemos firmemente en la responsabilidad de devolver a las sociedades en las que operamos parte de lo que éstas nos brindan a diario. Desdadsabilidad nte en la responsabilidad sociales y productivos con el objetivo de alentar el desarrollo de las comunidades argentinas … </p>
                    </article>
                    <ul class="detalles">
                      <li>
                        <div class="fecha"><b>26</b> ENE</div>
                      </li>
                      <li>
                        <div class="seccion">PLANTA</div>
                      </li>
                      <li>
                        <a href="#" class="mas-sobre">Más sobre esta noticia</a>
                      </li>
                      <div class="clear"></div>
                    </ul>
                  </div>
                  
                  <div class="noticia">
                    <a href="#" title="" class="img"><img src="images/temp-noticia-02.jpg" alt="Noicia" class="block"><span></span></a>
                    <article>
                      <a href="#">Monsanto apuesta a la educación de los trabajadores rurales</a>
                      <p>Buenos Aires, enero de 2014.- Desde enero de 2013 Monsanto desarrolla un Programa de Capacitación en el campamento San Luis (Rojas, Provincia de Buenos Aires), con el objetivo de En … </p>
                    </article>
                    <ul class="detalles">
                      <li>
                        <div class="fecha"><b>25</b> ENE</div>
                      </li>
                      <li>
                        <div class="seccion">RSC</div>
                      </li>
                      <li>
                        <a href="#" class="mas-sobre">Más sobre esta noticia</a>
                      </li>
                      <div class="clear"></div>
                    </ul>
                  </div>
                  
            <div class="clear"></div>
            
          </div>


          <a href="#" class="mas"><span><img src="css/images/ico-mas-ov.png" alt="Ver más"></span></a>

        </section>
      
      </div>
      
      <div class="content">

        <section id="biblioteca">
          <h4 class="one"><span>BIBLIOTECA DE DESCARGAS</span></h4>
			
          <div class="relative">
            <div id="descargas">
              <ul>
                <li>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Nuevo acuerdo entre Monsanto y el gobienrno</p></a></div>
                  <div class="item mp3"><a href="#" title=""><b>.MP3:</b> <p>Charla sobre avances en biotecnología</p></a></div>
                  <div class="item mov"><a href="#" title=""><b>.MOV:</b> <p>Conocé nuestra planta</p></a></div>
                  <div class="item jpg"><a href="#" title=""><b>.JPG:</b> <p>Fotos sobre los procesos sustentables</p></a></div>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Programas de Desarrollo Social</p></a></div>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Ley de plantación y biotecnología</p></a></div>
                  <div class="item jpg"><a href="#" title=""><b>.JPG:</b> <p>Fotos del avance de obra de la Planta</p></a></div>
                </li>
                <li>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Nuevo acuerdo entre Monsanto y el gobienrno</p></a></div>
                  <div class="item mp3"><a href="#" title=""><b>.MP3:</b> <p>Charla sobre avances en biotecnología</p></a></div>
                  <div class="item mov"><a href="#" title=""><b>.MOV:</b> <p>Conocé nuestra planta</p></a></div>
                  <div class="item jpg"><a href="#" title=""><b>.JPG:</b> <p>Fotos sobre los procesos sustentables</p></a></div>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Programas de Desarrollo Social</p></a></div>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Ley de plantación y biotecnología</p></a></div>
                  <div class="item jpg"><a href="#" title=""><b>.JPG:</b> <p>Fotos del avance de obra de la Planta</p></a></div>
                </li>
                <li>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Nuevo acuerdo entre Monsanto y el gobienrno</p></a></div>
                  <div class="item mp3"><a href="#" title=""><b>.MP3:</b> <p>Charla sobre avances en biotecnología</p></a></div>
                  <div class="item mov"><a href="#" title=""><b>.MOV:</b> <p>Conocé nuestra planta</p></a></div>
                  <div class="item jpg"><a href="#" title=""><b>.JPG:</b> <p>Fotos sobre los procesos sustentables</p></a></div>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Programas de Desarrollo Social</p></a></div>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Ley de plantación y biotecnología</p></a></div>
                  <div class="item jpg"><a href="#" title=""><b>.JPG:</b> <p>Fotos del avance de obra de la Planta</p></a></div>
                </li>
                <li>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Nuevo acuerdo entre Monsanto y el gobienrno</p></a></div>
                  <div class="item mp3"><a href="#" title=""><b>.MP3:</b> <p>Charla sobre avances en biotecnología</p></a></div>
                  <div class="item mov"><a href="#" title=""><b>.MOV:</b> <p>Conocé nuestra planta</p></a></div>
                  <div class="item jpg"><a href="#" title=""><b>.JPG:</b> <p>Fotos sobre los procesos sustentables</p></a></div>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Programas de Desarrollo Social</p></a></div>
                  <div class="item doc"><a href="#" title=""><b>.DOC:</b> <p>Ley de plantación y biotecnología</p></a></div>
                  <div class="item jpg"><a href="#" title=""><b>.JPG:</b> <p>Fotos del avance de obra de la Planta</p></a></div>
                </li>
              </ul>
            </div>
          </div>
          <!-- FIN SLIDER -->

        </section>

        <section id="videos">
          <h4 class="one"><span>VIDEO DESTACADO</span></h4>
          <div class="media left">
            <iframe width="640" height="360" src="http://www.youtube.com/embed/BgKNwXDrJsc?autoplay=0" frameborder="0" allowfullscreen></iframe>
          </div>
          <article class="right">
            <p>En <mark>Monsanto</mark> amamos lo que<br>
hacemos. Y amamos dónde lo <br>
hacemos. Por eso amamos Malvinas. <br>
Y por eso nuestro trabajo allí se basa <br>
en el respeto hacia su comunidad y hacia su entorno. Y por eso también queremos escucharte, responderte, <br>
y contarte cómo hacemos lo que hacemos. </p>
          </article>
          <div class="clear"></div>
        </section>
        
      </div>
      </div>
    </div>
    <!-- FIN CONTENIDO -->

  </div>
  <!-- FIN CONTENEDOR 100% -->
  
  <!-- INICIO FOOTER w 100% -->
  <footer>
    <form>
      <label>BUSCAR:</label>
      <input type="text" placeholder="Preguntas, Noticias, Archivos, Secciones, palabras clave">
      <input type="submit" name="buscar" value=" ">
      <div class="clear"></div>
    </form>
  </footer>
  <!-- FIN FOOTER w 100% -->

<script>
docReady( function() {
  var container = document.querySelector('.cuadros');
  var msnry = new Masonry( container, {
    columnWidth: 60
  });
});
docReady( function() {
  var container = document.querySelector('.cuadross');
  var msnry = new Masonry( container, {
    columnWidth: 60
  });
});
</script>

</body>
</html>