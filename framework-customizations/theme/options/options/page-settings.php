<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'page_settings' => array(
        'title' => __('Page Settings', 'guitar'),
        'type' => 'tab',
        'options' => array(
            'header-page-box' => array(
                'title' => __('Page Settings', 'guitar'),
                'type' => 'box',
                'options' => array(
                    'general_page_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'page_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Page Title',
                                        'desc' => 'Add your Page hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => __('Page Header Image', 'guitar'),
                                        'desc' => __('Upload a Page header image', 'guitar'),
                                        'help' => __("This default header image will be used for all your Page.", 'guitar'),
                                        'type' => 'upload'
                                    ),
                                    'header_overlay_color' => array(
                                        'label' => __('', 'guitar'),
                                        'desc' => __('Select the image overlay color', 'guitar'),
                                        'help' => __('', 'guitar'),
                                        'value' => 'rgba(255,255,255,0.55)',
                                        'type' => 'rgba-color-picker'
                                    ),
                                )
                            ),
                        )
                    )
                )
            ),
        ),
    ),
);
