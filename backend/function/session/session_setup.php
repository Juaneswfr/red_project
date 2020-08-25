<?php 
    session_start();

    echo '¡Hola ' . htmlspecialchars($_COOKIE["user_type"]) . '!';

    switch ($_COOKIE["user_type"]) {
        case 1:
            header('location: /backend/sites/admin_setup.php');
            break;
        case 2:
            header('location: /backend/sites/colaborator_setup.php');
            break;
        case 3:
            header('location: /backend/sites/setup.php');
            break;
        
        default:
            header('location: /backend/sites/setup.php');
        break;
    };

    
?>