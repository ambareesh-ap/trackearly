<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// theme version
if(! defined('XMOZE_THEME_VERSION') ){
    define('XMOZE_THEME_VERSION', wp_get_theme()->get('Version'));
} 

// Define the DHRUBOK Folder
if( ! defined( 'XMOZE_DIR' ) ) {
	define('XMOZE_DIR', get_template_directory() );
}

// Define the DHRUBOK Partials Folder
if( ! defined( 'XMOZE_PARTIALS_DIR' ) ) {
	define('XMOZE_PARTIALS_DIR', trailingslashit( XMOZE_DIR ) . 'partials' );
}

// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'XMOZE_ASSETS_DIR' ) ) {
	define('XMOZE_ASSETS_DIR', trailingslashit( XMOZE_DIR ) . 'assets' );
}


// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'XMOZE_INC_DIR' ) ) {
	define('XMOZE_INC_DIR', trailingslashit( XMOZE_DIR ) . 'inc' );
}

// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'XMOZE_FRAMEWORK_DIR' ) ) {
	define('XMOZE_FRAMEWORK_DIR', trailingslashit( XMOZE_INC_DIR ) . 'framework' );
}

// Define the Libs Folder of the DHRUBOK Directory
if( ! defined( 'XMOZE_LIBS_DIR' ) ) {
	define('XMOZE_LIBS_DIR', trailingslashit( XMOZE_DIR ) . 'libs' );
}

// Define the Shortcodes Folder of the DHRUBOK Directory
if( ! defined( 'XMOZE_SHORTCODES_DIR' ) ) {
	define('XMOZE_SHORTCODES_DIR', trailingslashit( XMOZE_INC_DIR ) . 'shortcodes' );
}

// Define the Classes Folder of the DHRUBOK Directory
if( ! defined( 'XMOZE_CLASSES_DIR' ) ) {
	define('XMOZE_CLASSES_DIR', trailingslashit( XMOZE_INC_DIR ) . 'classes' );
}

// Define the Widgets Folder of the DHRUBOK Directory
if( ! defined( 'XMOZE_WIDGETS_DIR' ) ) {
	define('XMOZE_WIDGETS_DIR', trailingslashit( XMOZE_INC_DIR ) . 'widgets' );
}


// Define the PLUGINS Folder of the DHRUBOK Directory
if( ! defined( 'XMOZE_INC_PLUGINS_DIR' ) ) {
	define('XMOZE_INC_PLUGINS_DIR', trailingslashit( XMOZE_INC_DIR ) . 'plugins' );
}
