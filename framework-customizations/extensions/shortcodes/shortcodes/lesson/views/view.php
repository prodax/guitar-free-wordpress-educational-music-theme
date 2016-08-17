<?php
if (!defined('FW')) {
    die('Forbidden');
}

$title = $atts['title'];
$subtitle = $atts['subtitle'];
$lessons = $atts['lessons'];
?>
<div class="main_lessons">
    <div class="col-sm-8 col-sm-offset-1">
        <div class="main_lessons_area sections">
            <div class="lesson_title">
                <?php if (!empty($title)) { ?>
                    <h1><?php echo wp_kses_post($title); ?></h1>
                <?php } ?>

                <?php if (!empty($subtitle)) { ?>
                    <p><?php echo wp_kses_post($subtitle); ?></p>
                <?php } ?>
            </div>
            <div class="lesson_content">
                <ul class="lessonsborder">
                    <?php foreach ($lessons as $lesson): ?>
                        <?php if (!empty($lesson)) { ?>
                            <li> <i class="<?php echo esc_attr($lesson['icon']); ?>"></i> <a href="<?php echo esc_url($lesson['link']); ?>"><?php echo esc_attr($lesson['message']); ?></a></li>
                        <?php }; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>



