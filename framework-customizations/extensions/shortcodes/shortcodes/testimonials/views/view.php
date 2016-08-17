<?php
if (!defined('FW')) {
    die('Forbidden');
}

$testimonials = $atts['testimonials'];
?>

<div class="main_testimonial_area text-center">
    <div class="main_testimonial_content">
        <?php foreach ($testimonials as $testimonial): ?>
            <div class="single_testimonial">
                <div class="single_test_thumbnail">
                    <?php if ($testimonial['image']) { ?>
                        <img class="img-circle img-responsive" src="<?php echo esc_url($testimonial['image']['url']); ?>" alt="<?php echo $testimonial['title']; ?>" />
                    <?php } ?>
                </div>
                <div class="single_test_content">

                    <?php if ($testimonial['content']) { ?>
                        <p><?php echo esc_attr($testimonial['content']); ?></p>
                    <?php } ?>

                    <div class="single_author_content">
                        <?php if ($testimonial['name']) { ?>
                            <h2><?php echo esc_attr($testimonial['name']); ?></h2>
                        <?php } ?>

                        <?php if ($testimonial['title']) { ?>
                            <p><?php echo esc_attr($testimonial['title']); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>