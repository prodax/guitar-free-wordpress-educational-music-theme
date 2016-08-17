<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$sliders = $atts['sliders'];
?>
<div class="col-sm-8 col-sm-offset-4 home-owl-controls">
    <div class="main_home_content text-right">
        <?php foreach ($sliders as $slider): ?>
            <div class="single_home">
                <div class="main_home wow fadeInUp" data-wow-duration="700ms">

                    <?php if ($slider['title']) { ?>
                        <h1><?php echo wp_kses_post($slider['title']); ?></h1>
                    <?php } ?>

                    <?php if ($slider['subtitle']) { ?>
                        <h1 class="subtitle"><?php echo esc_attr($slider['subtitle']); ?></h1>
                    <?php } ?>

                    <div class="video_play_icon">
                        <a href="<?php echo esc_url($slider['video']); ?>" class="youtube-media"><i class="fa fa-play-circle-o"></i></a>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
