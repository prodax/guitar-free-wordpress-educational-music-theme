<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'general' => array(
        'title' => __('General', 'guitar'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => __('General Settings', 'guitar'),
                'type' => 'box',
                'options' => array(
                    'menu_logo' => array(
                        'label' => __('Menu Logo', 'guitar'),
                        'desc' => __('Upload your website menu logo', 'guitar'),
                        'type' => 'upload',
                    ),
                    'float_logo' => array(
                        'label' => __('Float Logo', 'guitar'),
                        'desc' => __('Upload your website menu floating logo', 'guitar'),
                        'type' => 'upload',
                    ),
                    'contacts' => array(
                        'type' => 'addable-popup',
                        'label' => __('Contact List', 'guitar'),
                        'size' => 'medium',
                        'limit' => '2',
                        'desc' => __('Add Contacr List Item', 'guitar'),
                        'template' => '{{=title}}',
                        'popup-options' => array(
                            'title' => array(
                                'label' => __('Title', 'guitar'),
                                'type' => 'text',
                                'value' => 'guitarlessons',
                                'desc' => __('Contact List Text', 'guitar'),
                            ),
                            'icon' => array(
                                'label' => __('Icon', 'guitar'),
                                'type' => 'icon',
                                'value' => 'fa fa-skype',
                                'desc' => __('Choose Contact Icon', 'guitar'),
                            ),
                            'link' => array(
                                'label' => __('Link', 'guitar'),
                                'type' => 'text',
                                'value' => '#',
                                'desc' => __('Contact Targeted Link', 'guitar'),
                            ),
                        )
                    ),
                    'socials' => array(
                        'type' => 'addable-popup',
                        'label' => __('Social Icon', 'guitar'),
                        'size' => 'medium',
                        'limit' => '4',
                        'desc' => __('Add Social Icon List', 'guitar'),
                        'template' => '{{=title}}',
                        'popup-options' => array(
                            'title' => array(
                                'label' => __('Title', 'guitar'),
                                'type' => 'text',
                                'value' => 'Facebook',
                                'desc' => __('Social Title but not appear in front-end', 'guitar'),
                            ),
                            'icon' => array(
                                'label' => __('Icon', 'guitar'),
                                'type' => 'icon',
                                'value' => 'fa fa-facebook',
                                'desc' => __('Choose Social Icon', 'guitar'),
                            ),
                            'link' => array(
                                'label' => __('Link', 'guitar'),
                                'type' => 'text',
                                'value' => '#',
                                'desc' => __('Social Icon Targeted Link', 'guitar'),
                            ),
                        )
                    ),
                ),
            ),
        )
    )
);
