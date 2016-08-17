<?php
if (!defined('FW'))
    die('Forbidden');

$term_id = (int) $atts['category'];


if ($term_id == 0) {
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'fw-portfolio',
        'orderby' => 'date'
    );
}
?>
<div class="main_portfolio">
    <div class="main_portfolio_content_area">
        <div class="main_portfolio_content">
            <div class="single_portfolio_content">
                <?php
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_content_item">                                           
                            <?php
                            $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), '');
                            $img = fw_resize($thumbnail[0], 360, 265);
                            ?>
                            <img src="<?php echo $img; ?>" alt="<?php the_title(); ?>" />
                            <div class="single_portfolio_overlay">
                                <a href="<?php the_permalink(); ?>"><i class="fa fa-folder"></i><?php echo substr(get_the_title(), 0, 62); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
