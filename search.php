<?php
get_header();
?>

<header class="page-header alignwide">
	<h1 class="page-title">
	<?php
	printf(
	/* translators: %s: search term. */
	esc_html__( 'Results for "%s"', 'rhoe' ),
	'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
	);
	?>
	</h1>
</header>

<?php
if ( have_posts() ) {
	?>
	<div class="search-result-count">
		<?php
		printf(
			esc_html(
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'rhoe'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div>

	<ul>
	<?php
	while ( have_posts() ) {
		the_post();
		?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
		<?php
	}
	?>
	</ul>
	<?php
	echo get_the_posts_pagination();
} else {
	get_template_part( 'parts/nothing' );
}

get_footer();