<?php
	include ("incl_db.php");

    $id = $_GET['id'];

    $crud = new Crud($objCon, "intelli_news");

	$array = array("id"=>"$id");

	$crud->SetArray($array);

	$cruds = $crud->Delete();

	$crud->SendSQL();


	header('Location: ../admin/index.php?delete=1');

?>