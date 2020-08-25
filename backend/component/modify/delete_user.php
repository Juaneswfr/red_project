
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM jin_user WHERE jin_id = $id";
    $result = mysqli_query($conex, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'User Removed Successfully';
    $_SESSION['message_color'] = 'red';
    
    echo "<script> window.location='/backend/sites/admin_setup.php'; </script>";

}




?>

