<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'title' => array(
        'label' => __('Title', 'guitar'),
        'type' => 'text',
        'value' => 'Our Lessons',
        'desc' => __('Type the top title', 'guitar')
    ),
    'subtitle' => array(
        'label' => __('Sub Title', 'guitar'),
        'type' => 'text',
        'value' => 'Are Easy',
        'desc' => __('Type the sub title', 'guitar'),
    ),
    'lessons' => array(
        'type' => 'addable-popup',
        'label' => __('Lessons', 'guitar'),
        'size' => 'medium',
        'desc' => __('Add Lessons Item', 'guitar'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'guitar'),
                'type' => 'text',
                'desc' => __('Title but not appear in front-end', 'guitar')
            ),
            'icon' => array(
                'label' => __('Lessons Icon', 'guitar'),
                'type' => 'icon',
                'desc' => __('Choose Lessons Icon', 'guitar'),
            ),
            'message' => array(
                'label' => __('Lessons Message', 'guitar'),
                'type' => 'text',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'desc' => __('Lessons Message Text', 'guitar'),
            ),
            'link' => array(
                'label' => __('Lessons Link', 'guitar'),
                'type' => 'text',
                'value' => '#'
            ),
        )
    ),
);
