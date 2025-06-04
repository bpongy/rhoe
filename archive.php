<?php
get_header();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="title">
			<?php echo single_term_title(); ?>
		</h1>
		<div class="archive-description">
			<?php echo get_the_archive_description(); ?>
		</div>
	</header>

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php get_template_part( 'parts/card' ); ?>
	<?php endwhile; ?>

	<?php echo get_the_posts_pagination(); ?>

<?php else :
	get_template_part( 'parts/nothing' );
endif;

get_footer();
