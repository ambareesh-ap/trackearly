<?php

/**
 * Enqueue scripts and styles.
 */
function xmoze_scripts() {
    wp_enqueue_style( 'xmoze-custom-fonts', get_theme_file_uri( '/assets/css/custom-fonts.css' ), array(), XMOZE_THEME_VERSION );
    wp_enqueue_style( 'font-awesomes', get_theme_file_uri( '/assets/css/all.min.css' ), array(), '5.15.1' );
	wp_enqueue_style('select2', get_theme_file_uri( '/assets/css/select2.min.css'), array(), null);
    wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), '4.0' );
    wp_enqueue_style( 'nice-select', get_theme_file_uri( '/assets/css/nice-select.min.css' ), array(), 'null' );

    wp_enqueue_style( 'xmoze-core', get_theme_file_uri( '/assets/css/core.css' ), array(), XMOZE_THEME_VERSION );
    wp_style_add_data( 'xmoze-core', 'rtl', 'replace' );

    wp_enqueue_style( 'xmoze-gutenberg', get_theme_file_uri( '/assets/css/gutenberg.css' ), array(), XMOZE_THEME_VERSION );
    wp_style_add_data( 'xmoze-gutenberg', 'rtl', 'replace' );

    wp_enqueue_style( 'xmoze-custom', get_theme_file_uri( '/assets/css/theme-style.css' ), array(), XMOZE_THEME_VERSION );
    wp_style_add_data( 'xmoze-custom', 'rtl', 'replace' );

    wp_enqueue_style( 'xmoze-style', get_stylesheet_uri(), array(), XMOZE_THEME_VERSION );


    wp_enqueue_style( 'xmoze-responsive', get_theme_file_uri( '/assets/css/theme-responsive.css' ), array(), XMOZE_THEME_VERSION );
    wp_style_add_data( 'xmoze-responsive', 'rtl', 'replace' );

    wp_enqueue_script( 'jquery-masonry' );
	wp_enqueue_script('select2', get_theme_file_uri( '/assets/js/select2.min.js'), array('jquery'), null, true);
    wp_enqueue_script( 'nice-select', get_theme_file_uri( '/assets/js/jquery.nice-select.min.js' ), array( 'jquery' ), null, true );
    wp_enqueue_script( 'xmoze-main', get_theme_file_uri( '/assets/js/xmoze-main.js' ), array( 'jquery' ), XMOZE_THEME_VERSION, true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'xmoze_scripts' );

/**
 * Registers an editor stylesheet for the theme.
 */
function xmoze_theme_add_editor_styles() {
    add_editor_style( get_theme_file_uri( '/assets/css/editor-style.css' ) );
}
add_action( 'admin_init', 'xmoze_theme_add_editor_styles' );
