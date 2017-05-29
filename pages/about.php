<?php 

    $prefix = '../';
    $title = 'Case | Intellifinder';

    include($prefix.'code/incl_db.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
<body>

<!-- Header section (Gradient) -->
<?php include_once($prefix.'modules/sub-header.php'); ?>

<!-- Single Case -->
<?php include_once($prefix.'modules/about-module.php'); ?>

<!-- Footer -->
<?php include_once($prefix.'modules/footer.php'); ?>

</body>
</html>