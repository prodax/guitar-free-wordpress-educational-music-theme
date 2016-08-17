<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'footer_settings' => array(
        'title' => __('Footer Settings', 'guitar'),
        'type' => 'tab',
        'options' => array(
            'footer_box' => array(
                'title' => __('Footer Settings', 'guitar'),
                'type' => 'box',
                'options' => array(
                    'footer_heading' => array(
                        'label' => __('Footer text', 'guitar'),
                        'type' => 'wp-editor',
                        'value' => 'Made with  by Bootstrap Themes 2016. All Rights Reserved',
                        'desc' => __('Footer text.', 'guitar'),
                    )
                )
            ),
        ),
    ),
);
