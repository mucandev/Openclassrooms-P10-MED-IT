<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function theme_enqueue_assets() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );

	// Enqueue child theme scripts
		wp_enqueue_script( 'child-script',  get_stylesheet_directory_uri() . '/scripts/script.js', array( 'jquery' ), '1.0.0', true );
		//wp_enqueue_script('script-Vanilla', get_stylesheet_directory_uri() . '/scripts/scriptVanilla.js', [], false, true );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );


// ajout bouton dans le menu de navigation
function contact_btn( $items, $args ) {
	$items .= ' <li id="menu-item-852" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/contact" class=" contact-btn">Nous contacter</a></li> ';
	return $items;
}

add_filter( 'wp_nav_menu_items', 'contact_btn', 10, 2 );