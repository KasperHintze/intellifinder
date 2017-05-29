<?php

$crud = new Crud($objCon, "intelli_page");
                
$crud->SetArray("*");

$cruds = $crud->Select("WHERE des = 'intro'");

$res = $crud->SendSQL();

$obj = $res->fetch_object();

?>
<section id="intro">

	<div class="container">

     	<div class="row">

	     	<div class="col-md-6">

	     		<div class="row">

		     		<div class="pulseWrap">
						<div class="pulseDot noBackground"><img src="<?php echo $prefix; ?>assets/img/new-logo.svg" alt="IntelliFinder logo"></div>
						<div class="pulser"></div>
					</div>

					<h2><?php echo $obj->title; ?></h2>

				</div>

				<p><?php echo $obj->text; ?></p>


				<a href="#cases">Discover how businesses use IntelliFinder</a>

			</div>

			<div class="device tablet pull-right">
	          <img src="<?php echo $prefix; ?>assets/img/app-guts-ipad.svg" alt="IntelliFinder">
	        </div>

		</div>

	</div>

</section>