<?php
add_action('acf/init', function() {
	if( function_exists('acf_add_options_page') ) {
		// Add a page for theme options
		acf_add_options_page([
			'menu_title' => __('Theme Options', 'rhoe'),
			'menu_slug' => 'theme-options',
			'redirect' => true,
			'position' => 59,
			'icon_url' => 'dashicons-admin-generic',
			'capability' => 'edit_posts'
		]);
		
		// Add a field group for theme options
		acf_add_local_field_group([
			'key' => 'group_theme_options',
			'title' => __('General Options', 'rhoe'),
			'fields' => [],
			'location' => [
				[
					[
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'theme-options',
					],
				],
			],
		]);
	}
});
