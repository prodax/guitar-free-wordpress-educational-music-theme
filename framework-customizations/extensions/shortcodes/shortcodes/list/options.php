<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'list_group' => array(
        'type' => 'group',
        'options' => array(
            'list_items' => array(
                'type' => 'addable-popup',
                'label' => __('List Items', 'guitar'),
                'desc' => __('Add list items', 'guitar'),
                'template' => '{{=item}}',
                'popup-options' => array(
                    'sublist_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'item' => array(
                                'label' => __('Item', 'guitar'),
                                'desc' => __('Enter an item in list', 'guitar'),
                                'type' => 'text',
                            ),
                          
                        )
                    ),
                    'btn_link_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'link' => array(
                                'label' => __('Link', 'guitar'),
                                'desc' => __('you can add link if you want', 'guitar'),
                                'type' => 'text',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => __('', 'guitar'),
                                'desc' => __('Open link in new window?', 'guitar'),
                                'value' => '_self',
                                'right-choice' => array(
                                    'value' => '_blank',
                                    'label' => __('Yes', 'guitar'),
                                ),
                                'left-choice' => array(
                                    'value' => '_self',
                                    'label' => __('No', 'guitar'),
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'separator' => array(
                'type' => 'switch',
                'label' => __('', 'guitar'),
                'desc' => __('Separate each list item by a line?', 'guitar'),
                'value' => '_self',
                'right-choice' => array(
                    'value' => 'list-bordered',
                    'label' => __('Yes', 'guitar'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => __('No', 'guitar'),
                ),
            ),
        )
    ),
    'list_type' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'guitar'),
                'desc' => __('Make a numbered list or add an icon to list items', 'guitar'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'list-default',
                'type' => 'radio',
                'choices' => array(
                    'list-default' => __('None', 'guitar'),
                    'list-numbers' => __('Number', 'guitar'),
                    'list-icon' => __('Icon', 'guitar'),
                ),
            )
        ),
        'choices' => array(
            'list-default' => array(),
            'list-numbers' => array(),
            'list-icon' => array(
                'icon' => array(
                    'type' => 'icon',
                    'label' => __('', 'guitar')
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'guitar'),
        'desc' => __('Enter custom CSS class', 'guitar'),
        'type' => 'text',
        'value' => '',
        'help' => __('You can use this class to further style this shortcode', 'guitar'),
    ),
);
