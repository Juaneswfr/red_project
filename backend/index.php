<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/red_function/red_session/red_session_started.php';?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/red_function/red_session/red_session_login.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/backend/red_complement/validate_login.js"></script>
    <link rel="stylesheet" href="/backend/red_css/style_signup_login.css">
    <title>Inicio de Sesión</title>
</head>
<body>
<!--Inicio del FORM------------------------------------------------------------>
    <form action="" id="form" method="POST">
        <div class="form">
            <h1>Iniciar Sesión</h1>
            <?php if(isset($message)) {
                echo $message;
            } ?>
            <div class="grupo">
                <input type="text" name="email" placeholder="Email o Usuario" value="<?php if(isset($_COOKIE['email'])){
                    echo $_COOKIE['email'];
                } ?>"><span class="line"></span>

            </div>
            <div class="bot_line">
                <input type="password" name="password" placeholder="Password"  value="<?php if(isset($_COOKIE['contraseña'])){
                    echo $_COOKIE['contraseña'];
                } ?>"><span class="line"></span>
            
            </div>
            <div class="remember_container">
                <input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["email"])) {
                ?> checked <?php } ?> class="checkbox" > <p class="remember">Recuerdame</p>
            </div>
            <button id="btn" type="submit" class="button" name="btn_login">Iniciar Sesión</button>
            <a class="button" href="/backend/sign_up.php">Registrarse</a>
        </div>
    </form>
<!--Fin del FORM------------------------------------------------------------>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'].'/backend/red_sql/red_security/red_login_validate.php'; //Validar si la información está correcta en el login
    ?>
</body>
</html>