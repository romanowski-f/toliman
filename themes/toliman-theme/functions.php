<?php

function toliman_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_post_type_support( 'page', 'excerpt' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'toliman-primary' ),
	) );

}

add_action('after_setup_theme', 'toliman_theme_setup');

/*
*
*
*
*
*/
// -------------------------------------------------------------- //
// ---------------------- Enqueue Media ------------------------- //
// -------------------------------------------------------------- //

add_action('wp_enqueue_scripts', 'toliman_enqueue_media');

function toliman_enqueue_media() {

	// ----------------------------- CSS ----------------------------- //

	// Animate.css
	//wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0');

	// Boostrap
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '1.0.0');

	// Font Awesome
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css');

	// Default Styles
	wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css', array(), '1.0.02');

	// ----------------------------- JS ----------------------------- //

	// jQuery
	wp_enqueue_script( 'jquery' );

	// Main scripts
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.7.8', true);

	// Bio EP Popup
	//wp_enqueue_script('popup-js', get_template_directory_uri() . '/assets/js/bioep.min.js', array(), '2.0.0', true);


}

// Dashboard styling and js
function toliman_enqueue_admin_media() {
	// Enqueues all scripts, styles, settings, and templates necessary to use all media JavaScript APIs.
	wp_enqueue_media();

	wp_enqueue_script( 'wp-link', 'jquery-ui' );

	// Font Awesome
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css');

	// Admin style
	wp_enqueue_style('admin-style', get_template_directory_uri() . '/assets/css/admin-styles.css', array(), '1.1.5');

	//	Register and enqueue the meta-box-image.js script
	wp_register_script('media-button', get_template_directory_uri() . '/assets/js/media-button.js', array('jquery'), '1.1.0');
	wp_localize_script('media-button', 'toliman_media',
		array(
			'title'		=> __('Choose or upload an image'),
			'button'	=> __('Select')
		)
	);
	wp_enqueue_script('media-button');

	//	Admin JS
	wp_register_script('toliman-js', get_template_directory_uri() . '/assets/js/admin-js.js', array('jquery'), '1.1.0');
	wp_enqueue_script('toliman-js');

}

add_action('admin_enqueue_scripts', 'toliman_enqueue_admin_media');

/*
*
*
*
*
*
*
*
*
*/
// -------------------------------------------------------------- //
// --------------------- Options Page --------------------------- //
// -------------------------------------------------------------- //
//include(get_template_directory() . '/inc/options.php');

// -------------------------------------------------------------- //
// ---------------------- Front Page ---------------------------- //
// -------------------------------------------------------------- //
//include(get_template_directory() . '/inc/front-page-content.php');

// -------------------------------------------------------------- //
// ----------------------- Ads Page ----------------------------- //
// -------------------------------------------------------------- //
//include(get_template_directory() . '/inc/ads.php');

// -------------------------------------------------------------- //
// ------------------- Custom Post Types ------------------------ //
// -------------------------------------------------------------- //
//include(get_template_directory() . '/inc/custom-post-types.php');

// -------------------------------------------------------------- //
// ------------------ Screenshots Slider ------------------------ //
// -------------------------------------------------------------- //
//include(get_template_directory() . '/inc/screenshots-slider.php');

// -------------------------------------------------------------- //
// ---------------------- Nav Menus ----------------------------- //
// -------------------------------------------------------------- //
//include(get_template_directory() . '/inc/menus.php');


/*
*
*
*
*
*
*
*
*
*/
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '... <br /><br /><strong><a class="read-more modal" href="%1$s">%2$s</a></strong>',
        get_permalink( get_the_ID() ),
        __( 'Read More &raquo;', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>