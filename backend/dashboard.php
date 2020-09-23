<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/session/session_start.php'; ?>




<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/includes/header.php';?>
<head>
    <title>Dashboard</title>
</head>
<body>
    <?php 
     echo $_SESSION['admin_name'];
    echo '<pre>'.var_dump($_SESSION).'</pre>';
    ?>
    <figure><img src="/modulewelcome.png" alt="Bienvenido" style="background-size=cover;height: 100vh;width: 75vw;"></figure>
    <div><p><b syle="font-size: 20vh;font-family: 'Lucida Sans', 'Lucida Sans Regular';">WELCOME</b></p></div>
    
</body>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/component/includes/footer.php';?>



