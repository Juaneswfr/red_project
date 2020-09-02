<?php 

session_start();

# ZONA HORARIA 
date_default_timezone_set('America/Bogota');

$_SESSION['cod_sec'] = md5(session_id());

# VALIDACION 
if (!isset($_GET['option'])){ $_GET['option']="login";} ;

if (!isset($_SESSION['sys_ver'])){
    # PROCEDIMIENTO QUE TRAE LA CONFIGURACIÓN DEL APLICATIVO 
   # include_once $_SERVER['DOCUMENT_ROOT'].'/backend/sql/security/sql_get_about.php'; 
   # $_SESSION['abo_nam']=$row_get_about['abo_nam'];
  #  $_SESSION['abo_ver']= $row_get_about['abo_ver'];
   # $_SESSION['abo_bel']=$row_get_about['abo_bel'];
   # $_SESSION['abo_des']=$row_get_about['abo_des'];
   # $_SESSION['abo_pro_num']=$row_get_about['abo_pro_num'];
}

if ($_GET['option']=="login"){ 
    if (isset($_SESSION['user_log_in'])) { session_unset($_SESSION['user_log_in']);}
    if (isset($_SESSION['usu_id'])) { session_unset($_SESSION['usu_id']);}

    header('location: /backend/login');
}

?>