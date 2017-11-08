<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

      <!-- Icono de la pestaña de la pagina web -->
      <link rel="icon" href="Imagenes/LOGO.ico">

      <!-- Tipo de letra de la pagina -->
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

      <!--Estilos y iconos -->
      <link rel="stylesheet" type="text/css" href="css/CssProyecto.css">
  

    <!-- Boostrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Libreria jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- Libreria para iconos -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Script de AJAX -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  <title>Rainbow Six: Siege</title>

  </head>
<body>
  <div class="contenedor_global">
    
    <!-- BARA DE NAVEGACION  --> 
      
  <div class="content">
  <div class="navbar">
    <span class="logo"><img src="Imagenes/IconoNav.jpg"></span>
    <span><a href="#">Armas</a></span>
    <span><a href="#">Personajes</a></span>
    <span><a href="#">Liga Competitivas</a></span>
    
    <button class="ryi"><a href="auth.login">Iniciar sesion</a></button>
    <button class="ryi"><a href="registro">Registrarte</a></button>

  </div>
</div>

  
    
    <!-- FIN DE TABLA NAVEGACION -->  

      <!--        CARRUSEL DE IMAGENES      -->
  

    <div class="container" style="width:100%; margin-left:10px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!--  -->
    <div class="carousel-inner">

      <div class="item active">
      <div style="position:relative;height:0;padding-bottom:42.9%"><iframe src="https://www.youtube.com/embed/BYsgax0fgqI?ecver=2" style="position:absolute;width:100%;height:100%;left:0;border-radius: 5%;" width="839" height="360" frameborder="0" allowfullscreen></iframe></div>
        <div class="carousel-caption">
    
        </div>
      </div>

      <div class="item">
        <img src="imagenes/FondoPantalla1.jpg" alt="RainbowSix1" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="imagenes/FondoPantalla2.jpg" alt="RainbowSix2" style="width:100%;">
        <div class="carousel-caption">
        <h3 class="titulos">RAINBOW SIX: siege</h3>
          <button style="color: #727272;">DESCARGAR</button>
       </div>
      </div>

    <!-- Movimiento del carusel -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>
  
</header>
      
  <!--          FIN DE CARUSEL DE IMAGENES          -->

<!-- CAJA DONDE VA A ESTAR TODO LO DE LA PAGINA -->

  <div class="caja_general">
 

        <?php
           include 'Herencia/aside.blade.php';
           include 'Herencia/section.blade.php';
        ?>

      <!--    CAJA DE INFORMACION DEL JUEGO     (caja_contenido2)   -->
  
       
       <?php
          include 'Herencia/article.blade.php'
          ?>
        
      
      </section>

  </div> <!--     Cierre de DIV de caja general    -->
      
      <!--- Caja de footer -->

      <?php
        include 'Herencia/footer.blade.php'
        ?>

      </div> <!-- FIN DE CAJA DE FOOTER -->

    </div> <!--     FIN DE CONTENEDOR GLOBAL  -->



    <!-- LOGOS A LOS LADOS DE LA PAGINA -->
      <div class="redes">
        <div id="facebook"><a href="#" target="none" class="fa fa-facebook-official"></a></div>
        <div id="youtube"><a href="#" class="fa fa-youtube-play"></a></div>
        <div id="twitter"><a href="#" class="fa fa-twitter"></a></div>
        <div id="correo"><a href="#" class="fa fa-envelope"></a></div>
      </div>

     <span href="#" id="ir_arriba" class="fa fa-arrow-up fa-3x" style="color:white;"></span>


                   <!-- JavaScript -->
  <script type="text/javascript" src="js/JavaProyecto.js"></script>


          <!-- Java de EmailJS -->
<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>

<script type="text/javascript">
   (function(){
      emailjs.init("user_Lz0MIh5lwWXK89NnaT6o2");
   })();
</script>

<!-- Boostrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>