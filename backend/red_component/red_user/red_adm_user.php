<?php 

include("Conexion_db.php");

if (isset($_POST['ingresar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1) {
		$nombre = trim($_POST['nombre']);
		$usuario= trim($_POST['usuario']);
		$email = trim($_POST['email']);
		$contraseña = trim($_POST['contraseña']);
		$confirmarContraseña = trim($_POST['confirmar_contraseña']);
		$fecha_registro = date("d/m/y");
		$consulta = "INSERT INTO datos(nombre, usuario, email, contraseña, fecha_registro) VALUES ('$nombre','$usuario','$email','$contraseña','$fecha_registro')";
		
		$verificar_email = mysqli_query($conex, "SELECT	* FROM datos WHERE email='$email'");
		$verificar_usuario= mysqli_query($conex, "SELECT * FROM datos WHERE usuario='$usuario'");
		if (mysqli_num_rows($verificar_email) > 0){
			echo 'El email ya está registrado';
			exit;
		}else if (mysqli_num_rows($verificar_usuario) > 0){
			echo 'El usuario ya está registrado';
			exit;
		}
		

		if($contraseña==$confirmarContraseña){
			$resultado = mysqli_query($conex,$consulta);
	    	if ($resultado) {
	    	?> 
	    	<h3>¡Te has inscrito correctamente!</h3>
		   <?php
	    	} else {
            ?> 
            <h3>¡Ups ha ocurrido un error!</h3>
           <?php
           $error_a = mysqli_errno($conex). " Message ".mysqli_error($conex);
           echo $error_a;
			}

		} else {
			echo "Las contraseñas no son iguales";
			exit;
		}
		header('Location: ./index.php');


	    
		
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!</h3>
		   <?php
		   $hola = mysqli_errno($conex). " Message ".mysqli_error($conex);
           echo $hola;
    }
}

?>