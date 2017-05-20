<div class="wrapper">

	<div class="addBox">

	<h1>Add news</h1>

		<form id="newsForm" action="<?php echo $prefix; ?>code/code_addNews.php" method="post" enctype="multipart/form-data" novalidate>

			<label>
				<span>Image</span>
				<input type="file" name="img" required>
			</label>

			<label>
				<input type="text" name="title" autofocus required>
				<span class="floating-label">Title</span>
			</label>

			<label>
				<input type="text" name="des" required>
				<span class="floating-label">Description</span>
			</label>

			<label>
				<!--<span>Text</span>-->
				<textarea name="text" required></textarea>
			</label>

			<label>
				<input type="submit" value="Add news">
			</label>

		</form>

	</div>	

</div>