function Validar () {
	var nombres, apellidos,cedulas, contrasenas, correos, telefonos1, expresion_correo,
	expresion_nombre, expresion_telefono, expresion_cedula;

	nombres= document.getElementById("Nombre").value;
	apellidos= document.getElementById("Apellido").value;
	cedulas= document.getElementById("Cedula").value;
	contrasenas= document.getElementById("Contrasena").value;
	correos= document.getElementById("Correo").value;
	telefonos1= document.getElementById("Telefono1").value;
	

	expresion_correo = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/; /*/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/*/
	
	expresion_nombre = /^[a-zA-Z][a-zA-Z-_\.][a-zñáéíóúèì]{1,20}$/; 		/*/^([A-z][a-zñáéíóúèì]+[\s]*)+$/*/
	
	expresion_telefono = /^[0-9]{2,4}-? ?[0-9]{6,7}$/;
	
	expresion_cedula = /^(?:\+|-)?\d+$/;
	
	expresion_contrasena = /^[a-zA-Z]\w{3,14}$/; /* ME FALTA QUE TENGA NUMEROS TAMBIEN */

	
	/*------------------------- FIN DE VARIABLES --------------------------------*/



	 			/*ESTO ES PARA QUE NINGUNO DE LOS CAMPOS SE QUEDEN VACIOS */
	
	/*if(nombres === "" || apellidos === "" || cedulas === "" || 
		contrasenas === "" || correos === "" || telefonos1 === "" || telefonos2 === ""){
		alert("Uno de los campos no esta lleno o completado.. Todos los campos son obligatorios");
		return false;
	}*/

		/* ESTO ES PARA QUE EL NOMBRE SOLO TENGA 20 CARACTERES Y SEAN SOLO LETRAS */
	
	/*if(nombres.length>20 || nombres ===""){
		alert("El nombre es muy largo o esta vacio");
		//return false;
	}*/
	else if (!expresion_nombre.test(nombres)){
		alert ("El nombre esta mal escrito, se excede de los 20 caracteres o esta vacio");
		//return false;
	}

		/*--------------------------------------------------------------------------------------------------*/

/* ESTO ES PARA QUE EL APELLIDO FUNCIONE IGUAL QUE EL NOMBRE Y SOLO SEAN LETRAS Y NO SE EXCEDA DE LOS 20 CARACTERES */
	
	if (apellidos.length>20 || apellidos ===""){
		alert("El apellido es muy largo o esta vacio");
		//return false;
	}
	else if (!expresion_nombre.test(apellidos)){
		alert("El apellido esta mal escrito se excede de los 20 caracteres o esta vacio");
		//return false;
	}
	/*----- FIN DE LOS APELLIDOS -----------*/

	/* --------------ESTO ES PARA QUE LA CEDULA SEA COLOCADA DE BUENA FORMA --------------------*/
	
	if (cedulas.length>13 || isNaN(cedulas)){
		alert("La cedula tiene que ser menos a 12 caracteres y solo pueden ser numeros");
		//return false;
	}
	else if(!expresion_cedula.test(cedulas)){
		alert("Tiene valores especiales, o esta en blanco... Por favor vuelve a ingresar la cedula");
		//return false;
	}
	/*----------- PARA LA CONTRASEÑA   ---------------------------------------------------------------*/

	if (contrasenas.length>30){
		alert("La contraseña es muy larga");
		//return false;
	}
	else if (!expresion_contrasena.test(contrasenas)){
		alert("La contraseña solo pueden ser letras, solo pueden ser un minimo de 2 letras y un maximo de 14, por favor vuelva a intentar la contraseña");
		//return false;
	}


		/* ESTA ES LA PARTE DE LOS CORREOS */
	if (correos.length>40){
		alert("El correo es muy largo");
		//return false;
	}

	else if (!expresion_correo.test(correos)){
		alert("El correo no es valido: Ejemplo123@hotmail.com, puede ser @Gmail/ @outlook/ .com/ .es Pero debe tener esas condiciones.. Intentelo de nuevo");
		//return false;
	}
		/* FIN DE LA PARTE DE LOS CORREOS */
	

	 /*ESTO ES PARA QUE EL TELEFONO NO PASE DE LOS 20 CARACTERES Y SEAN SOLO NUMEROS DE EL PAIS */
	
	if (telefonos1.length>20){
		alert("El teléfono celular es muy largo");
		//return false;
	}
	
	else if (!expresion_telefono.test("telefonos1")){
		alert("El telefono celular que ingreso no esta especificado o puesto de buena manera, recuerda usar 0212 0412 0416 0424 0426  EJEMPLO: 04169063911");
		//return false;
	}
}
