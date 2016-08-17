<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => __('Choose Image', 'guitar'),
        'desc' => __('Either upload a new, or choose an existing image from your media library', 'guitar')
    ),
//    'frame' => array(
//        'type' => 'switch',
//        'value' => '',
//        'label' => '',
//        'desc' => __('Add a border to your image?', 'guitar'),
//        'left-choice' => array(
//            'value' => '',
//            'label' => __('No', 'guitar'),
//        ),
//        'right-choice' => array(
//            'value' => 'fw-image-frame',
//            'label' => __('Yes', 'guitar'),
//        )
//    ),
    'image_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'select_size' => array(
                'label' => __('Size', 'guitar'),
                'desc' => __('Select the image size', 'guitar'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'value' => 'auto',
                'choices' => array(
                    'auto' => __('auto', 'guitar'),
                    'custom' => __('Custom', 'guitar')
                ),
            ),
        ),
        'choices' => array(
            'custom' => array(
                'width' => array(
                    'label' => '',
                    'desc' => __('Image width in pixels', 'guitar'),
                    'type' => 'short-text',
                    'value' => '',
                ),
                'position' => array(
                    'label' => '',
                    'desc' => __('Select image position', 'guitar'),
                    'type' => 'image-picker',
                    'value' => 'fw-single-image-center',
                    'choices' => array(
                        'fw-single-image-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'guitar')
                            ),
                        ),
                        'fw-single-image-center' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'guitar')
                            ),
                        ),
                        'fw-single-image-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'guitar')
                            ),
                        ),
                    ),
                ),
            ),
        )
    ),
    'height' => array(
        'label' => __('Height', 'guitar'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'guitar'),
        ),
        'custom' => 'custom_height',
        'help' => __('This option to use your custom height to like just add 500 (dont include with px)', 'guitar'),
    ),
    'image-link-group' => array(
        'type' => 'group',
        'options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Image Link', 'guitar'),
                'desc' => __('Where should your image link to?', 'guitar')
            ),
            'target' => array(
                'type' => 'switch',
                'label' => __('Open Link in New Window', 'guitar'),
                'desc' => __('Select here if you want to open the linked page in a new window', 'guitar'),
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
    )
);

