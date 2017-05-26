<?php

$crud = new Crud($objCon, "intelli_page");
                
$crud->SetArray("*");

$cruds = $crud->Select("WHERE des = 'cases'");

$res = $crud->SendSQL();

$obj = $res->fetch_object();

?>
<section id="cases">
  <div class="container">

    <div class="pulseWrap">
        <div class="pulseDot">
            <i class="fa fa-users"></i>
        </div>
        <div class="pulser"></div>
    </div>

    <h2><?php echo $obj->title; ?></h2>
    <p><?php echo $obj->text; ?>
    </p>

      <div class="row">

        <div class="col-lg-6">
          <div class="case-card">
            <div class="card-circle-outer"></div>
            <div class="card-circle-inner">
              <i class="fa fa-train"></i>
            </div>
            <div class="card-content-right">

              <h3>Banedanmark</h3>
              <p>– Intelligent detektorløsning i stedet for detektivarbejde</p>

              <a class="btn btn-success" href="<?php echo $prefix;?>pages/cases.php">Read more</a>

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="case-card">
            <div class="card-circle-outer"></div>
            <div class="card-circle-inner">
              <i class="fa fa-shopping-basket"></i>
            </div>
            <div class="card-content-right">

              <h3>Coop</h3>
              <p>– Changing out router in all Coop shops</p>

              <a class="btn btn-success" href="<?php echo $prefix;?>pages/cases.php">Read more</a>

            </div>
          </div>
        </div>

      </div>
      <div class="row">

        <div class="col-lg-6">
          <div class="case-card">
            <div class="card-circle-outer"></div>
            <div class="card-circle-inner">
              <i class="fa fa-tint"></i>
            </div>
            <div class="card-content-right">

              <h3>Frederiksbjerg Forsyning</h3>
              <p>– Intelligent detektorløsning i stedet for detektivarbejde</p>

              <a class="btn btn-success" href="<?php echo $prefix;?>pages/cases.php">Read more</a>

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="case-card">
            <div class="card-circle-outer"></div>
            <div class="card-circle-inner">
              <i class="fa fa-paper-plane"></i>
            </div>
            <div class="card-content-right">

              <h3>Sas Airlines</h3>
              <p>– Intelligent detektorløsning i stedet for detektivarbejde</p>

              <a class="btn btn-success" href="<?php echo $prefix;?>pages/cases.php">Read more</a>

            </div>
          </div>
        </div>

      </div>

  </div>
</section>
