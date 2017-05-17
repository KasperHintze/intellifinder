<div id="menuBar">

	<a class="addNews" href="<?php echo $prefix; ?>admin/pages/add_news.php">Add news</a>

	<ul>
		<li><a class="<?php if($site == 'news'){echo 'menuActive';} ?>" href="<?php echo $prefix; ?>admin/index.php">News</a></li>
		<li><a class="<?php if($site == 'page'){echo 'menuActive';} ?>" href="<?php echo $prefix; ?>admin/pages/page.php">Page</a></li>
	</ul>


</div>