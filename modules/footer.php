<?php

$crud = new Crud($objCon, "intelli_page");
                
$crud->SetArray("*");

$cruds = $crud->Select("WHERE des = 'footer'");

$res = $crud->SendSQL();

$obj = $res->fetch_object();

?>
<footer>

	<div class="container">
		<div class="row">
			<div class="col-lg-6">

				<img class="location-img" src="<?php echo $prefix; ?>assets/img/locationPointer.svg" alt="Location pointer">

				<div class="in-touch-wrapper" id="contact">

					<h2><?php echo $obj->title; ?></h2>
					<p><?php echo $obj->text; ?></p>

				<div class="sm-wrapper">

					<a href="https://www.facebook.com/intellifinder.dk/" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
					<a href="https://www.linkedin.com/feed/" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
					<a href="#" target="_blank"><span><i class="fa fa-twitter"></i></span></a>

				</div>

				</div>

			</div>
			<div class="col-lg-6">

				<i class="fa fa-angle-left"></i>

				<div class="footer-card contact-details">

					<h5>IntelliFinder A/S</h5>
					<p>Kærvej 39</p>
					<p>5220 Odense SØ</p>

					<p>Telefon: +45 44 22 08 88</p>
					<p>E-mail: info@intellifinder.dk</p>
					<p>CVR: 30 28 26 71</p>

				</div>
				<div class="footer-card map">



				</div>

				<i class="fa fa-angle-right"></i>

			</div>
		</div>
	</div>

</footer>
