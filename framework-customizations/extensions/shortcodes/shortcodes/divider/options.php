<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => __('Type', 'guitar'),
        'desc' => __('Select divider type', 'guitar'),
        'type' => 'image-picker',
        'value' => 'fw-line-solid',
        'choices' => array(
            'fw-line-solid' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GUITAR_IMAGES . '/image-picker/solid.jpg',
                    'title' => __('Solid Line', 'guitar')
                ),
            ),
            'fw-line-dashed' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GUITAR_IMAGES . '/image-picker/dashed.jpg',
                    'title' => __('Dashed Line', 'guitar')
                ),
            ),
            'fw-line-dotted' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GUITAR_IMAGES . '/image-picker/dotted.jpg',
                    'title' => __('Dotted Line', 'guitar')
                ),
            ),
            'fw-line-double' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GUITAR_IMAGES . '/image-picker/double.jpg',
                    'title' => __('Double Line', 'guitar')
                ),
            ),
            'fw-line-thick' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GUITAR_IMAGES . '/image-picker/thick.jpg',
                    'title' => __('Thick Line', 'guitar')
                ),
            ),
            'fw-divider-space' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GUITAR_IMAGES . '/image-picker/space_gap.jpg',
                    'title' => __('Space', 'guitar')
                ),
            ),
        ),
    ),
    'divider_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'size' => array(
                'label' => __('Height', 'guitar'),
                'desc' => __('Select the top and bottom margin in px', 'guitar'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'space-sm' => __('Small', 'guitar'),
                    'space-md' => __('Medium', 'guitar'),
                    'space-lg' => __('Large', 'guitar'),
                    'custom' => __('Custom', 'guitar'),
                ),
                'value' => 'space-md'
            ),
        ),
        'choices' => array(
            'custom' => array(
                'margin_top' => array(
                    'label' => __('Margin Top', 'guitar'),
                    'desc' => __('Enter margin-top in px', 'guitar'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'type' => 'short-text',
                    'value' => ''
                ),
                'margin_bottom' => array(
                    'label' => __('Margin Bottom', 'guitar'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'desc' => __('Enter margin-bottom in px', 'guitar'),
                    'type' => 'short-text',
                    'value' => ''
                ),
            ),
            'no' => array(),
        ),
        'show_borders' => false,
    ),
    'width' => array(
        'label' => __('Width', 'guitar'),
        'desc' => __('Select the width size in %', 'guitar'),
        'type' => 'radio-text',
        'choices' => array(
            '25' => __('25%', 'guitar'),
            '50' => __('50%', 'guitar'),
            '100' => __('100%', 'guitar'),
        ),
        'custom' => 'custom_width',
        'value' => '100'
    ),
    'bg_color' => array(
        'label' => __('Color', 'guitar'),
        'desc' => __('Select divider color', 'guitar'),
        'value' => '',
        'type' => 'color-picker'
    ),
    'special_divider' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'guitar'),
                'desc' => __('Make a special divider by adding an icon or text to it', 'guitar'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'none',
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'guitar'),
                    'text' => __('Text', 'guitar'),
                    'icon' => __('Icon', 'guitar'),
                ),
            )
        ),
        'choices' => array(
            'text' => array(
                'title_text' => array(
                    'label' => __('', 'guitar'),
                    'desc' => __('This text will be displayed on the divider', 'guitar'),
                    'type' => 'text',
                    'value' => '',
                ),
                'color' => array(
                    'label' => __('Text Color', 'guitar'),
                    'desc' => __('Select the text color', 'guitar'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'show_bg' => array(
                    'type' => 'switch',
                    'label' => __('Background', 'guitar'),
                    'desc' => __('Add a background to your text?', 'guitar'),
                    'value' => 'no',
                    'right-choice' => array(
                        'value' => 'yes',
                        'label' => __('Yes', 'guitar'),
                    ),
                    'left-choice' => array(
                        'value' => 'no',
                        'label' => __('No', 'guitar'),
                    ),
                ),
                'position' => array(
                    'label' => __('Position', 'guitar'),
                    'desc' => __('Select text position', 'guitar'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'guitar')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'guitar')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'guitar')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'guitar'),
                    'desc' => __('Select divider size', 'guitar'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'guitar'),
                        'fw-divider-size-md' => __('Medium', 'guitar'),
                        'fw-divider-size-lg' => __('Large', 'guitar'),
                    ),
                ),
            ),
            'icon' => array(
                'icon_class' => array(
                    'type' => 'icon',
                    'label' => __('', 'guitar')
                ),
                'color' => array(
                    'label' => __('Icon Color', 'guitar'),
                    'desc' => __('Select the icon color', 'guitar'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'position' => array(
                    'label' => __('Position', 'guitar'),
                    'desc' => __('Select icon position', 'guitar'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'guitar')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'guitar')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'guitar')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'guitar'),
                    'desc' => __('Select divider size', 'guitar'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'guitar'),
                        'fw-divider-size-md' => __('Medium', 'guitar'),
                        'fw-divider-size-lg' => __('Large', 'guitar'),
                    ),
                ),
            ),
            'none' => array(),
        ),
        'show_borders' => false,
    ),
    'link_id' => array(
        'type' => 'text',
        'label' => __('Link ID', 'guitar'),
        'desc' => __('Enter a custom CSS id for this divider', 'guitar'),
        'help' => sprintf("%s", __('Use this ID in any URL link in the page in order to anchor link to this divider', 'guitar')),
        'value' => '',
    ),
    'class' => array(
        'label' => __('Custom Class', 'guitar'),
        'desc' => __('Enter custom CSS class', 'guitar'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'guitar'),
        'type' => 'text',
        'value' => '',
    ),
);
