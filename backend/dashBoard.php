<?php  
session_start();  
if(!isset($_SESSION["admin_name"]))
{
 header("location:/brayan/backend/index.php");
}
?>  

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles_dashboard.css">
    <title>DashBoard</title>
</head>

<body>
    <!--MENU LATERAL INICIO------------------------------->
    <div id="div-menu" class="logo-menu"></div>
    <div id="menu" class="ocultar">
        <div id="logo-principal" class="logo-principal"></div>
        <hr class="hr">
        <div class="container-menu">
            <div class="logo-home"></div>
            <p class="texto">Home</p>
        </div>
        <hr class="hr">
        <div class="container-menu">
            <div class="logo-home"></div>
            <p class="texto">Home</p>
        </div>
        <hr class="hr">
        <div class="container-menu">
            <div class="logo-home"></div>
            <p class="texto">Home</p>
        </div>
        <hr class="hr">
        <div class="container-menu">
            <div class="logo-home"></div>
            <p class="texto">Home</p>
        </div>
    <!--MENU LATERAL FIN----------------------------------->
    </div>
    <div class="content">
        <div class="tittle"><h1>Primer Titulo</h1></div>
        <div class="div-text">
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel rem ipsum error provident est ducimus
                veniam corporis, veritatis facilis, accusamus quidem recusandae sint omnis asperiores quasi quo mollitia
                at iure!
                Sint provident incidunt nemo! Quaerat cum rem maiores illum commodi nam odio aut deleniti officiis
                provident. Iusto dolorum minus vitae beatae dolorem doloribus corrupti eos necessitatibus, at vel
                incidunt eaque?
                Totam iusto nam minima dolorum natus enim iure similique, cum eos asperiores. Odio cum voluptate nisi
                magni obcaecati fugiat asperiores delectus a. Temporibus minus nihil perferendis sunt soluta!
                Laboriosam, delectus.</p>
            <p><a href="php/logout.php">cerrar sesion</a></p>
        </div>
    </div>
    <script src="js/jslistener.js"></script>
</body>
<footer>
    <div>
        <p>Iconos diseñados por <a href="https://www.flaticon.es/icono-gratis/lista_833473"
                title="Kiranshastry">Kiranshastry</a> from <a href="https://www.flaticon.es/" title="Flaticon">
                www.flaticon.es</a></p>
        <p>Iconos diseñados por <a href="http://www.freepik.com/" title="Freepik">Freepik</a> from <a
                href="https://www.flaticon.es/" title="Flaticon"> www.flaticon.es</a></p>
    </div>
</footer>

</html>