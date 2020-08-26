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
    echo '<pre>'.var_dump($_POST).'</pre>';
    include_once $_SERVER['DOCUMENT_ROOT'].'/backend/sql/security/login_validate.php';

    echo '<pre>'.var_dump($row_get_login_validate).'</pre>';

        
}
?>