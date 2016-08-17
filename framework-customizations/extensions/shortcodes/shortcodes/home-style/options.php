<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'sliders' => array(
        'type' => 'addable-popup',
        'label' => __('Home Slider', 'guitar'),
        'size' => 'medium',
        'desc' => __('Add Home Sliders Item', 'guitar'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'guitar'),
                'type' => 'text',
                'value' => 'Check Our Video',
                'desc' => __('Type Your Homepage Title', 'guitar'),
            ),
            'subtitle' => array(
                'label' => __('Sub Title', 'guitar'),
                'type' => 'text',
                'value' => 'Learning in 6 Weeks',
                'desc' => __('Type Your Homepage SubTitle', 'guitar'),
            ),
            'video' => array(
                'label' => __('Video URL', 'guitar'),
                'type' => 'text',
                'value' => 'https://www.youtube.com/embed/_l6CQRHIGyg',
                'desc' => __('Input Your Home Page Video URL', 'guitar'),
            ),
 
        ),
    ),
);
