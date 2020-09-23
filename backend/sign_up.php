<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/backend/css/style_signup_login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/backend/complement/validate_sign_up.js">  </script>
    <title>Registro</title>
</head>

<body>
    <form id="form" method="post">
        <div class="form">
            <h1>Registrarse</h1>
            <div class="right">
                <input type="text" name="name" id="nombre" placeholder="Nombre"><span class="barra"></span>
            </div>
            <div class="right">
                <input type="text" name="user" placeholder="Usuario"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="email" name="email" placeholder="Email"><span class="barra"></span>
            </div>
            <div class="right-bottom">
                <input type="password" name="password" id="password" placeholder="Password"><span class="barra"></span>
            </div>
            <div class="right-bottom">
                <input type="password" name="confirm_password" id="name" placeholder="Repeat Password"><span class="barra"></span>
            </div>
            <button type="submit" class="button" name="enter">Registrarse</button>
            <a class="button" href="/backend/index.php">Iniciar Sesion</a>
        </div>
    </form>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/user/adm_user.php';
    ?>
</body>

</html>