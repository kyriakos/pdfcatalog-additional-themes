<div class="category" <?php  if ($mustBreak) echo 'style="page-break-before: always;"'; ?> style="page-break-inside: avoid">
	<?php if ($this->options->showCategoryTitle) {
	?>
	<div class="category_title row <?php if (isset($category->level)) echo 'level-'.$category->level; ?>" style="page-break-after: avoid">

			<h1><?php echo $category->name; ?></h1>

	</div>
<?php }
?>