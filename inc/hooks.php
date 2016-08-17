<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Theme’s filters and actions
 */
/*
 * Widget register
 */
if (!function_exists('guitar_widget_init')) {

    function guitar_widget_init() {
        if (function_exists('register_sidebar')) {
            register_sidebar(
                    array(
                        'name' => __('Blog Widget Area', 'guitar'),
                        'id' => 'sidebar-1',
                        'description' => __('Appears on posts and pages.', 'guitar'),
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget' => '</div> <!-- end widget -->',
                        'before_title' => '<h5 class="widget-title">',
                        'after_title' => '</h5>',
                    )
            );
            register_sidebar(array(
                'name' => __('Footer-1', 'guitar'),
                'id' => 'footer-1',
                'description' => __('Widgets for first footer area', 'guitar'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="footer_title">',
                'after_title' => '</h4>',
            ));

            register_sidebar(array(
                'name' => __('Footer-2', 'guitar'),
                'id' => 'footer-2',
                'description' => __('Widgets for secont footer area', 'guitar'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="footer_title">',
                'after_title' => '</h4><div class="separator3"></div>',
            ));

            register_sidebar(array(
                'name' => __('Footer-3', 'guitar'),
                'id' => 'footer-3',
                'description' => __('Widgets for third footer area', 'guitar'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="footer_title">',
                'after_title' => '</h4> <div class="separator3"></div>',
            ));

        }
    }

    add_action('widgets_init', 'guitar_widget_init');
}


/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

/** @internal */
function _action_theme_register_required_plugins() {
    tgmpa(array(
        array(
            'name' => 'guitar',
            'slug' => 'guitar',
            'required' => true,
        ),
    ));
}

add_action('tgmpa_register', '_action_theme_register_required_plugins');

// Mega menu filter.

function _filter_mega_menu_wp_nav_menu_objects($sorted_menu_items, $args) {
    $frontpage_ID = guitar_main(get_option('page_on_front'), false);
    $home = (guitar_main(get_the_ID(), false) == $frontpage_ID) ? true : false;
    $mega_menu = array();
    $prefx = ($home != true) ? esc_url(home_url('/#')) : '#';

    foreach ($sorted_menu_items as $item) {
        if (guitar_get_post_meta(guitar_main($item->object_id, false), 'hide_title_from_menu') == 'yes') {
            $item->classes[] = 'hidden cross-fire';
        }

        $section = guitar_get_post_meta(guitar_main($item->object_id, false), 'xs_page_section');

        if (in_array('menu-item-has-children', $item->classes)) {

            $item->url = '#';
        } else {
            if ($section == 'on') {
                $item->url = esc_url($prefx . guitar_sectionID(guitar_main($item->object_id, false)));
            }
        }
    }


    return $sorted_menu_items;
}

add_filter('wp_nav_menu_objects', '_filter_mega_menu_wp_nav_menu_objects', 10, 2);



/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

/** @internal */
function _action_guitar_register_required_plugins() {

    $plugin_dir = GUITAR_THEMEROOT_DIR . '/inc/includes/plugins';

    $plugins = array(
        array(
            'name' => 'Unyson',
            'slug' => 'unyson',
            'required' => true,
            'source' => $plugin_dir . '/unyson.zip',
        ),
        array(
            'name' => 'Icon List',
            'slug' => 'icon-list',
            'required' => true,
            'external_url' => 'https://wordpress.org/plugins/icon-list/',
        ),
         array(
            'name' => 'Image Upload Widget',
            'slug' => 'image-upload-widget',
            'required' => true,
            'external_url' => 'https://wordpress.org/plugins/image-upload-widget/',
        ),
    );


    $config = array(
        'id' => 'guitar', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu' => 'guitar-install-plugins', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'capability' => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true, // Automatically activate plugins after installation or not.
        'message' => '', // Message to output right before the plugins table.
    );

    guitarpa($plugins, $config);
}

add_action('guitarpa_register', '_action_guitar_register_required_plugins');


if (!function_exists('guitar_action_xs_admin_scripts')) :

    function guitar_action_xs_admin_scripts() {
        wp_enqueue_style('xs-admin', GUITAR_CSS . '/xs_admin.css', null, GUITAR_VERSION);
    }

    add_action('admin_enqueue_scripts', 'guitar_action_xs_admin_scripts');

endif;