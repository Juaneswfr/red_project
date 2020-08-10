<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/red_function/red_connection/red_connection.php';
if (isset($_POST['btn_login'])) {

$email = $_POST['email'];
$password = $_POST['password'];
$consult = "SELECT * FROM datos WHERE (email='$email' or user='$email') and password = '$password' ";
$result = mysqli_query($conex,$consult);

$rows=mysqli_num_rows($result);
if ($rows>0) {
    header("location:/backend/dashBoard.php");
} else {
    echo "Error en la autentificación";
    exit();
}
mysqli_free_result($result);
mysqli_close($conex);

}
?>
