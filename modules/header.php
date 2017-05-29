<?php

$crud = new Crud($objCon, "intelli_page");
                
$crud->SetArray("*");

$cruds = $crud->Select("WHERE des = 'header'");

$res = $crud->SendSQL();

$obj = $res->fetch_object();

?>
<!--Header-->
<header>
  <div class="header-background">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="container">

    <?php include 'menu.php' ?>

    <div class="row">
      <div class="col-md-7">
        <h1><?php echo $obj->title; ?></h1>
        <p><?php echo $obj->text; ?></p>
        <a class="btn btn-success">EXPLORE THE APP</a>
        <a target="_blank" href="http://intellifinder.eu/" class="btn btn-default">LOG IN</a>

        <a class="app-button" target="_blank" href="https://itunes.apple.com/dk/app/intellifinder-id-plus/id979128138?l=da&mt=8"><img class="get-it noselect" src="<?php echo $prefix; ?>assets/img/app-google-store/app.png" alt="Get in on the App Store"></a>
        <a class="app-button" target="_blank" href="https://play.google.com/store/apps/details?id=eu.intellifinder&hl=da"><img class="get-it noselect" src="<?php echo $prefix; ?>assets/img/app-google-store/google.png" alt="Get it on Google Play"></a>

      </div>

      <div class="col-md-5">
        <div class="device phone pull-right">
          <img src="<?php echo $prefix; ?>assets/img/app-guts.svg" alt="IntelliFinder">
        </div>
      </div>
  </div>
</div>
</header>
