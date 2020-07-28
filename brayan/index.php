<?php 
//Inicio de la sesión
session_start();
//Si ya existe una sesión se dirigirá al Dashboard
if(isset($_SESSION['admin_name'])){
    header("location:/brayan/backend/dashboard.php");
}
//--------------------------------------
//Cuando se presione el btn de login (Submit)
if (isset($_POST["btn_login"])) {
    //Si alguno de los campos está vacio y/o los datos no coinciden se verifican en este IF
    if (!empty($_POST['email'] && !empty($_POST['contraseña']))) {
        $conex = mysqli_connect("localhost","root","","registro"); 
        $email = $_POST['email'];
        $password = $_POST['contraseña'];
        $consult = "SELECT * FROM datos WHERE (email='$email' or usuario='$email') and contraseña = '$password' ";
        $result = mysqli_query($conex,$consult);

        $user=mysqli_fetch_array($result);
        //Si los datos son correctos entra a este IF
        if($user){
            //Si el input Checkbox es distinto de 0 entra a este IF
            if (!empty($_POST['remember'])) {
                setcookie("email", $email, time()+(10*365*24*60*90));
                setcookie("contraseña", $password, time()+(10*365*24*60*90));
                $_SESSION['admin_name']=$email;
            } else { //Si no está activo el Checkbox cada cookie se establece en null / 0
                if(isset($_COOKIE['email'])){
                    setcookie("email","");
                    $_SESSION['admin_name']=$email;
                }
                if(isset($_COOKIE['contraseña'])){
                    setcookie("contraseña","");
                    $_SESSION['admin_name']=$password;
                }
            }
            //Después de estrablecer la conexión,las cookies estén establecidas,  y que los datos coincidan es enviado al dashboard, esto se refuerza con otro PHP 
            header("location:/brayan/backend/index.php");
            $_SESSION['admin_name']=$email;
        } else {
            //En caso de que los datos no coincidan
            $message="Ingreso invalido";
        }
    }
    else {
        //Cuando no está lleno ningún campo
        $mensaje="Ambos son campos obligatorios";
        echo $mensaje;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $("form").validate
                ({
                    rules:
                    {
                        //Email y Password son el tipo de los input
                        email: {required: true, email: false, maxlength:50},
                        password: {required: true, maxlength: 20 }
                    },
                    messages:
                    {
                        email:{required: 'Ingrese su email o usuario',  maxleght: 'El máximo permitido son 50 caracteres'},
                        password: {required: "Ingrese su contraseña", maxlength: "Debe tener menos de 20 carácteres" }
                        
                    }
                });
            });
    </script>
    <link rel="stylesheet" href="css/style_signup_login.css">
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
                <input type="password" name="contraseña" placeholder="Password"  value="<?php if(isset($_COOKIE['contraseña'])){
                    echo $_COOKIE['contraseña'];
                } ?>"><span class="line"></span>
            
            </div>
            <div class="remember_container">
                <input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["email"])) {
                ?> checked <?php } ?> class="checkbox" > <p class="remember">Recuerdame</p>
            </div>
            <button id="btn" type="submit" class="button" name="btn_login">Iniciar Sesión</button>
            <a class="button" href="sign_up.php">Registrarse</a>
        </div>
    </form>
<!--Fin del FORM------------------------------------------------------------>
    <?php 
        include("php/sesion_validate.php"); //Validar si la información está correcta en el login
    ?>
</body>
</html>