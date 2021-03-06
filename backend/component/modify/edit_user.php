<?php 
    session_start();
    include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM jin_user WHERE use_id = $id";
        $result= mysqli_query($conex,$query);
       

        if (mysqli_num_rows($result) == 1) {
            $row= mysqli_fetch_array($result);
            $id= $row['use_id'];
            $name= $row['use_nam'];
            $user= $row['use_use'];
            $email= $row['use_ema'];
            $password= $row['use_pas'];
            $user_type= $row['use_typ_id'];
        }

    }

    if (isset($_POST['update'])) {
        $id2 = $_GET['id'];
        $alter_name= trim($_POST['name']);
        $alter_user= trim($_POST['user']);
        $alter_email= trim($_POST['email']);
        $alter_password= trim($_POST['password']);
        $alter_user_type= trim($_POST['user_type']);

        $query2 = "UPDATE `jin_user` SET `use_nam`='$alter_name',`use_use`='$alter_user',`use_ema`='$alter_email',`use_pas`='$alter_password',`use_typ_id`='$alter_user_type' WHERE use_id=$id2 ";

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
<form id="form" action="edit_user.php?id=<?php echo $_GET['id']; ?>" method="post">
        <div class="form">
            <h1>Modificar usuario</h1>
            <div class="right">
                <input type="text" name="name" id="nombre" placeholder="Nombre" value="<?php echo $name?>"><span class="line"></span>
                <label for="" class="my_label" >Nombre</label>
            </div>
            <div class="right">
                <input type="text" name="user" placeholder="Usuario" value="<?php echo $user?>"><span class="line"></span>
                <label for="" class="my_label" >Usuario</label>
            </div>
            <div class="group">
                <input type="email" name="email" placeholder="Email" value="<?php echo $email?>"><span class="line" ></span>
                <label for="" class="my_label" >Email</label>
            </div>
            <div class="right-bottom">
                <input type="text" name="password" id="password" placeholder="Password" value="<?php echo $password?>"><span class="line"></span>
                <label for="" class="my_label" >Contraseña</label>
            </div>
            <div class="right-bottom">
                <input type="text" name="user_type"  placeholder="user_type" value="<?php echo $user_type?>"><span class="line"></span>
                <label for="" class="my_label" >Tipo de usuario</label>
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
            <th>Password</th>
            <th>Create At</th>
            <th>User type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $query = "SELECT * from jin_user";
        $result_dates = mysqli_query($conex, $query);

        while($row = mysqli_fetch_array($result_dates)){ ?>
        <tr class="table_content">
            <td ><?php echo $row['use_id']?>  </td>
            <td ><?php echo $row['use_nam']?>  </td>
            <td ><?php echo $row['use_use']?>  </td>
            <td ><?php echo $row['use_ema']?>  </td>
            <td ><?php echo $row['use_pas']?>  </td>
            <td ><?php echo $row['use_log']?>  </td>
            <td ><?php echo $row['use_typ_id']?>  </td>
            <td class="actions_buttons">
                <a href="/backend/component/modify/edit_user.php?id=<?php echo $row['use_id'] ?>">
                <i class="fas fa-marker button_actions button_action_edit"></i>
                </a>
                <a href="/backend/component/modify/delete_user.php?id=<?php echo $row['use_id'] ?>">
                <i class="far fa-trash-alt button_actions buttton_action_delete"></i>
                </a>
            </td>
        </tr>
        <?php   }  ?>
    </tbody>
    </table>
</div>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/includes/footer.php';?>

