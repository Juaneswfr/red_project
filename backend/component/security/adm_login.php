<?php
#session_start();

#VALIDAR QUE VENGA UNA ACTION
if(!isset($_POST['action'])){ECHO 'PAILANGAS F EN EL CHAT'; EXIT;}

if($_POST['action'] == 'LV'){

    if(!isset($_POST['email'])){ECHO 'PAILANGAS F EN EL CHAT'; EXIT;}
    if(!isset($_POST['password'])){ECHO 'PAILANGAS F EN EL CHAT'; EXIT;}

    if(!strlen($_POST['password']) > 1 && !strlen($_POST['password']) < 20) {ECHO 'ESCRIBA UNA CONTRASEÑA CORRECTA BABOSO';
         #header('Location:'. $_SERVER['HTTP_REFERER']);
        }

    include_once $_SERVER['DOCUMENT_ROOT'].'/backend/sql/security/login_validate.php';

    //Si el input Checkbox es distinto de 0 entra a este IF
    if($num_rows > 0){
        session_start();
        #ECHO 'ESTA CORRECTO';
        $_SESSION['user_log_in'] = 1;
        
        $_SESSION['admin_name'] = $row_get_login_validate['use_nam'];
        $_SESSION['use_id'] = $row_get_login_validate['use_id'];
        $_SESSION['use_nam'] = $row_get_login_validate['use_nam'];
        $_SESSION['use_use'] = $row_get_login_validate['use_use'];
        $_SESSION['use_ema'] = $row_get_login_validate['use_ema'];
        $_SESSION['use_pas'] = $row_get_login_validate['use_pas'];
        $_SESSION['use_log'] = $row_get_login_validate['use_log'];
        $_SESSION['use_typ_id'] = $row_get_login_validate['use_typ_id'];
        if (!empty($_POST['remember'])) {
            setcookie("email", $row_get_login_validate['use_use'], time()+(10*365*24*60*90));
            setcookie("password", $row_get_login_validate['use_pas'], time()+(10*365*24*60*90));
        } else { //Si no está activo el Checkbox cada cookie se establece en null / 0
            if(isset($_COOKIE['email'])){
                setcookie("email","");
            }
            if(isset($_COOKIE['password'])){
                setcookie("password","");
            }
        }
        
        
        echo "<script> window.location='/backend/dashboard'; </script>";
 

    }else{
        ECHO 'LA CAGO PAPI';
    }
    
    #echo '<pre>'.var_dump($_SESSION).'</pre>';
    /* echo '<pre>'.var_dump($row_get_login_validate).'</pre>'; */


    #$_SESSION["use_id"]=$row_get_login_validate['use_id'];
    #$_SESSION["use_nam"]=$row_get_login_validate['use_nam'];
    #$_SESSION["use_use"]=$row_get_login_validate['use_use'];
    #$_SESSION["use_ema"]=$row_get_login_validate['use_ema'];
    #$_SESSION["use_pas"]=$row_get_login_validate['use_pas'];
    #$_SESSION["use_dat_sig_up"]=$row_get_login_validate['use_dat_sig_up'];
    #$_SESSION["use_typ"]=$row_get_login_validate['use_typ'];
    #echo "<script> window.location='/backend/'; </script>"; 
}
?>