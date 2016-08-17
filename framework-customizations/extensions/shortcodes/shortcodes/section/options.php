<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
        'type' => 'text',
        'label' => __('Sorting title', 'guitar'),
        'value' => '',
        'desc' => __('Enter a name (it is for internal use and will not appear on the front end) ', 'guitar')
    ),
    'is_fullwidth' => array(
        'label' => __('Full Width', 'guitar'),
        'type' => 'switch',
    ),
    'default_spacing' => array(
        'type' => 'radio',
        'label' => __('Section Spacing', 'guitar'),
        'desc' => __('Top and bottom spacing of this section', 'guitar'),
        'value' => 'sections',
        'choices' => array(
            'sections' => __('Default Spacing', 'guitar'),
            'min-spacing' => __('Min Spacing', 'guitar'),
            'no-spacing' => __('No Spacing', 'guitar'),
        ),
    ),
    'height' => array(
        'label' => __('Height', 'guitar'),
        'desc' => __("Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", 'guitar'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'guitar'),
            'fw-section-height-sm' => __('small', 'guitar'),
            'fw-section-height-md' => __('medium', 'guitar'),
            'fw-section-height-lg' => __('large', 'guitar'),
        ),
        'custom' => 'custom_width',
        'help' => __('This option to set extra height in your section. we have used three classs for extra height which fw-section-height-sm = 350px, fw-section-height-md= 450px , fw-section-height-lg = 650px. you can use your custom height to like just add 400 (dont include with px)', 'guitar'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'guitar'),
                'desc' => __('Select the background for your section', 'guitar'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'guitar'),
                    'color' => __('Color', 'guitar'),
                    'image' => __('Image', 'guitar'),
                    'video' => __('Video', 'guitar'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'guitar'),
                    'desc' => __('Select the background color', 'guitar'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'guitar'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'guitar'),
                            'desc' => __('Enable image overlay color?', 'guitar'),
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
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'guitar'),
                                'desc' => __('Select the overlay color', 'guitar'),
                                'value' => 'rgba(0,0,0,0.35)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
                ),
            ),
            'video' => array(
                'video' => array(
                    'label' => __('', 'guitar'),
                    'desc' => __('Insert a YouTube or Vimeo video URL', 'guitar'),
                    'type' => 'text',
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'guitar'),
                            'desc' => __('Enable video overlay color?', 'guitar'),
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
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'guitar'),
                                'desc' => __('Select the overlay color', 'guitar'),
                                'value' => 'rgba(0,0,0,0.55)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'section_image' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'image_style' => array(
                'label' => __('Use Section Image:', 'guitar'),
                'type' => 'switch',
                'right-choice' => array(
                    'value' => 'on',
                    'label' => __('Yes', 'guitar')
                ),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => __('No', 'guitar')
                )
            )
        ),
        'choices' => array(
            'on' => array(
                'image' => array(
                    'label' => __('Section Image', 'guitar'),
                    'desc' => __('Upload the section middle image', 'guitar'),
                    'type' => 'upload'
                ),
                'link' => array(
                    'label' => __('Section Name', 'guitar'),
                    'desc' => __('Insert the section name where its destination', 'guitar'),
                    'type' => 'text',
                    'value' => 'service'
                ),
            ),
            'no' => array(),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'guitar'),
        'desc' => __('Enter custom CSS class', 'guitar'),
        'type' => 'text',
        'value' => '',
    ),
);
