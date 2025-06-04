<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
	?>
	<article <?php post_class(); ?>>

		<header class="entry-header">
			<figure class="post-thumbnail">
				<?php
				echo get_the_post_thumbnail( 'post-thumbnail');
				?>
			</figure>
			<h1 class="title">
				<?php echo get_the_title(); ?>
			</h1>
			<div class="meta">
				<div class="date">
					<?php echo get_the_date(); ?>
				</div>
				<div class="categories">
					<?php echo get_the_category_list( ', ' ); ?>
				</div>
			</div>
		</header>

		<div class="entry-content">
			<?php
			the_content();
			?>
		</div>

	</article>
	<?php
endwhile;
?>

<?php
get_footer();