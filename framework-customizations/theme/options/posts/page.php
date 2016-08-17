<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'main' => array(
        'title' => false,
        'type' => 'box',
        'options' => array(
            'Page' => array(
                'title' => __('Page Options', 'guitar'),
                'type' => 'tab',
                'options' => array(
                    'page_sections' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'xs_page_section' => array(
                                'label' => __('This page is a section:', 'guitar'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'on',
                                    'label' => __('Yes', 'guitar')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'guitar')
                                ),
                                'value' => 'no',
                                'desc' => __('If this a <b>One page Section</b>,  set this field to <b>yes</b>. And if this page is not section, set it to <b>no</b>', 'guitar'),
                                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('If this page for one page section. set yes ', 'guitar'), __('For One page always will be <b>yes</b>', 'guitar')
                                ),
                            )
                        ),
                        'choices' => array(
                            'on' => array(
                                'hide_title_from_menu' => array(
                                    'type' => 'switch',
                                    'label' => __('Hide title from menu ?', 'guitar'),
                                    'right-choice' => array(
                                        'value' => 'yes',
                                        'label' => __('Yes', 'guitar')
                                    ),
                                    'left-choice' => array(
                                        'value' => 'no',
                                        'label' => __('No', 'guitar')
                                    ),
                                    'value' => 'no',
                                    'desc' => __('If you dont want to add title(or this page) on menu. you can set yes. if you set yes. this menu will be hide in menu.', 'guitar'),
                                ),
                            ),
                            'no' => array()
                        ),
                        'show_borders' => false,
                    ),
                ),
            ),
        ),
    ),
);


