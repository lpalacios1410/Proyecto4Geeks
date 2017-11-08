//Llamado de JavaScript

/*---------FUNCION PARA QUE SE VALIDE EL COMENTARIO QUE SE DESEA ENVIAR-----------*/

	function validar_comentario () {
		var nombre,apellido,correo, expresion_correo,expresion_nombre;
		nombre = document.getElementById("Nombre").value;
		apellido = document.getElementById("Apellido").value
		correo = document.getElementById("Correo").value

		expresion_nombre = /^[a-zA-Z][a-zA-Z-_\.][a-zñáéíóúèì]{1,20}$/;
		expresion_correo = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

		if(nombre.length>20 || nombre ===""){
			alert("El nombre es muy largo o esta vacio");
		return false;
	}
	else if (!expresion_nombre.test(nombre)){
		alert ("El nombre esta mal escrito, se excede de los 20 caracteres o esta vacio");
	}/*----- Fin del if de los nombres -----*/
	
	if (apellido.length>20 || apellido ===""){
		alert ("El apellido es muy largo o esta vacio");
	}
	else if (!expresion_nombre.test(apellido)){
		alert("El apellido esta mal escrito, o se excede de los 20 caracteres o esta vacio");
	}/*----- Fin de del if de los apellidos -----*/
		if (correo.length>70 || correo ===""){
			alert("La casilla de correo esta vacia o el correo es muy largo");
	}
	else if (!expresion_correo.test(correo)){
		alert("El correo no es valido: Ejemplo123@hotmail.com, puede ser @Gmail/@outlook/.com/.es -- etc... Pero debe tener esas condiciones.. Intentelo de nuevo");
	}

 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*var service_id = 'luisarmando20092009_hotmail_com';
var template_id = 'template_zSBmgKDv';
var template_params = {
nombre: Nombre,
reply_email: 'luisarmando20092009@hotmail.com',
mensaje: ("#comentario")
};

emailjs.send (service_id, template_id, template_params);*/



//emailjs.sendForm("luisarmando20092009_hotmail_com","template_zSBmgKDv","formulario");



/* ------ FUNCION PARA QUE EL COMENTARIO SE ENVIE A NUESTRO EMAILJS ----- */
var form_coment = $("form#form_coment")
form_coment.submit(function(event){
	event.preventDefault();

  // Change to your service ID, or keep using the default service
  var service_id = "luisarmando20092009_hotmail_com";
  var template_id = "template_zSBmgKDv";

  form_coment.find("#comentario").text("Enviando...");
  emailjs.sendForm(service_id,template_id,"form_coment")
  	.then(function(){ 
    	alert("Se envio tú comentario, gracias por ayudarnos con tú comentario");
       form_coment.find("#comentario").text("Enviado");
    }, function(err) {
       alert("Send email failed!\r\n Response:\n " + JSON.stringify(err));
       form_coment.find("#comentario").text("Enviado");
    });
  return false;
});
///////////////////////////////////////////////////////////////////////////
} /*------------ CIERRE DE FUNCION ------------*/

/*var myform = $("form#myform");
myform.submit(function(event){
    event.preventDefault();

 // Change to your service ID, or keep using the default service
 var service_id = "luisarmando20092009_hotmail_com";
 var template_id = "template_ExcV2RcM";

 myform.find("button").text("Sending...");
 emailjs.sendForm("luisarmando20092009_hotmail_com","template_zSBmgKDv","myform")
     .then(function(){
       alert("Sent!");
      myform.find("button").text("Send");
   }, function(err) {
      alert("Send email failed!\r\n Response:\n " + JSON.stringify(err));
      myform.find("button").text("Send");
   });
 return false;
});*/




/////////////////////////////////////////////////////////

//---------------------------Llamadas de jQuery

/*------------ PARA QUE SE MUESTREN LOS MAPAS CUANDO DE CLICK --------------*/
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
/*------------------------------*/

/*------- ESTO ES PARA QUE CUANDO LE DE CLICK EL MENU SALGA CON CIERTA ANIMACION (EN RESPONSIVE) ----------*/
$(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
 
	});
 
};

/*------------ EFECTO PARA EL BOTON DE IR ARRIBA --------------*/
 $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('#ir_arriba').fadeIn();
            } else {
                $('#ir_arriba').fadeOut();
            }
        });

        $('#ir_arriba').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

    });
 /*--------------------------------------------------------------------------------------*/
