<?php
if (!defined('FW')) {
    die('Forbidden');
}
$icon = $atts['icon'];
$title = $atts['title'];
$subtitle = $atts['subtitle'];
$btn_1 = $atts['btn_txt_1'];
$btn_2 = $atts['btn_txt_2'];
?>

<div class="main_callus">
    <div class="col-sm-6 col-xs-12">
        <div class="single_callus">
            <div class="skypeicon_left">
                <?php if (!empty($icon)) { ?>
                    <i class="<?php echo esc_attr($icon); ?>"></i>
                <?php } ?>
            </div>
            <div class="skypeicon_right">

                <?php if (!empty($title)) { ?>
                    <h2><?php echo wp_kses_post($title); ?></h2>
                <?php } ?>

                <?php if (!empty($subtitle)) { ?>
                    <h3><?php echo $subtitle; ?></h3>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xs-12">
        <div class="single_callus_right">
            <a href="" class="btn btn-larg"><?php echo $btn_1; ?></a>
            <a href="" class="btn btn-larg"><?php echo $btn_2; ?></a>
        </div>
    </div>
</div>