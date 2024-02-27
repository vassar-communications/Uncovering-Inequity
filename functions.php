<?php
/**
 * Uncovering Inequity functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Uncovering Inequity
 */

if ( ! function_exists( 'inequity_block_styles' ) ) :
/**
 * Register custom block styles
 *
 * @since Twenty Twenty-Four 1.0
 * @return void
 */
	function inequity_block_styles() {
		register_block_style(
		'core/paragraph',
		array(
			'name'         => 'intro',
			'label'        => __( 'Intro', 'inequity' ),
			'inline_style' => ".is-style-intro { font-family: freight-big-pro; font-size: 1.8rem; line-height: 1.2; }",
		)
	);	
	
	}
	endif;

add_action( 'init', 'inequity_block_styles' );


wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/site.css', array(), filemtime(get_template_directory() . '/assets/css/site.css'), false);













