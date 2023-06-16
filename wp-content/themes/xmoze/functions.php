<?php

/**
 * xmoze theme functions and definitions
 */
// File Security Check
if (!defined('ABSPATH')) {
    exit;
}
/**
 * xmoze functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xmoze
 */
if (!function_exists('xmoze_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function xmoze_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on xmoze, use a find and replace
         * to change 'xmoze' to the name of your theme in all the template files.
         */
        load_theme_textdomain('xmoze', get_template_directory() . '/languages');
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'main-menu' => esc_html__('Main Menu', 'xmoze'),
            )
        );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
        // Set up the WordPress core custom background feature.
        $args = apply_filters(
            'xmoze_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        );
        add_theme_support('custom-background', $args);
        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'xmoze_setup');
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xmoze_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('xmoze_content_width', 1200);
}
add_action('after_setup_theme', 'xmoze_content_width', 0);



/**
 *
 * Intialize xmoze
 *
 */
require get_parent_theme_file_path('/inc/init.php');