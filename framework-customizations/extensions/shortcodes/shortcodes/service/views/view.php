<?php
if (!defined('FW')) {
    die('Forbidden');
}
$services = $atts['services'];
$message = $atts['message'];
?>

<div class="main_service_area sections text-center">
    <?php foreach ($services as $service): ?>
        <div class="col-sm-4">
            <div class="single_service">
                <div class="single_service_icon">
                    <?php if ($service['icon']) { ?>
                        <i class="<?php echo esc_attr($service['icon']); ?>"></i>
                    <?php } ?>
                </div>

                <?php if ($service['message']) { ?>
                    <h3><?php echo wp_kses_post($service['message']); ?></h3>
                <?php } ?>
                <div class="separator"></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


