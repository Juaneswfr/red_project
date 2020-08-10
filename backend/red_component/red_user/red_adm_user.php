<?php 

include $_SERVER['DOCUMENT_ROOT'].'/backend/red_function/red_connection/red_connection.php';

if (isset($_POST['enter'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
		$name = trim($_POST['name']);
		$user= trim($_POST['user']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$confirmpassword = trim($_POST['confirm_password']);
		$date_sign_up = date("d/m/y");
		$consulta = "INSERT INTO datos(name, user, email, password, date_sign_up) VALUES ('$name','$user','$email','$password','$date_sign_up')";
		
		$verificar_email = mysqli_query($conex, "SELECT	* FROM datos WHERE email='$email'");
		$verificar_user= mysqli_query($conex, "SELECT * FROM datos WHERE user='$user'");
		if (mysqli_num_rows($verificar_email) > 0){
			echo 'El email ya está registrado';
			exit;
		}else if (mysqli_num_rows($verificar_user) > 0){
			echo 'El user ya está registrado';
			exit;
		}
		

		if($password==$confirmpassword){
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
			echo "Las passwords no son iguales";
			exit;
		}
		header('Location:/backend/index.php');


	    
		
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!</h3>
		   <?php
		   $hola = mysqli_errno($conex). " Message ".mysqli_error($conex);
           echo $hola;
    }
}

?>