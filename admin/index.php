<?php

session_start();

if(isset($_SESSION['username'])){

?>

<?php

$prefix = '../';
$title = 'Backend | Intellifinder';

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

</body>
</html>


<?php
    
}else {
    
  header('Location: login.php?notLoggedIn=1');  
    
}

?>