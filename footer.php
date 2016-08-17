<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
$footer_heading = guitar_get_option('footer_heading');
$footer_socials = guitar_get_option('footer_socials');
?>

<section id="footer_widget" class="footer_widget">
    <div class="container">
        <div class="row">
            <div class="main_widget">


                <div class="row">
                    <div class="col-sm-4">
                        <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                            <?php dynamic_sidebar('footer-2'); ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                            <?php dynamic_sidebar('footer-3'); ?>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>





<footer id="footer" class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="copyright_text text-center">
                    <p class=" wow fadeInRight" data-wow-duration="1s"><?php echo $footer_heading;?></p>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- START SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>



<?php wp_footer(); ?>
</body>
</html>