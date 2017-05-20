<?php

$prefix = '../';
$title = 'News | Intellifinder';

include_once($prefix.'code/incl_db.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
<body class="news-body">

<!-- Header section (Gradient) -->
<?php include_once($prefix.'modules/sub-header.php'); ?>

<!-- Grid news -->
<?php include_once($prefix.'modules/news.php'); ?>

<!-- Footer -->
<?php include_once($prefix.'modules/footer.php'); ?>

</body>
</html>
