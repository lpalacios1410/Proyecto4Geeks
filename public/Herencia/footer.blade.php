<footer> 
      <div class="caja_footer" style="float: left;width:100%;height: auto;background-color:#292929; margin-top: 2%;padding: 15px;"> <!-- INICIO DE CAJA DE FOOTER -->

        <h2 align="center" style="color:white;">Contactanos</h2>

        
        <!-- AQUI VA A IR LA CAJA DE COMENTARIO DESPLEGABLE -->
          <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="contacto" style="color:#222222; margin-left: 38%; background-color:#ffbd00; border-color: #ffbd00;"><strong>Contacta con nosotros</strong></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Contenido del modal-->
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Envianos tú comentario</h4>
            <p style="color:#202020;" align="center"><br><strong>Envianos lo que te gusto o no, si tienes alguna duda, o quieres contactar con nosotros, simplemente dejanos tú comentario en la parte de abajo. ¡Gracias por visitarnos!</strong></p>
        </div>
        
        <div class="modal-body">
          <!--<form id="form_coment">-->
            <form id="form_coment">
              
            <input  type="text" name="Nombre" style="width: 50%;" placeholder="&#128100; Nombre" id="Nombre">
            <input  type="text" name="Apellido" style="width: 50%;float: right;" placeholder="&#128100; Apellido" id="Apellido">
          
            <input  type="text" name="Correo" style="width: 100%;" placeholder="&#9993; Email" id="Correo">
          
            <textarea  name="Mensaje" style="width: 80%; height: 100%; margin-left:12%; margin-top: 3%;" placeholder="Escribenos tú comentario"></textarea>
          
          <br><br><button id="comentario" style="text-align: center; margin-left: 45%;" onclick="validar_comentario()">Enviar</button> 
          </form>
        
        </div>
        <div class="modal-footer">
        
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
        </div>
      </div>
      
    </div>
  </div>
  
</div>


          <!-- PARTE DEL PIE DE PAGINA -->
        <ul style="list-style:none;margin-top: 1%;">
          <li style="display: inline; margin-left: 1%;"><a href="#">| Más juegos |</a></li>
          <li style="display: inline; margin-left: 1%;"><a href="#">| Como obtener el juego |</a></li>
        </ul>
          <div>
            <img src="imagenes/LogoFooter.jpg" style="float: right; width: 40%;">

            <i class="fa fa-facebook-square fa-2x" aria-hidden="true" style="color:white;"><a href="#"> Facebook</a></i>
            <br><br><i class="fa fa-instagram fa-2x" aria-hidden="true" style="color:white;"><a href="#"> Instagram</a></i>
            <br><br><i class="fa fa-twitter-square fa-2x" aria-hidden="true" style="color:white;"><a href="#"> Twitter</a></i>
            <br><br><i class="fa fa-youtube-square fa-2x" aria-hidden="true" style="color:white;"><a href="#"> YouTube</a></i>

         </div>

      </footer>