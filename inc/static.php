<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Enqueue all theme scripts and styles
 *

  /** --------------------------------------
 * ** REGISTERING THEME ASSETS
 * ** ------------------------------------ */
/**
 * Enqueue styles.
 */
if (!is_admin()) {


    //Framework CSS Essectial files
    wp_enqueue_style('blog.css', GUITAR_CSS . '/blog.css', null, GUITAR_VERSION);
    wp_enqueue_style('main.css', GUITAR_CSS . '/xs_main.css', null, GUITAR_VERSION);


    wp_enqueue_style('gs-iconfont', GUITAR_CSS . '/fonticons.css', null, GUITAR_VERSION);
    wp_enqueue_style('gs-stylesheet', GUITAR_CSS . '/stylesheet.css', null, GUITAR_VERSION);
    wp_enqueue_style('gs-font-awesome.min', GUITAR_CSS . '/font-awesome.min.css', null, GUITAR_VERSION);
    wp_enqueue_style('gs-bootstrap.min.css', GUITAR_CSS . '/bootstrap.min.css', null, GUITAR_VERSION);

    wp_enqueue_style('gs-plugin', GUITAR_CSS . '/plugins.css', null, GUITAR_VERSION);
    wp_enqueue_style('gs-portfolio', GUITAR_CSS . '/portfolio.jquery.css', null, GUITAR_VERSION);
    wp_enqueue_style('gs-navmenu', GUITAR_CSS . '/navmenu/styles.css', null, GUITAR_VERSION);
    wp_enqueue_style('gs-magnific-popup', GUITAR_CSS . '/magnific-popup.css', null, GUITAR_VERSION);

    wp_enqueue_style('gs-style', GUITAR_CSS . '/style.css', null, GUITAR_VERSION);
    
    wp_enqueue_style('gs-responsive', GUITAR_CSS . '/responsive.css', null, GUITAR_VERSION);
}




/**
 * Enqueue scripts.
 */
if (!is_admin()) {
    wp_enqueue_script('gs-bootstrap.min.js', GUITAR_SCRIPTS . '/vendor/bootstrap.min.js', array('jquery'), GUITAR_VERSION, true);
    wp_enqueue_script('gs-plugin', GUITAR_SCRIPTS . '/plugins.js', array('jquery'), GUITAR_VERSION, true);
    wp_enqueue_script('gs-jquery.easing', GUITAR_SCRIPTS . '/jquery.easing.1.3.js', array('jquery'), GUITAR_VERSION, true);
    wp_enqueue_script('gs-jquery.easypiechart', GUITAR_SCRIPTS . '/jquery.easypiechart.min.js', array('jquery'), GUITAR_VERSION, true);
    wp_enqueue_script('gs-portfolio', GUITAR_SCRIPTS . '/portfolio.jquery.js', array('jquery'), GUITAR_VERSION, true);
    wp_enqueue_script('gs-jquery.slicknav', GUITAR_SCRIPTS . '/jquery.slicknav.min.js', array('jquery'), GUITAR_VERSION, true);
    wp_enqueue_script('gs-mixitup', GUITAR_SCRIPTS . '/jquery.mixitup.min.js', array('jquery'), GUITAR_VERSION, true);
    wp_enqueue_script('gs-magnific-popup', GUITAR_SCRIPTS . '/jquery.magnific-popup.js', array('jquery'), GUITAR_VERSION, true);
    wp_enqueue_script('gs-fw-form-helpers', GUITAR_SCRIPTS . '/fw-form-helpers.js', array('jquery'), GUITAR_VERSION, true);
    wp_enqueue_script('gs-main', GUITAR_SCRIPTS . '/main.js', array('jquery'), GUITAR_VERSION, true);

    // Load Wordpress Comment js
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


