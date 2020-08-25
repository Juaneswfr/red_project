<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';
if (isset($_POST['btn_login'])) {

$email = $_POST['email'];
$password = $_POST['password'];
$consult = "SELECT * FROM jin_user WHERE (jin_ema='$email' or jin_use='$email') and jin_pas = '$password' ";
$result = mysqli_query($conex,$consult);

$rows=mysqli_num_rows($result);
if ($rows>0) {
    header("location:/backend/dashboard.php");
} else {
    
    exit();
}
mysqli_free_result($result);
mysqli_close($conex);

}
?>