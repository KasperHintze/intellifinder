<?php

    if($_FILES["img"]["name"] != ""){

		$name = $_FILES["img"]["name"];
		$extension = end(explode(".",$name));
		$md5 = md5(uniqid(rand(), true));
		
		$collected = $md5 . "." .  $extension;

        $_POST['img'] = $collected;
		
		move_uploaded_file($_FILES['img']['tmp_name'], "../assets/img/uploaded/news/".$md5.".".$extension);

	} else {

		$collected = 'noimg.jpg';

        $_POST['img'] = $collected;

	}

    include ("incl_db.php");

    $crud = new Crud($objCon, "intelli_news");

    echo $crud->SetArray($_POST);

    echo $cruds = $crud->Create();

    $crud->SendSQL();
    
    header("location: ../admin/index.php?news=created");

           
?> 