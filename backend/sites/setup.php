<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/session/session_start.php';
    
    

    /* echo '¡Hola ' . htmlspecialchars($_COOKIE["user_type"]) . '!'; */

    switch ($_SESSION["use_typ_id"]) {
        case 1:
            header('location: /backend/sites/admin_setup.php');
            
            break;
        case 2:
            header('location: /backend/sites/colaborator_setup.php');
            break;
        
        default:
    };

    
?>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/includes/header.php';?>
<?php 
        include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/user/adm_users.php';
    ?>
<head>
    <title>Setup</title>
</head>
<body>

<div class="content shadow box box_table">
    
    <table class="table table_border">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Create At</th>
        </tr>
    </thead>
    <tbody>
        <?php $query = "SELECT * from jin_user";
        $result_dates = mysqli_query($conex, $query);

        while($row = mysqli_fetch_array($result_dates)){ ?>
        <tr class="table_content">
            <td ><?php echo $row['use_nam']?>  </td>
            <td ><?php echo $row['use_ema']?>  </td>
            <td ><?php echo $row['use_log']?>  </td>
        </tr>
        <?php   }  ?>
    </tbody>
    </table>
</div>

</body>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/includes/footer.php';?>