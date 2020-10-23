<?php 

if(!isset($_GET['url'])){$_GET['url']="brayan";}

?>

<main>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/module/user/'.$_GET['url'].'.php'
?>
</main>