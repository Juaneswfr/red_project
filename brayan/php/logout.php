<?php
session_start();
unset($_SESSION["admin_name"]);
header("location:/brayan/backend/index.php");
?>