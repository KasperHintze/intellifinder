<?php

session_start();

$prefix = '../';
$title = 'Dashboard | Controlpanel';

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
<body>

    <?php include_once($prefix.'includes/topBar.php'); ?> 

    <?php include_once($prefix.'includes/menu.php'); ?> 

    <?php include_once($prefix.'includes/activityBar.php'); ?>    

</body>
</html>