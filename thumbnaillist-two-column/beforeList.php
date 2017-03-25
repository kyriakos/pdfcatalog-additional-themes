<div class="category" <?php  if ($mustBreak) echo 'style="page-break-before: always;"'; ?>>
	<?php if ($this->options->showCategoryTitle) {
	?>
	<div class="category_title row  <?php if (isset($category->level)) echo 'level-'.$category->level; ?>">
		<div class="col-xs-12">
			<h1><?php echo $category->name; ?></h1>
		</div>
	</div>
<?php }
?>