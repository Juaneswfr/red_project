<?php 
    session_start();

    echo '¡Hola ' . htmlspecialchars($_COOKIE["user_type"]) . '!';

    switch ($_COOKIE["user_type"]) {
        case 1:
            header('location: /backend/red_sites/admin_setup.php');
            break;
        case 2:
            header('location: /backend/red_sites/colaborator_setup.php');
            break;
        case 3:
            header('location: /backend/red_sites/setup.php');
            break;
        
        default:
            header('location: /backend/red_sites/setup.php');
        break;
    };

    
?>