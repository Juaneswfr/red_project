<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';
//Cuando se presione el btn de login (Submit)
if (isset($_POST["btn_login"])) {
    //Si alguno de los campos está vacio y/o los datos no coinciden se verifican en este IF
    if (!empty($_POST['email'] && !empty($_POST['password']))) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $consult = "SELECT * FROM jin_user WHERE (jin_ema='$email' or jin_use='$email') and jin_pas = '$password' ";
        $result = mysqli_query($conex,$consult);
        $user=mysqli_fetch_array($result);
        //Si los datos son correctos entra a este IF
        if($user){
            //Si el input Checkbox es distinto de 0 entra a este IF
            if (!empty($_POST['remember'])) {
                setcookie("email", $email, time()+(10*365*24*60*90));
                setcookie("password", $password, time()+(10*365*24*60*90));
                $_SESSION['admin_name']=$email;
            } else { //Si no está activo el Checkbox cada cookie se establece en null / 0
                if(isset($_COOKIE['email'])){
                    setcookie("email","");
                    $_SESSION['admin_name']=$email;
                }
                if(isset($_COOKIE['password'])){
                    setcookie("password","");
                    $_SESSION['admin_name']=$password;
                }
            }
            //Después de estrablecer la conexión,las cookies estén establecidas,  y que los datos coincidan es enviado al dashboard, esto se refuerza con otro PHP 
            header("location:/backend/index.php");
            $_SESSION['admin_name']=$email;
            
            setcookie("user_type", $user[6], time()+(10*365*24*60*90));
            
        } else {
            //En caso de que los datos no coincidan
            ?><h3 class="message_php">Ingreso no valido</h3><?php  
        }
    }
    else {
        //Cuando no está lleno ningún campo
        $mensaje="Ambos son campos obligatorios";
        echo $mensaje;
    }
}
?>