<article <?php post_class(); ?>>

	<a href="<?php the_permalink(); ?>">
		<header class="entry-header">
			<figure class="post-thumbnail">
				<?php
				echo get_the_post_thumbnail( 'post-thumbnail');
				?>
			</figure>
			<h2 class="title">
				<?php echo get_the_title(); ?>
			</h2>
		</header>
	</a>

</article>
