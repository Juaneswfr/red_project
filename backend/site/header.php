<?
# JBasic V 0.2
# Creador : Juan Ramirez
# Ultima actualización - Juan Ramirez
# 21 Sep 2020 
?>
    <!-- MENU SUPERIOR -->
    <header>
        <div id="div-menu" class="logo-menu"></div>
        <div id="user" class="user"></div>
        <div id="user_menu" class="hidden_user_menu hidden_all">
            <div class="user_options"><p><a class="link" href="/backend/dashboard.php">Dashboard</a></p></div>
            <div class="user_options"><p><a class="link" href="/backend/sites/profile.php">Perfil</a></p></div>
            <div class="user_options"><p><a class="link" href="/backend/sites/setup.php">Opciones</a></p></div>
            <hr class="user_options_hr">
            <div class="user_options"><p><a class="link" href="/backend/module/security/logout.php">Cerrar sesion</a></p></div>
        </div>
    </header>

    <script src="/backend/complement/listener_db.js?<?= time();?>"></script>