<?php
/**
 * functions.php
 *
 * The theme's functions and definitions.
 */
/**
 * 1.0 - Define constants. Current Version number & Theme Name.
 */
define('GUITAR_THEME', 'Guitar School WordPress Educational Music Template');
define('GUITAR_VERSION', '1.0');
define('GUITAR_THEMEROOT', get_template_directory_uri());
define('GUITAR_THEMEROOT_DIR', get_template_directory());
define('GUITAR_IMAGES', GUITAR_THEMEROOT . '/assets/images');
define('GUITAR_IMAGES_DIR', GUITAR_THEMEROOT_DIR . '/assets/images');
define('GUITAR_CSS', GUITAR_THEMEROOT . '/assets/css');
define('GUITAR_CSS_DIR', GUITAR_THEMEROOT_DIR . '/assets/css');
define('GUITAR_SCRIPTS', GUITAR_THEMEROOT . '/assets/js');
define('GUITAR_SCRIPTS_DIR', GUITAR_THEMEROOT_DIR . '/assets/js');
define('GUITAR_PHPSCRIPTS', GUITAR_THEMEROOT . '/assets/php');
define('GUITAR_PHPSCRIPTS_DIR', GUITAR_THEMEROOT_DIR . '/assets/php');







/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if (!isset($content_width)) {
    $content_width = 800;
}






/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */
if (!function_exists('xs_setup')) {

    function xs_setup() {
        /**
         * Make the theme available for translation.
         */
        $lang_dir = GUITAR_THEMEROOT . '/languages';
        load_theme_textdomain('guitar', $lang_dir);

        /**
         * Add support for post formats.
         */
        add_theme_support('post-formats', array()
        );

        /**
         * Add support for automatic feed links.
         */
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');


        /**
         * Add support for post thumbnails.
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(770, 335, array('center', 'center')); // Hard crop center center
        add_image_size('blog-thumb', 770, 335, TRUE);
        add_image_size('recent-post', 570, 545, TRUE);
        add_image_size('portfolio', 360, 265, TRUE);

        /**
         * Register nav menus.
         */
        register_nav_menus(
                array(
                    'primary' => __('Main Menu', 'GUITAR')
                )
        );
        register_nav_menus(
                array(
                    'footer' => __('Footer Menu', 'GUITAR')
                )
        );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
    }

    add_action('after_setup_theme', 'xs_setup');
}

/**
 * ----------------------------------------------------------------------------------------
 * 7.0 - theme INC.
 * ----------------------------------------------------------------------------------------
 */
include_once get_template_directory() . '/inc/init.php';






