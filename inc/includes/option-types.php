<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');

function guitar_action_theme_include_custom_option_types() {
    if (is_admin()) {
        require_once dirname(__FILE__) . '/option-types/fw-multi-inline/class-fw-option-type-fw-multi-inline.php';
       
    }
}

add_action('fw_option_types_init', 'guitar_action_theme_include_custom_option_types');

