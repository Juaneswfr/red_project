<?php
# JBasic V 0.2
# Creador : Brayn Avila
# Ultima actualización - Juan Ramirez
# 18 Sep 2020

# FUNCION --> CONENCION A LA BD
    include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';
    $link=connect();
    mysqli_set_charset($link, "utf8");

    # QUERY SELECT * FROM table WHERE Dates IN (SELECT max(Dates) FROM table);
    $sql_query = "SELECT * FROM jin_system_information ORDER BY sys_id DESC LIMIT 1";

    if (!$sql_get_system_information=mysqli_query($link,$sql_query)) {
        # INCLUSIÓN --> COMPONENTE QUE MUESTRA LOS ERRORES DE SINTAXIS
        #include_once $_SERVER['DOCUMENT_ROOT'].'/aymsite/aym_component/aym_message/aym_show_message_error.php';
        ECHO "HAY UN ERROR JAJAJAJA";
        EXIT;
    } else {
        $row_get_system_information=mysqli_fetch_assoc($sql_get_system_information); 
        mysqli_free_result($sql_get_system_information);
    } 

    mysqli_close($link);
    ?>