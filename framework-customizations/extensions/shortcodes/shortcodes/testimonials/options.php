<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'testimonials' => array(
        'label' => __('Testimonials', 'guitar'),
        'popup-title' => __('Add/Edit Testimonial', 'guitar'),
        'desc' => __('Here you can add, remove and edit your Testimonials.', 'guitar'),
        'type' => 'addable-popup',
        'add-button-text' => 'Add Testimonal',
        'template' => '{{=name}}',
        'popup-options' => array(
            'image' => array(
                'label' => __('Image', 'guitar'),
                'desc' => __('Upload the person image', 'guitar'),
                'type' => 'upload'
            ),
            'name' => array(
                'label' => __('Name', 'guitar'),
                'desc' => __('Enter the Name of the Person', 'guitar'),
                'type' => 'text',
                'value' => 'Andreea Koronikova'
            ),
            'title' => array(
                'label' => __('Title', 'guitar'),
                'desc' => __('Enter the job title of the Person', 'guitar'),
                'type' => 'text',
                'value' => 'Music Teacher'
            ),
            'content' => array(
                'label' => __('Quote', 'guitar'),
                'desc' => __('Enter the testimonial here', 'guitar'),
                'value' => __('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem', 'guitar'),
                'type' => 'textarea',
                'teeny' => true,
            )
        )
    ),
);
