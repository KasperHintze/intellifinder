<?php

	$editId = $_GET['editId'];

    $crud5 = new Crud($objCon, "intelli_news");

    $crud5->SetArray("*");

   	$crud5->Select('WHERE id = '.$editId);

    $res5 = $crud5->SendSQL();

    $obj5 = $res5->fetch_object();

?>

<div class="wrapper">

	<div class="addBox">

	<?php

	if(isset($_GET['editId'])){

	?>

		<h1>Edit news</h1>

	<?php

	}else {

	?>

		<h1>Add news</h1>

	<?php

	}

	?>

		<form id="newsForm" action="<?php if(isset($_GET['editId'])){ echo $prefix; ?>code/code_editNews.php?editId=<?php echo $obj5->id; }else {?><?php echo $prefix; ?>code/code_addNews.php<?php } ?>" method="post" enctype="multipart/form-data" novalidate>

			<label>
				<span>Image</span>
				<?php if(isset($_GET['editId'])){?>
					<div class="imgContainer">
						<img src="<?php echo $prefix; ?>assets/img/uploaded/news/<?php echo $obj5->img; ?>" alt="<?php echo $obj5->title; ?>">
					</div>
				<?php
				}else {
				?>
					<input type="file" name="img" required>
				<?php
				}
				?>
			</label>

			<label>
				<input type="text" name="title" value="<?php if(isset($_GET['editId'])){ echo $obj5->title; } ?>" autofocus required>
				<span class="floating-label">Title</span>
			</label>

			<label>
				<input type="text" name="des" value="<?php if(isset($_GET['editId'])){ echo $obj5->des; } ?>" required>
				<span class="floating-label">Description</span>
			</label>

			<label>
				<!--<span>Text</span>-->
				<textarea name="text" required><?php if(isset($_GET['editId'])){ echo $obj5->text; } ?></textarea>
			</label>

			<label>
				<input type="submit" value="<?php if(isset($_GET['editId'])){ echo 'Save changes'; }else { echo 'Add news'; } ?>">
			</label>

		</form>

	</div>	

</div>