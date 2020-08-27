<?php
session_start();

#VALIDAR QUE VENGA UNA ACTION
if(!isset($_POST['action'])){ECHO 'PAILANGAS F EN EL CHAT'; EXIT;}

if($_POST['action'] == 'LV'){

    if(!isset($_POST['email'])){ECHO 'PAILANGAS F EN EL CHAT'; EXIT;}
    if(!isset($_POST['password'])){ECHO 'PAILANGAS F EN EL CHAT'; EXIT;}

    if(!strlen($_POST['password']) > 1 && !strlen($_POST['password']) < 20) {ECHO 'ESCRIBA UNA CONTRASEÑA CORRECTA BABOSO';
         #header('Location:'. $_SERVER['HTTP_REFERER']);
        }
    /* echo '<pre>'.var_dump($_POST).'</pre>'; */
    include_once $_SERVER['DOCUMENT_ROOT'].'/backend/sql/security/login_validate.php';

    /* echo '<pre>'.var_dump($row_get_login_validate).'</pre>'; */

    $id="$row_get_login_validate[jin_id]";
    $nam="$row_get_login_validate[jin_nam]";
    $use="$row_get_login_validate[jin_use]";
    $ema="$row_get_login_validate[jin_ema]";
    $pas="$row_get_login_validate[jin_pas]";
    $dat_sig_up="$row_get_login_validate[jin_dat_sig_up]";
    $use_typ="$row_get_login_validate[jin_use_typ]";

    $_SESSION["user_id"]=$id;
    $_SESSION["user_nam"]=$nam;
    $_SESSION["user_use"]=$use;
    $_SESSION["user_ema"]=$ema;
    $_SESSION["user_pas"]=$pas;
    $_SESSION["user_dat_sig_up"]=$dat_sig_up;
    $_SESSION["user_typ"]=$use_typ;
    /* echo "<script> window.location='/backend/dashboard.php'; </script>"; */
}
?>