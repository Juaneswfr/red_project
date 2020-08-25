<?php 
function connect() { 
    if (!($link = mysqli_connect("localhost","id14577579_jinnova","J1nn0v4 R3d pr0j3ct","id14577579_jinnova_redproject") or trigger_error(mysqli_error($link),E_USER_ERROR))) { 
       echo "Error conectando a la base de datos.";
       exit(); 
    }   /* check connection */
     if (mysqli_connect_errno()) {
         printf("Connect failed: %s\n", mysqli_connect_error());
         exit();
     }
    return $link; 
 }

$conex = mysqli_connect("localhost","id14577579_jinnova","J1nn0v4 R3d pr0j3ct","id14577579_jinnova_redproject"); 
?>