<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => __('Type', 'guitar'),
        'desc' => __('Select the notification type', 'guitar'),
        'value' => 'fw-alert-info',
        'type' => 'image-picker',
        'choices' => array(
            'success' => array(
                'small' => array(
                    'height' => 50,
                    'src' => logic_IMAGES . '/image-picker/notification-congratulation.jpg',
                    'title' => __('Congratulations', 'guitar')
                ),
            ),
            'info' => array(
                'small' => array(
                    'height' => 50,
                    'src' => logic_IMAGES . '/image-picker/notification-information.jpg',
                    'title' => __('Information', 'guitar')
                ),
            ),
            'warning' => array(
                'small' => array(
                    'height' => 50,
                    'src' => logic_IMAGES . '/image-picker/notification-warning.jpg',
                    'title' => __('Alert', 'guitar')
                ),
            ),
            'danger' => array(
                'small' => array(
                    'height' => 50,
                    'src' => logic_IMAGES . '/image-picker/notification-error.jpg',
                    'title' => __('Error', 'guitar')
                ),
            ),
        ),
    ),
    'message' => array(
        'label' => __('Message', 'guitar'),
        'desc' => __('Notification message', 'guitar'),
        'type' => 'text',
        'value' => __('Message!', 'guitar'),
    ),
);
