<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';
$link=connect();
mysqli_set_charset($link, "utf8");

        $sql_query = ' SELECT * FROM jin_user WHERE (use_ema="'.$_POST['email'].'" or use_use="'.$_POST['email'].'") and use_pas = "'.$_POST['password'].'"';

        if (!$sql_login_validate=mysqli_query($link,$sql_query)) {
            ECHO "HAY UN ERROR JAJAJAJA";
            EXIT;
        } else {
            $row_get_login_validate=mysqli_fetch_assoc($sql_login_validate); 
            $num_rows = mysqli_num_rows($sql_login_validate);
            mysqli_free_result($sql_login_validate);
        }

?>