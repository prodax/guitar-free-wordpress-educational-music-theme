<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'guitar'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'guitar'),
        'type' => 'text',
    ),
    'width' => array(
        'label' => __('Width', 'guitar'),
        'desc' => __('Video width in pixels', 'guitar'),
        'type' => 'short-text',
        'value' => '',
    ),
    'height' => array(
        'label' => __('Height', 'guitar'),
        'desc' => __('Video height in pixels', 'guitar'),
        'type' => 'short-text',
        'value' => '',
    ),
    'frame' => array(
        'type' => 'switch',
        'value' => '',
        'label' => __('Video Border', 'guitar'),
        'desc' => __('Add a border to your video?', 'guitar'),
        'left-choice' => array(
            'value' => '',
            'label' => __('No', 'guitar'),
        ),
        'right-choice' => array(
            'value' => 'fw-video-frame',
            'label' => __('Yes', 'guitar'),
        )
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'guitar'),
        'desc' => __('Enter custom CSS class', 'guitar'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode.', 'guitar'),
        'value' => '',
    ),
);
