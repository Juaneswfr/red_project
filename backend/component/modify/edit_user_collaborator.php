<?php 
    include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';

    if (isset($_GET['jin_id'])) {
        $id = $_GET['jin_id'];
        $query = "SELECT * FROM 'jin_user' WHERE id = $id";
        $result= mysqli_query($conex,$query);
       

        if (mysqli_num_rows($result) == 1) {
            $row= mysqli_fetch_array($result);
            $id= $row['jin_id'];
            $name= $row['jin_nam'];
            $user= $row['jin_use'];
            $email= $row['jin_ema'];
            $password= $row['jin_pas'];
            $user_type= $row['jin_use_typ'];
        }

    }

    if (isset($_POST['update'])) {
        $id2 = $_GET['jin_id'];
        $alter_name= trim($_POST['name']);
        $alter_user= trim($_POST['usee']);
        $alter_email= trim($_POST['email']);
        $alter_password= trim($_POST['password']);
        $alter_user_type= trim($_POST['user_type']);

        $query2 = "UPDATE `'jin_user'` SET `jin_nam`='$alter_name',`jin_use`='$alter_user',`jin_ema`='$alter_email' WHERE jin_id=$id2 ";

        mysqli_query($conex, $query2);
        header("Location:/backend/sites/admin_setup.php");
        
    }
    $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
    
}

?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/includes/header.php';?>

<div class="content shadow box box_register">
<form id="form" action="edit_user_collaborator.php?id=<?php echo $_GET['jin_id']; ?>" method="post">
        <div class="form">
            <h1>Modificar usuario</h1>
            <div class="right">
                <input type="text" name="name" id="nombre" placeholder="Nombre" value="<?php echo $name?>"><span class="line"></span>
                <label for="" class="my_label">Nombre</label>
            </div>
            <div class="right">
                <input type="text" name="user" placeholder="Usuario" value="<?php echo $user?>"><span class="line"></span>
                <label for="" class="my_label">Usuario</label>
            </div>
            <div class="group">
                <input type="email" name="email" placeholder="Email" value="<?php echo $email?>"><span class="line" ></span>
                <label for="" class="my_label">Email</label>
            </div>
            
            <button type="submit" class="button" name="update">Actualizar</button>
            <a class="button"  href="/backend/sites/setup.php">Cancelar</a>
        </div>
    </form>
    </div>

    
<div class="content shadow box box_table">
    
    <table class="table table_border">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Create At</th>
            <th>Modificar</th>
        </tr>
    </thead>
    <tbody>
        <?php $query = "SELECT * from 'jin_user'";
        $result_dates = mysqli_query($conex, $query);

        while($row = mysqli_fetch_array($result_dates)){ ?>
        <tr class="table_content">
            <td ><?php echo $row['jin_id']?>  </td>
            <td ><?php echo $row['jin_nam']?>  </td>
            <td ><?php echo $row['jin_use']?>  </td>
            <td ><?php echo $row['jin_ema']?>  </td>
            <td ><?php echo $row['jin_dat_sig_up']?>  </td>
            <td class="actions_buttons">
                <a href="/backend/component/modify/edit_user_collaborator.php?id=<?php echo $row['jin_id'] ?>">
                <i class="fas fa-marker button_actions button_action_edit"></i>
                </a>
            </td>
        </tr>
        <?php   }  ?>
    </tbody>
    </table>
</div>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/includes/footer.php';?>
