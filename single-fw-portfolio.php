<?php
/**
 * single-fw-portfolio.php
 *
 * The template for displaying single posts.
 */
?>

<?php get_header(); ?>
<div class="blog" role="main">
    <?php get_template_part('content/content', 'portfolio-header')?>
    <div class="main-content container blog-wrap single-blog">
        <div class="col-sm-12">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content/portfolio-content', get_post_format()); ?>
                <?php guitar_post_tag(); ?>
                <?php guitar_post_nav(); ?>

                <?php
                if (defined('FW')) {
                    if ($display_settings['post_comment'] != 'no') :
                        comments_template();
                    endif;
                }else {
                    comments_template();
                }
                ?>
            <?php endwhile; ?>
        </div> <!-- end main-content -->

    </div> 
</div> <!-- end main-content -->
<?php get_footer(); ?>