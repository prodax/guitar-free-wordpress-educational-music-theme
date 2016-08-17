<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'blog_settings' => array(
        'title' => __('Blog Settings', 'guitar'),
        'type' => 'tab',
        'options' => array(
            'header-posts-box' => array(
                'title' => __('Posts Header', 'guitar'),
                'type' => 'box',
                'options' => array(
                    'general_posts_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'posts_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Blog Title',
                                        'desc' => 'Add your blog hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => __('Header Image', 'guitar'),
                                        'desc' => __('Upload a header image', 'guitar'),
                                        'help' => __("This default header image will be used for all your posts.", 'guitar'),
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
            'blog' => array(
                'title' => __('Blog Settings', 'guitar'),
                'type' => 'box',
                'options' => array(
                    'blog_display_settings' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'post_date' => array(
                                'label' => __('Post Date', 'guitar'),
                                'desc' => __('Show post date?', 'guitar'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'guitar')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'guitar')
                                ),
                                'value' => 'yes',
                            ),
                            'post_author' => array(
                                'label' => __('Post Author', 'guitar'),
                                'desc' => __('Show post author?', 'guitar'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'guitar')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'guitar')
                                ),
                                'value' => 'yes',
                            ),
                            'post_categories' => array(
                                'label' => __('Post Categories', 'guitar'),
                                'desc' => __('Show post categories?', 'guitar'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'guitar')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'guitar')
                                ),
                                'value' => 'yes',
                            ),
                            'post_comment' => array(
                                'label' => __('Post Comment', 'guitar'),
                                'desc' => __('Show post Comment?', 'guitar'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'guitar')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'guitar')
                                ),
                                'value' => 'yes',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
