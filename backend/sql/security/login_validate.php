<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';
$link=connect();
mysqli_set_charset($link, "utf8");

$sql_query = 'SELECT * FROM jin_user WHERE (jin_ema="'.$_POST['email'].'" or jin_use="'.$_POST['email'].'") and jin_pas = "'.$_POST['password'].'"';

if (!$sql_login_validate=mysqli_query($link,$sql_query)) {
    ECHO "HAY UN ERROR JAJAJAJA";
    EXIT;
} else {
    $row_get_login_validate=mysqli_fetch_assoc($sql_login_validate); 
    mysqli_free_result($sql_login_validate);
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
                
                setcookie("id", $user[0], time()+(10*365*24*60*90));
                setcookie("nam", $user[1], time()+(10*365*24*60*90));
                setcookie("use", $user[2], time()+(10*365*24*60*90));
                setcookie("ema", $user[3], time()+(10*365*24*60*90));
                setcookie("pas", $user[4], time()+(10*365*24*60*90));
                setcookie("dat_sig_up", $user[5], time()+(10*365*24*60*90));
                
            } else {
                //En caso de que los datos no coincidan
                header("location:/backend/index.php");
                ?><h3 class="message_php">Ingreso no valido</h3><?php  
            }
        }
        else {
            //Cuando no está lleno ningún campo
            $mensaje="Ambos son campos obligatorios";
            echo $mensaje;
        }
    }
} 


?>