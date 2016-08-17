<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Include static files: javascript and css for backend
 */
wp_enqueue_style('startuploading-theme.css', GUITAR_CSS . '/xs_admin.css', null, GUITAR_VERSION);
//wp_enqueue_style('xs-iconfonts.css', GUITAR_CSS . '/iconfont.css', null, GUITAR_VERSION);
