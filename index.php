<?php

$prefix = '';
$title = 'Intellifinder';

include_once($prefix.'code/incl_db.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('includes/header.php'); ?>
    </head>
<body>

<!-- Header section (Gradient) -->
<?php include_once($prefix.'modules/header.php'); ?>

<!-- Introduction section (Small description and preview) -->
<?php include_once($prefix.'modules/intro.php'); ?>

<!-- Cases section -->
<?php include_once($prefix.'modules/cases.php'); ?>

<!-- Tour section -->
<?php include_once($prefix.'modules/tour.php'); ?>

<!-- Footer -->
<?php include_once($prefix.'modules/footer.php'); ?>

</body>
</html>