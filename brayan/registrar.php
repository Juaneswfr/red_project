<?php 

include("Conexion_db.php");

if (isset($_POST['Ingresar'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['email']);
	    $email = trim($_POST['contraseña']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(email, contraseña, fecha_reg) VALUES ('$email','$contraseña','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3>¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3>¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!</h3>
           <?php
    }
}

?>