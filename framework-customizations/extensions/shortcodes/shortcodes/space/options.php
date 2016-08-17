<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'height' => array(
        'label' => __('Height', 'guitar'),
        'desc' => __('Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'guitar'),
        'type' => 'radio-text',
        'choices' => array(
            'space-sm' => __('Small', 'guitar'),
            'space-md' => __('Medium', 'guitar'),
            'space-lg' => __('Large', 'guitar'),
        ),
        'value' => 'space-md',
        'custom' => 'custom_height',
    ),
);
