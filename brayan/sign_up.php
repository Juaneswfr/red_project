<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_signup_login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $("form").validate
                ({
                    rules:
                    {
                        nombre: {required: true, minlength: 2, maxlength: 60},
                        usuario: {required: true, minlength: 5, maxlength: 20},
                        email: {required: true, email: true, minlength: 5, maxlength:50},
                        contraseña: {required: true, minlength: 5, maxlength: 20 },
                        confirmar_contraseña: {required: true, minlength: 5, maxlength: 20, equalTo: "#password"}
                    },
                    messages:
                    {
                        nombre: {required: "Por favor ingrese su nombre", minlength: "Este campo debe tener mínimo 2 caracteres", maxlength: "Este campo debe tener menos de 60 caracteres"},
                        usuario: {required: "Por favor ingrese su usuario", minlength: "Este campo debe tener mínimo 5 caracteres", maxlength: "Este campo debe tener menos de 20 caracteres"},
                        email:{required: 'Este campo es obligatorio', email: 'El formato de email es incorrecto', minlength:'El mínimo permitido es de 5 caracteres', maxleght: 'El máximo permitido son 50 caracteres'},
                        contraseña: {required: "Este campo es obligatorio", minlength: "Debe tener al menos 5 caracteres", maxlength: "Debe tener menos de 20 carácteres" },
                        confirmar_contraseña: {required: "Este campo es obligatorio", minlength: "Debe tener al menos 5 caracteres", maxlength: "Debe tener menos de 20 carácteres", equalTo: "Las contraseñas no coinciden"}
                    }
                });
            });
    </script>
    <title>Registro</title>
</head>

<body>
    <form id="form" method="post">
        <div class="form">
            <h1>Registrarse</h1>
            <div class="right">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre"><span class="barra"></span>
            </div>
            <div class="right">
                <input type="text" name="usuario" placeholder="Usuario"><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="email" name="email" placeholder="Email"><span class="barra"></span>
            </div>
            <div class="right-bottom">
                <input type="password" name="contraseña" id="password" placeholder="Password"><span class="barra"></span>
            </div>
            <div class="right-bottom">
                <input type="password" name="confirmar_contraseña" id="name" placeholder="Repeat Password"><span class="barra"></span>
            </div>
            <button type="submit" class="button" name="ingresar">Registrarse</button>
            <a class="button" href="index.php">Iniciar Sesion</a>
        </div>
    </form>
    <?php 
        include("php/registration.php");
    ?>
</body>

</html>