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
        
        default:
    };

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Setup</p>
</body>
</html>