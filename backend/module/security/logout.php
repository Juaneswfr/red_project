<?php
session_start();
unset($_SESSION["admin_name"]);
$_GET['option']='login';
session_destroy();
header("location:/backend/login");
?>