<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'default_padding' => array(
        'type' => 'switch',
        'label' => __('Default Spacing', 'guitar'),
        'desc' => __('Use default left and right spacing?', 'guitar'),
        'help' => __("Default left and right spacings are set to 15px", 'guitar'),
        'value' => '',
        'right-choice' => array(
            'value' => '',
            'label' => __('Yes', 'guitar'),
        ),
        'left-choice' => array(
            'value' => 'fw-col-no-padding',
            'label' => __('No', 'guitar'),
        ),
    ),
    'padding_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Inner Spacing', 'guitar'),
                'html' => '',
            ),
            'padding_top' => array(
                'label' => false,
                'desc' => __('top', 'guitar'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_right' => array(
                'label' => false,
                'desc' => __('right', 'guitar'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'guitar'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_left' => array(
                'label' => false,
                'desc' => __('left', 'guitar'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'margin_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Outer Spacing', 'guitar'),
                'html' => '',
            ),
            'margin_top' => array(
                'label' => false,
                'desc' => __('top', 'guitar'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_right' => array(
                'label' => false,
                'desc' => __('right', 'guitar'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'guitar'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_left' => array(
                'label' => false,
                'desc' => __('left', 'guitar'),
                'type' => 'short-text',
                'value' => '0',
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
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'guitar'),
                'desc' => __('Select the background for your column', 'guitar'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'guitar'),
                    'image' => __('Image', 'guitar'),
                    'bgcolor' => __('Color', 'guitar'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'guitar'),
                    'help' => __('', 'guitar'),
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
                'repeat' => array(
                    'label' => __('', 'guitar'),
                    'desc' => __('Select how will the background repeat', 'guitar'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => 'no-repeat',
                    'choices' => array(
                        'no-repeat' => __('No-Repeat', 'guitar'),
                        'repeat' => __('Repeat', 'guitar'),
                        'repeat-x' => __('Repeat-X', 'guitar'),
                        'repeat-y' => __('Repeat-Y', 'guitar'),
                    )
                ),
                'bg_position_x' => array(
                    'label' => __('Position', 'guitar'),
                    'desc' => __('Select the horizontal background position', 'guitar'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'left' => __('Left', 'guitar'),
                        'center' => __('Center', 'guitar'),
                        'right' => __('Right', 'guitar'),
                    )
                ),
                'bg_position_y' => array(
                    'label' => __('', 'guitar'),
                    'desc' => __('Select the vertical background position', 'guitar'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'top' => __('Top', 'guitar'),
                        'center' => __('Center', 'guitar'),
                        'bottom' => __('Bottom', 'guitar'),
                    )
                ),
                'bg_size' => array(
                    'label' => __('Size', 'guitar'),
                    'desc' => __('Select the background size', 'guitar'),
                    'help' => __('<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'guitar'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'auto' => __('Auto', 'guitar'),
                        'cover' => __('Cover', 'guitar'),
                        'contain' => __('Contain', 'guitar'),
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
                                'help' => __('', 'guitar'),
                                'desc' => __('Select the overlay color', 'guitar'),
                                'type' => 'rgba-color-picker',
                                'value' => 'rgba(0,0,0,0.55)'
                            ),
                        ),
                    ),
                ),
            ),
            'bgcolor' => array(
                'background_color' => array(
                    'label' => __('', 'guitar'),
                    'help' => __('', 'guitar'),
                    'desc' => __('Select the background color', 'guitar'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            )
        ),
        'show_borders' => false,
    ),
    'txtcolor' => array(
        'label' => __('Text Color', 'guitar'),
        'type' => 'color-picker',
        'desc' => 'You can change color also',
    ),
    'txt_align' => array(
        'label' => __('Text Alignment', 'guitar'),
        'desc' => __('Select the alignment for your column', 'guitar'),
        'attr' => array('class' => 'fw-checkbox-float-left'),
        'type' => 'radio',
        'choices' => array(
            'none' => __('None', 'guitar'),
            'text-left' => __('Left', 'guitar'),
            'text-center' => __('Center', 'guitar'),
            'text-right' => __('Right', 'guitar'),
        ),
        'value' => 'none'
    ),
    'animation' => array(
        'label' => __('Animation', 'guitar'),
        'type' => 'select',
        //'value' => 'c',
        'desc' => __('Add animation when your site fast load on browser.', 'guitar'),
        'choices' => array(
            '' => '---',
            array(
                'attr' => array(
                    'label' => __('Attention Effects', 'guitar'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'guitar'),
                    'bounce' => __('bounce', 'guitar'),
                    'flash' => __('flash', 'guitar'),
                    'pulse' => __('pulse', 'guitar'),
                    'rubberBand' => __('rubberBand', 'guitar'),
                    'shake' => __('shake', 'guitar'),
                    'swing' => __('swing', 'guitar'),
                    'tada' => __('tada', 'guitar'),
                    'wobble' => __('wobble', 'guitar'),
                    'jello' => __('jello', 'guitar'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Bouncing Effects', 'guitar'),
                ),
                'choices' => array(
                    'bounceIn' => __('bounceIn', 'guitar'),
                    'bounceInDown' => __('bounceInDown', 'guitar'),
                    'bounceInLeft' => __('bounceInLeft', 'guitar'),
                    'bounceInRight' => __('bounceInRight', 'guitar'),
                    'bounceInUp' => __('bounceInUp', 'guitar'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Fading Effects', 'guitar'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'guitar'),
                    'fadeInDown' => __('fadeInDown', 'guitar'),
                    'fadeInLeft' => __('fadeInLeft', 'guitar'),
                    'fadeInRight' => __('fadeInRight', 'guitar'),
                    'fadeInUp' => __('fadeInUp', 'guitar'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Flippers', 'guitar'),
                ),
                'choices' => array(
                    'flip' => __('flip', 'guitar'),
                    'flipInX' => __('flipInX', 'guitar'),
                    'flipInY' => __('flipInY', 'guitar'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Rotating Effect', 'guitar'),
                ),
                'choices' => array(
                    'rotateIn' => __('rotateIn', 'guitar'),
                    'rotateInDownLeft' => __('rotateInDownLeft', 'guitar'),
                    'rotateInDownRight' => __('rotateInDownRight', 'guitar'),
                    'rotateInUpLeft' => __('rotateInUpLeft', 'guitar'),
                    'rotateInUpRight' => __('rotateInUpRight', 'guitar'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Zoom Effect', 'guitar'),
                ),
                'choices' => array(
                    'zoomIn' => __('zoomIn', 'guitar'),
                    'zoomInDown' => __('zoomInDown', 'guitar'),
                    'zoomInLeft' => __('zoomInLeft', 'guitar'),
                    'zoomInRight' => __('zoomInRight', 'guitar'),
                    'zoomInUp' => __('zoomInUp', 'guitar'),
                    'hinge' => __('hinge', 'guitar'),
                    'rollIn' => __('rollIn', 'guitar'),
                ),
            ),
        ),
    ),
    'tablet' => array(
        'label' => __('Responsive Layout for Tablet', 'guitar'),
        'desc' => __('Choose the responsive tablet display for this column', 'guitar'),
        'help' => __('Use this option in order to control how this column behaves on tablets (and devices with the resoution between 768px - 990px). Note that on phones all the columns are 1/1 by default.', 'guitar'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Automatically inherit default layout', 'guitar'),
            'fw-col-sm-2' => __('Make it a 1/6 column', 'guitar'),
            'fw-col-sm-3' => __('Make it a 1/4 column', 'guitar'),
            'fw-col-sm-4' => __('Make it a 1/3 column', 'guitar'),
            'fw-col-sm-6' => __('Make it a 1/2 column', 'guitar'),
            'fw-col-sm-8' => __('Make it a 2/3 column', 'guitar'),
            'fw-col-sm-9' => __('Make it a 3/4 column', 'guitar'),
            'fw-col-sm-12' => __('Make it a 1/1 column', 'guitar'),
        )
    ),
    'offset' => array(
        'label' => __('Layout Offset', 'guitar'),
        'desc' => __('Move columns to the right using .fw-col-md-offset-* classes ', 'guitar'),
        'help' => __('These classes increase the left margin of a column by * columns. For example, .fw-col-md-offset-4 moves .fw-col-md-4 over four columns.', 'guitar'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Nothing', 'guitar'),
            'fw-col-sm-offset-1' => __('moves 1 column', 'guitar'),
            'fw-col-sm-offset-2' => __('moves 2 column', 'guitar'),
            'fw-col-sm-offset-3' => __('moves 3 column', 'guitar'),
            'fw-col-sm-offset-4' => __('moves 4 column', 'guitar'),
            'fw-col-sm-offset-5' => __('moves 5 column', 'guitar'),
            'fw-col-sm-offset-6' => __('moves 6 column', 'guitar'),
        )
    ),
    'class' => array(
        'label' => __('Custom Class', 'guitar'),
        'desc' => __('Enter custom CSS class', 'guitar'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'guitar'),
        'type' => 'text',
        'value' => '',
    ),
);
