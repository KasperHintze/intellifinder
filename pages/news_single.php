<?php

$prefix = '../';

include($prefix.'code/incl_db.php');

session_start(); 

$id = $_GET['id'];

$crud = new Crud($objCon, "intelli_news");
                
$crud->SetArray("*");

$cruds = $crud->Select('WHERE id = '.$id);

$res = $crud->SendSQL();
 
$obj = $res->fetch_object();

$title = $obj->title.' | Intellifinder';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
<body class="news-body">

<!-- Header section (Gradient) -->
<?php include_once($prefix.'modules/sub-header.php'); ?>

<!-- News Info -->
<?php include_once($prefix.'modules/news-info.php'); ?>

<!-- Footer -->
<?php include_once($prefix.'modules/footer.php'); ?>

</body>
</html>
