<?php
if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Helper functions used all over the theme
 */

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package xs
 */
/*
  Return
 * 
 *  */

// simply echos the variable

function guitar_return($s) {
    return $s;
}

/*
 * FOR ONE PAGE Section
 * since 1.0
 */

function guitar_editor_data($value) {
    return wp_kses_post($value);
}

// Gets unyson option data in safe mode
// since 1.0

function guitar_get_option($k, $v = '', $m = 'theme-settings') {
    if (defined('FW')) {
        switch ($m) {
            case 'theme-settings':
                $v = fw_get_db_settings_option($k);
                break;

            default:
                $v = '';
                break;
        }
    }
    return $v;
}

// Gets original page ID/ Slug
// since 1.0

function guitar_main($id, $name = true) {
    if (function_exists('icl_object_id')) {
        $id = icl_object_id($id, 'page', true, 'en');
    }

    if ($name === true) {
        $post = get_post($id);
        return $post->post_name;
    } else {
        return $id;
    }
}

// Creates SEO friendly section ID from page ID. Returns page ID directly if $return = true
// since 2.0
function guitar_sectionID($id, $returnID = false) {

    if ($returnID == false) {

        $str = get_the_title($id);
        $patterns = array(
            "/[:#+*+&+!+@+!+\.+?+%+$+\"+'+^+\[+<+{+\(+\)}+>+\]+,+`+;+,+=+\\\\]/", // match unwanted special characters
            "@<(script|style)[^>]*?>.*?</\\1>@si", // match <script>, <style> tags
            "/[~\r\n\t \/_|+ -]+/" // match newline, tab and more unwanted characters
        );

        $replacements = array(
            "", // for 1st match
            "", // for 2nd match
            "-" // for 3rd match
        );

        $str = preg_replace($patterns, $replacements, strip_tags($str));
        return strtolower(trim($str, '-'));
    } else {

        return "section-$id";
    }
}

// Gets post's meta data in a much simplier way.
// since 1.0

function guitar_get_post_meta($id, $needle) {
    $data = get_post_meta($id, 'fw_options');
    if (is_array($data) && isset($data[0]['page_sections'])) {
        $data = $data[0]['page_sections'];

        if (is_array($data)) {
            return guitar_seekKey($data, $needle);
        }
    }
}

function guitar_seekKey($haystack, $needle) {
    foreach ($haystack as $key => $value) {

        if ($key == $needle) {
            return $value;
        } elseif (is_array($value)) {
            return guitar_seekKey($value, $needle);
        }
    }
}

/*
 * btn Function
 * since 1.0
 */
//btn function

if (!function_exists('guitar_theme_button_class')) :

    function guitar_theme_button_class($style) {
        /**
         * Display specific class for buttons - depends on theme
         */
        if ($style == 'default') {
            echo 'btn btn-default';
        } elseif ($style == 'primary') {
            echo 'btn btn-primary';
        } else {
            echo 'default';
        }
    }

endif;

/*
 * wpml compatitible 
 */

if (!function_exists('guitar_theme_translate')) :

    function guitar_theme_translate($content) {
        /**
         * Return the content for translations plugins
         * @param string $content
         */
        $content = html_entity_decode($content, ENT_QUOTES, 'UTF-8');

        if (function_exists('icl_object_id') && strpos($content, 'wpml_translate') == true) {
            $content = do_shortcode($content);
        } elseif (function_exists('qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage')) {
            $content = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($content);
        }

        return $content;
    }

endif;


/*
 * This fucntion for recent post shortcode.
 * people can select show from one category or from all category
 * since 1.0
 */

// term
if (!function_exists('guitar_get_category_term_list')) :

    function guitar_get_category_term_list() {
        /**
         * Return array of categories
         */
        $taxonomy = 'category';
        $args = array(
            'hide_empty' => true,
        );

        $terms = get_terms($taxonomy, $args);
        $result = array();
        $result[0] = __('All Categories', 'guitar');

        if (!empty($terms))
            foreach ($terms as $term) {
                $result[$term->term_id] = $term->name;
            }
        return $result;
    }

endif;

/**
 * Portfolio categories
 */
if (!function_exists('guitar_get_portfolio_category')) :

    function guitar_get_portfolio_category() {

        $taxonomy = 'fw-portfolio-category';
        $args = array(
            'hide_empty' => true,
        );

        $terms = get_terms($taxonomy, $args);
        $result = array();
        $result[0] = __('All Categories', 'tayn');

        if (!empty($terms))
            foreach ($terms as $term) {
                $result[$term->term_id] = $term->name;
            }
        return $result;
    }

endif;


function guitar_edit_section() {
    ?>
    <div class="section-edit">
        <div class="container relative">
            <?php
            if (is_user_logged_in()) {
                edit_post_link(esc_html__('Edit', 'guitar'), '', '');
            }
            ?>
            <span class="section-abc"><?php echo esc_html(get_the_title()); ?></span>
        </div>
    </div> 
    <?php
}
