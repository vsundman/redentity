<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id #maincontentcontainer div and all content after.
 * There are also four footer widgets displayed. These will be displayed from
 * one to four columns, depending on how many widgets are active.
 *
 * @package Prism
 * @since Prism 1.0
 */
?>

<div id="footercontainer">

    <?php
    // Count how many footer sidebars are active so we can work out how many containers we need
    $footerSidebars = 0;
    for ($x = 1; $x <= 4; $x++) {
        if (is_active_sidebar('sidebar-footer' . $x)) {
            $footerSidebars++;
        }
    }

    // If there's one or more one active sidebars, create a row and add them
    if ($footerSidebars > 0) {
        ?>
        <footer class="site-footer row" role="contentinfo">
            <?php
            // Work out the container class name based on the number of active footer sidebars
            $containerClass = "grid_" . 12 / $footerSidebars . "_of_12";

            // Display the active footer sidebars
            for ($x = 1; $x <= 4; $x++) {
                if (is_active_sidebar('sidebar-footer' . $x)) {
                    ?>
                    <div id="<?php echo 'footer-widget' . $x; ?>" class="col <?php echo $containerClass ?>">
                        <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar('sidebar-footer' . $x); ?>
                        </div>
                    </div> <!-- /.col.<?php echo $containerClass ?> -->
            <?php }
        }
        ?>
        </footer> <!-- /.site-footer.row -->
<?php } ?>

    <div class="footer-wrap clearfix">
        <div class="footer-wrap-container">
        <?php if (get_theme_mod('prism_footer_footer_text') == '') { ?>
            <div class="smallprint">
                <p>
                    <?php esc_html_e('&copy; Copyright &middot; ','prism'); ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                </p>
            </div>
        <?php } else { ?>   
                    <div class="smallprint"><?php echo esc_html(get_theme_mod('prism_footer_footer_text')); ?></div>
        <?php } ?> 
                    <div class="footer-extras">
                         <p>
                   <a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'AuthorURI' ); ?>">
                            <?php _e('Prism WordPress theme by IdeaBox','prism'); ?>
                    </a>
                </p>
                    </div> 
        </div>
    </div> <!-- /.footer-wrap -->
</div> <!-- /.footercontainer -->

</div> <!-- /.#wrapper.hfeed.site -->

<?php wp_footer(); ?>
</body>

</html>
