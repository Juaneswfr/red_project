<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/backend/css/normalize.css">
    <link rel="stylesheet" href="/backend/css/styles_dashboard.css">
    <script src="https://kit.fontawesome.com/9907a3343e.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/backend/complement/validate_sign_up.js">  </script>
</head>


    <!--MENU LATERAL INICIO------------------------------->

    <div id="menu" class="hidden_lateral_menu hidden_all">
        <!-- Estaba en class= ocultar -->
        <ul>
            <li>
                <div id="logo-principal" class="logo-principal"></div>
                <!-- <hr class="hr"> -->
            </li>
            <li>
                <div class="container-menu">
                    <div class="logo-home"></div>
                    <p id="submenu_alpha" class="text">Home</p>
                </div>
                <hr class="hr">
                <!-- Sub menu A -->
                <div id="submenu_a" class="hidden">
                    <a class="text_sub-menu" href="/backend/dashboard.php"><div class="container-menu">Dashboard</div></a>
                <hr class="hr">
                    <a class="text_sub-menu" href="/backend/sites/setup.php"><div class="container-menu">Administrador</div></a>
                <hr class="hr">
                    <a class="text_sub-menu" href="/backend/sites/profile.php"><div class="container-menu">Perfil</div></a>
                <hr class="hr">
                
                <!-- Fin de Sub menu A -->
            </li>
            <li>
                <div class="container-menu">
                    <div class="logo-home"></div>
                    <p class="text">Anything</p>
                </div>
                <hr class="hr">
            </li>
            <li>
                <div class="container-menu">
                    <div class="logo-home"></div>
                    <p class="text">Colors and Background</p>
                </div>
                <hr class="hr">
            </li>
            <li>
                <div class="container-menu">
                    <div class="logo-home"></div>
                    <p class="text">Emmmm I don't know</p>
                </div>
                <hr class="hr">
            </li>
        </ul>
    </div>
    <!--MENU LATERAL FIN----------------------------------->
    <!-- MENU SUPERIOR -->
    <div id="Top-menu" class="shadow top-menu box">
        <div id="div-menu" class="logo-menu"></div>
        <div id="user" class="user"></div>
        <div id="user_menu" class="hidden_user_menu shadow hidden_all">
            <div class="user_options"><p><a class="link" href="/backend/dashboard.php">Dashboard</a></p></div>
            <div class="user_options"><p><a class="link" href="/backend/sites/profile.php">Perfil</a></p></div>
            <div class="user_options"><p><a class="link" href="/backend/sites/setup.php">Opciones</a></p></div>
            <hr class="user_options_hr">
            <div class="user_options"><p><a class="link" href="/backend/module/security/logout.php">Cerrar sesion</a></p></div>
        </div>
    </div>

    <script src="/backend/complement/listener_db.js"></script>
    <!-- FIN MENU SUPERIOR -->
    <!-- Contenido-Body------------------------------------>
   <!--  <div class="content shadow box">
        <div class="tittle">
            <h1>Primer Titulo</h1>
        </div>
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
        </div>
    </div> -->
    <!--FIN Contenido-Body------------------------------------>