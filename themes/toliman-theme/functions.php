<?php

function toliman_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_post_type_support( 'page', 'excerpt' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'toliman-primary' ),
		'menu-2' => esc_html__( 'Mobile', 'toliman-mobile' ),
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
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0');

	// Boostrap
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '1.0.0');

	// Font Awesome
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css');

	// Default Styles
	wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css', array(), '1.0.25');

	// ----------------------------- JS ----------------------------- //

	// jQuery
	wp_enqueue_script( 'jquery' );

	// Bootstrap
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '1.0.0');

	// Main scripts
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.18', true);

	// Bio EP Popup
	//wp_enqueue_script('popup-js', get_template_directory_uri() . '/assets/js/bioep.min.js', array(), '2.0.0', true);


}

// Dashboard styling and js
function toliman_enqueue_admin_media() {
	// Enqueues all scripts, styles, settings, and templates necessary to use all media JavaScript APIs.
	wp_enqueue_media();
}

add_action('admin_enqueue_scripts', 'toliman_enqueue_admin_media');



// Custom Blocks

function toliman_register_block() {
	$asset_file = include( get_template_directory_uri() . '/assets/js/blocks/phone-carousel.asset.php');

    wp_register_script(
        'phone-carousel',
        get_template_directory_uri() . '/assets/js/blocks/phone-carousel.js',
        array('wp-blocks', 'wp-element', 'wp-polyfill', 'wp-editor'),
        filemtime( get_template_directory_uri() . '/assets/js/blocks/phone-carousel.js' )
    );

    // wp_register_style(
    // 	'phone-carousel-block-editor',
    // 	get_template_directory_uri() . '/inc/css/editor.css',
    // 	array('wp-edit-blocks'),
    // 	filemtime( get_template_directory_uri() . '/inc/css/editor.css' )
    // );

    wp_register_style(
		'phone-carousel-block-front',
		get_template_directory_uri() . '/assets/css/phone-carousel.css',
		array( ),
		filemtime( get_template_directory_uri() . '/assets/css/phone-carousel.css' )
    );

    register_block_type( 'toliman-blocks/phone-carousel', array(
        'editor_script' => 'phone-carousel',
        //'editor_style'  => 'phone-carousel-block-editor',
        'style'			=> 'phone-carousel-block-front'
    ) );
}

add_action( 'init', 'toliman_register_block' );

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
include(get_template_directory() . '/inc/custom-post-types.php');

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








/**
 * Descriptions on Header Menu
 * @author Bill Erickson
 * @link http://www.billerickson.net/code/add-description-to-wordpress-menu-items/
 *
 * @param string $item_output, HTML outputp for the menu item
 * @param object $item, menu item object
 * @param int $depth, depth in menu structure
 * @param object $args, arguments passed to wp_nav_menu()
 * @return string $item_output
 */
function be_header_menu_desc( $item_output, $item, $depth, $args ) {

	if( 'menu-1' == $args->theme_location && ! $depth && $item->description )
		$item_output = str_replace( '</a>', '</a><div class="description">' . $item->description . '</div>', $item_output );

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'be_header_menu_desc', 10, 4 );

?>