<?php

get_header();
?>

<div id="maincontentcontainer">

    <div id="primary" class="site-content row" role="main">

        <div class="col grid_8_of_12">

            <div class="main-content">

                <?php if (have_posts()) : ?>

                    <?php // Start the Loop ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('content', 'page'); ?>
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if (comments_open() || '0' != get_comments_number()) {
                            comments_template('', true);
                        }
                        ?>
                    <?php endwhile; ?>

                <?php endif; // end have_posts() check ?>

            </div> <!-- /.main-content -->

        </div> <!-- /.col.grid_8_of_12 -->
        <?php get_sidebar(); ?>

    </div> <!-- /#primary.site-content.row -->

</div> <!-- /#maincontentcontainer -->

<?php get_footer(); ?>
