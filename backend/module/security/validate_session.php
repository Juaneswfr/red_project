<?php  #PROYECT v0.01 
#BRAYAN ESTIVEN HUESO AVILA
#Behueso@misena.edu.co
session_start();  //Inicio de la sesión
if(!isset($_SESSION["admin_name"]))
{
 header("location:/backend/index.php");
}

//Si ya existe una sesión se dirigirá al Dashboard
if(isset($_SESSION['admin_name'])){
    header("location:/backend/dashboard.php");
}
?>
