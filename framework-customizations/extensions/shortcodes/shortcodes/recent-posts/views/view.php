<?php
if (!defined('FW')) {
    die('Forbidden');
}

$term_id = (int) $atts['category'];


if ($term_id == 0) {
    $argss = array(
        'posts_per_page' =>1,
        'post_type' => 'post',
        'orderby' => 'date'
    );
    $args = array(
        'posts_per_page' => 3,
        'offset'=> 1,
        'post_type' => 'post',
        'orderby' => 'date'
    );
} 

$querys = new WP_Query($argss);
$query = new WP_Query($args);
?>
<div class="main_news">
    <div class="main_news_content_area">
        <div class="main_news_content">
            <div class="col-sm-5 ">
                <?php if ($querys->have_posts()) : ?>
                    <?php while ($querys->have_posts()) : $querys->the_post(); ?>
                        <div class="single_news_content_left">
                            <div class="news_content_left_thumbnail">
                                <?php the_post_thumbnail('recent_post', array('class' => 'img-responsive')); ?>
                            </div>
                            <div class="news_content_left_content">
                                <a href="<?php the_permalink(); ?>"><p class="subtitle"><?php echo substr(get_the_title(), 0, 90); ?></p></a>
                                <div class="separator2"></div>
                                <p><?php echo substr(get_the_excerpt(), 0, 235); ?>...</p>

                                <div class="news_content_left_bottom">
                                    <a href="<?php the_permalink(); ?>"><i class="fa fa-folder"></i><?php the_category(','); ?></a>
                                    <a href="" class="news_right_icon"><i class="fa fa-folder"></i></a>
                                </div>
                            </div>

                        </div>
                        <?php
                    endwhile;

                else :
                    // If no content, include the "No posts found" template.
                    get_template_part('content', 'none');

                endif;
                ?>
            </div>
            <div class="col-sm-7 col-xs-12">
                <div class="news_right_content">
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="single_news_right_content">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3 no-padding">
                                        <div class="single_right_img">
                                            <?php the_post_thumbnail('recent_post', array('class' => 'img-responsive')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 no-padding">
                                        <div class="single_right_content">
                                            <a href="<?php the_permalink(); ?>"><p class="subtitle"><?php echo substr(get_the_title(), 0, 90); ?></p></a>
                                            <a href="<?php the_permalink(); ?>"><i class="fa fa-folder"></i><?php the_category(','); ?></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 no-padding">
                                        <div class="single_icon_area text-center">
                                            <div class="single_icon_content">
                                                <i class="fa fa-comments"></i>
                                                <p href="<?php the_permalink(); ?>"><?php echo get_comments_number($post_id); ?></p>
                                            </div>
                                            <div class="single_icon_content single_icon_content_calander">
                                                <i class="fa fa-calendar"></i>
                                                <p href="<?php the_permalink(); ?>"><?php the_time('m/d'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;

                    else :
                        // If no content, include the "No posts found" template.
                        get_template_part('content', 'none');

                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_reset_query(); ?>