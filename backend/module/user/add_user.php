<?php 
# JBasic V 0.2
# Creador : Juan Ramirez
# Ultima actualización - Juan Ramirez
# 18 Sep 2020 


include_once $_SERVER['DOCUMENT_ROOT'].'/backend/sql/security/connection.php';?>

<script type="text/javascript" src="/backend/js/user/user_function.js"></script>

    <div class="content shadow box box_register">
            
        <form id="form" method="post">
            <div class="form">
                <h1 class="table_tittle">Registrar nuevo usuario</h1>
                <div class="right">
                    <input type="text" name="name" id="nombre" placeholder="Nombre"><span class="line"></span>
                </div>
                <div class="right">
                    <input type="text" name="user" placeholder="Usuario"><span class="line"></span>
                </div>
                <div class="group">
                    <input type="email" name="email" placeholder="Email"><span class="line"></span>
                </div>
                <div class="right-bottom">
                    <input type="password" name="password" id="password" placeholder="Password"><span class="line"></span>
                </div>
                <div class="right-bottom">
                    <input type="password" name="confirm_password" id="name" placeholder="Repeat Password"><span class="line"></span>
                </div>
                <button type="submit" class="button" name="enter" href="/backend/dashboard.php">Registrar</button>
            </div>
        </form>
        <?php 
            #include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/user/adm_users.php';
        ?>
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
