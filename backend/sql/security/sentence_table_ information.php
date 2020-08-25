<?php
# FUNCION --> CONENCION A LA BD
    include_once $_SERVER['DOCUMENT_ROOT'].'/aymsite/aym_function/aym_connection/aym_connection.php';
    $link=connect();
    mysqli_set_charset($link, "utf8");

    # QUERY
    $aym_sql = "SELECT * FROM jin_system_information ";

    if (!$aym_sql_get_about=mysqli_query($link,$aym_sql)) {
        # INCLUSIÓN --> COMPONENTE QUE MUESTRA LOS ERRORES DE SINTAXIS
        include_once $_SERVER['DOCUMENT_ROOT'].'/aymsite/aym_component/aym_message/aym_show_message_error.php';
    } else {
        $row_get_about=mysqli_fetch_assoc($aym_sql_get_about); 
        mysqli_free_result($aym_sql_get_about);
    } 

    mysqli_close($link);
    ?>