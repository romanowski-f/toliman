<?php
// Add post type 'Clients'
function create_post_type_clients() {
	register_post_type('toliman_clients',
		array(
			'labels' 			=> array(
										'name'          => __('Clients'),
										'singular_name' => __('Client'),
										'add_new'		=> __('Add Client'),
										'add_new_item'	=> __('Add New Client'),
										'edit_item'		=> __('Edit Client'),
										'new_item'		=> __('New Client'),
										'view_item'		=> __('View Client'),
										'all_items'		=> __('All Clients')
									),
			'description' 		=> __('Clients'),
			'public'      		=> true,
			'has_archive' 		=> true,
			'menu_position'     => 5,
			'menu_icon'			=> 'dashicons-admin-users',
			'supports'			=> array( 'title', 'editor', 'thumbnail', 'tags' )
		)
	);

};

add_action('init', 'create_post_type_clients');

?>