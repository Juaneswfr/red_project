<?php
include("Conexion_db.php");
if (isset($_POST['btn_login'])) {

$email = $_POST['email'];
$password = $_POST['contraseña'];
$consult = "SELECT * FROM datos WHERE (email='$email' or usuario='$email') and contraseña = '$password' ";
$result = mysqli_query($conex,$consult);

$rows=mysqli_num_rows($result);
if ($rows>0) {
    header("location:/brayan/backend/dashBoard.php");
} else {
    echo "Error en la autentificación";
    exit();
}
mysqli_free_result($result);
mysqli_close($conex);

}
?>
