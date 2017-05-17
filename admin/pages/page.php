<?php

session_start();

if(isset($_SESSION['username'])){

$prefix = '../../';
$title = 'Page | Intellifinder';
$site = 'page';

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
<body class="dashboard">

<!-- TopBar -->
<?php include_once($prefix.'modules/backend/topbar.php'); ?>

<!-- MenuBar -->
<?php include_once($prefix.'modules/backend/menubar.php'); ?>

<!-- MenuBar -->
<?php include_once($prefix.'modules/backend/page.php'); ?>

</body>
</html>


<?php
    
}else {
    
  header('Location: login.php?notLoggedIn=1');  
    
}

?>