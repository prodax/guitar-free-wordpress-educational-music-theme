<?php
/**
 * content.php
 *
 * The default template for displaying content.
 */
$display_settings = array();
if (defined('FW')) {
    $display_settings = fw_get_db_settings_option('blog_display_settings');
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Article header -->
    <header class="entry-header single-header">
        <?php if (has_post_thumbnail() && !post_password_required()) :
            ?>
            <figure class="entry-thumbnail">
                <?php
                $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), '');
                $img = fw_resize($thumbnail[0], 1140, 450);
                ?>
                <img src="<?php echo $img;?>" alt="<?php the_title();?>" />
            </figure>
        <?php endif;
        ?>

        <h1 class="blog-heading"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <?php
        guitar_post_meta();
        ?>
    </header> <!-- end entry-header -->

    <!-- Article content -->
    <div class="entry-content">
        <?php
        if (is_search()) {
            the_excerpt();
        } else {
            the_content(__('Continue Reading &rarr;', 'guitar'));

            wp_link_pages();
        }
        ?>
    </div> <!-- end entry-content -->

</article>