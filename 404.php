<?php
get_header();
?>

<header class="entry-header">
	<h1 class="title">
		<?php echo get_the_title(); ?>
	</h1>
</header>

<div class="entry-content">
	<?php
	the_content();
	?>
</div>

<?php
get_footer();