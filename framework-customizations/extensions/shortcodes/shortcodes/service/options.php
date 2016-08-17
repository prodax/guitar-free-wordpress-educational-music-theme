<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'services' => array(
        'type' => 'addable-popup',
        'label' => __('Service', 'guitar'),
        'size' => 'medium',
        'desc' => __('Add Service Item', 'guitar'),
        'template' => '{{=message}}',
        'popup-options' => array(
            'icon' => array(
                'label' => __('Service Icon', 'guitar'),
                'type' => 'icon',
                'desc' => __('Choose Service Icon', 'guitar'),
            ),
            'message' => array(
                'label' => __('Service Message', 'guitar'),
                'type' => 'text',
                'value' => 'Recording Services',
                'desc' => __('Service Message Text', 'guitar'),
            )
        )
    ),
);
