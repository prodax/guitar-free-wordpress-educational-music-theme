<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'category' => array(
        'label' => __('Display From', 'getleads'),
        'desc' => __('Select a blog category', 'getleads'),
        'type' => 'select',
        'value' => '',
        'choices' => guitar_get_portfolio_category(),
    )
);
