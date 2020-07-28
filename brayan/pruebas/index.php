<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styleSesion.css">
    <script type="text/javascript">
        var estilos1 = './css/styleSesion.css?' + Math.random();
        var estilos = './css/styleSesion.css?' + Math.random();
        //Un punto es la carpeta donde se encuentra el archivo
        //Si empieza con el "/css..." empieza desde 
        /* / --> VUELVE A LA RAIZ
           ./ -- > CARPETA ACTUAL DEL DOCUMENTO
           ../ --> CARPETA ANTERIOR DEL DOCUMENTO ACTUAL*/
    </script>
    <script type="text/javascript">
        document.write('<link href="' + estilos1 + '" rel="stylesheet">');
        document.write('<link href="' + estilos + '" rel="stylesheet">');
    </script>
    <title>Login Basic</title>
</head>
<body>
    <section class="sesion-container">
        <form method="post" class="form-container">
            <div class="titulo"><h1>Inicie Sesión</h1></div>
            <div class="inp_text"><input type="email" name="email" id="sec_div_inpT" placeholder="Ingrese su Correo"></div>
            <div class="inp_password"><input type="password" name="contraseña" id="sec_div_inpP" placeholder="Ingrese su Contraseña"></div>
            <input type="submit" value="Ingresa" id="sec_btn_sub" name="Ingresar" link="https://www.youtube.com/watch?v=j25McBn1JQo">
            <input type="reset" value="Limpiar" id="sec_btn_res">
        </form>
    </section>
    <?php 
        include("registrar.php");
    ?>
</body>
</html>