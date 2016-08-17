<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'type' => 'text',
        'label' => __('Title', 'guitar'),
        'value' => 'Call us on Skype!',
        'desc' => __('Enter your call to action title', 'guitar')
    ),
    'subtitle' => array(
        'type' => 'text',
        'label' => __('Sub Title', 'guitar'),
        'value' => 'And Learn How to Play Guitar',
        'desc' => __('Enter your call to action sub title', 'guitar')
    ),
    'icon' => array(
        'type' => 'icon',
        'label' => __('Icon', 'guitar'),
        'value' => 'fa fa-skype',
        'desc' => __('Choose your call to action icon', 'guitar')
    ),
    'btn_txt_1' => array(
        'type' => 'text',
        'label' => __('First Button Text', 'guitar'),
        'value' => 'More Details',
        'desc' => __('Enter your call to action first button text', 'guitar')
    ),
     'btn_txt_2' => array(
        'type' => 'text',
        'label' => __('Second Button Text', 'guitar'),
        'value' => 'Choose Your Plan',
        'desc' => __('Enter your call to action first button text', 'guitar')
    ),

);
