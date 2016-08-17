<?php
/**
 * header.php
 *
 * The header for the theme.
 */
$menu_logo = guitar_get_option('menu_logo');
$float_logo = guitar_get_option('float_logo');
$contacts = guitar_get_option('contacts');
$socials = guitar_get_option('socials');
?>


<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
           <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
       <![endif]-->
        <nav>
            <div class="container">
                <div class="nav-top clearfix">
                    <div class="logo">
                        <a  href="<?php echo home_url('/') ?>" class="navbar-brand"><img src="<?php echo $menu_logo['url']; ?>" alt="<?php bloginfo('name'); ?>" /></a>
                    </div>

                    <div class="head_top_social pull-right">
                        <ul class="list-inline">
                            <?php foreach ($contacts as $contact) { ?>
                            <li><a target="_blank" href="<?php echo esc_url($contact['link']); ?>"><i class="<?php echo esc_attr($contact['icon']); ?>"></i><?php echo esc_attr($contact['title']); ?></a></li>
                            <?php } ?>
                            <li class="top_socail">
                                <?php foreach ($socials as $social) { ?>
                                    <a target="_blank" href="<?php echo esc_url($social['link']); ?>"><i class="<?php echo esc_attr($social['icon']); ?>"></i></a>
                                <?php } ?>
                            </li>

                        </ul>
                    </div>

                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                    </button>

                </div>
            </div>

            <div class="main-nav navbar-collapse collapse">
                <div class="container">
                    <div class="minilogo">
                        <a  href="<?php echo home_url('/') ?>" class="navbar-brand"><img src="<?php echo $float_logo['url']; ?>" alt="<?php echo esc_attr($contact['title']); ?>" /></a>
                    </div>
                    <ul>
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'menu_class' => 'nav nav-justified',
                            'fallback_cb' => 'guitar_xs_navwalker::fallback',
                            'walker' => new guitar_xs_navwalker())
                        );
                        ?>
                    </ul>

                </div>
            </div>
        </nav>





