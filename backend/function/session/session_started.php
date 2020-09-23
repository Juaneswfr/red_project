<?php 
//Inicio de la sesión
session_start();
//Si ya existe una sesión se dirigirá al Dashboard
if(isset($_SESSION['admin_name'])){
    header("location:/backend/dashboard.php");
}
?>