<?php

if ( ! function_exists( 'wp_fse_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function wp_fse_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'wp_fse_support' );


/*
    Enqueue Styles
*/

if ( ! function_exists( 'wp_fse_styles' ) ) :
    function wp_fse_styles() {
        //Register Stylesheet
        wp_enqueue_style('wp-fse-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version')); 
        wp_enqueue_style('wp-fse-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css'); 

    }
endif; 
add_action( 'wp_enqueue_scripts', 'wp_fse_styles' );