<?php 

include $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';

if (isset($_POST['enter'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
		$name = trim($_POST['name']);
		$user= trim($_POST['user']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$confirmpassword = trim($_POST['confirm_password']);
		$date_sign_up = date("d/m/y");
		$consulta = "INSERT INTO jin_user(jin_nam, jin_use, jin_ema, jin_pas, jin_dat_sig_up) VALUES ('$name','$user','$email','$password','$date_sign_up')";
		$verificar_email = mysqli_query($conex, "SELECT	* FROM jin_user WHERE jin_ema='$email'");
		$verificar_user= mysqli_query($conex, "SELECT * FROM jin_user WHERE jin_use='$user'");
		if (mysqli_num_rows($verificar_email) > 0){
			?> 
	    	<h3 class="message_php">El email ya está registrado</h3>
		   <?php
			exit;
		}else if (mysqli_num_rows($verificar_user) > 0){
			?> 
	    	<h3 class="message_php">El usuario ya está registrado</h3>
		   <?php
			exit;
		}
		

		if($password==$confirmpassword){
			$resultado = mysqli_query($conex,$consulta);
	    	if ($resultado) {
				echo "<script> window.location='/backend/index.php'; </script>";
	    	?> 
	    	<h3 class="message_php">¡Ha inscrito correctamente el usuario!</h3>
		   <?php
	    	} else {
            ?> 
            <h3>¡Ups ha ocurrido un error!</h3>
           <?php
           $error_a = mysqli_errno($conex). " Message ".mysqli_error($conex);
           echo $error_a;
			}

		} else {
			?> 
	    	<h3 class="message_php">Contraseña incorrecta</h3>
		   <?php
			exit;
		}
		#header('Location:/backend/index.php');
		echo "<script> window.location='/backend/index.php'; </script>";


	    
		
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!</h3>
		   <?php
		   $hola = mysqli_errno($conex). " Message ".mysqli_error($conex);
           echo $hola;
    }
}

?>