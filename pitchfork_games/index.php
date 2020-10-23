<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link href="/pg_css/pg_styles.css?<?php echo time();?>" rel="stylesheet">
    <title>Pitchfork games</title>
    <link rel="icon" href="/pg_images/mando.ico">
</head>
<body>
<?php 
include $_SERVER['DOCUMENT_ROOT'].'/pg_view/pg_header.php';
include $_SERVER['DOCUMENT_ROOT'].'/pg_templates/'.$_GET['template'].'.php';
?>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/pg_view/pg_footer.php';
?>
</html>
