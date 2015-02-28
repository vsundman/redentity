<?php
/**
 * The template for displaying featured posts on Front Page 
 *
 * @package Prism
 * @since Prism 1.0
 */
?>

<?php
// Start a new query for displaying featured posts on Front Page

if (get_theme_mod('prism_front_featured_posts_check')) {
    $var = get_theme_mod('prism_front_featured_posts_cat');

    // if no category is selected then return 0 
    $featured_cat_id = max((int) $var, 0);

    $featured_post_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'cat' => $featured_cat_id,
        'post__not_in' => get_option('sticky_posts'),
    );
    $featuredposts = new WP_Query($featured_post_args);
    ?>

    <div class="home-post-title-area" id="post-title">
            <div class="home-post-title">
                 <?php if ( get_theme_mod('prism_post_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('prism_post_title')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Recent Blogs', 'prism') ?></h3>
                           <?php } ?>
            </div>
        </div>
    <div id="front-featured-posts">

        <div id="featured-posts-container" class="row">

            <div id="featured-posts" class="col grid_12_of_12">
                
                <?php if ($featuredposts->have_posts()) : $i = 1; ?>

                    <?php while ($featuredposts->have_posts()) : $featuredposts->the_post(); ?>

                        <div class="col grid_4_of_12 home-featured-post">

                            <div class="featured-post-content">

                                <a href="<?php the_permalink(); ?>">

                                    <?php the_post_thumbnail('post_feature_thumb'); ?>

                                </a>

                            </div> <!--end .featured-post-content -->

                            <a href="<?php the_permalink(); ?>">

                                <h3 class="home-featured-post-title"><?php the_title(); ?></h3>

                            </a>
                            <span class="post-meta"><small><?php the_time(esc_html('F jS, Y','prism')); ?> <!-- by <?php the_author() ?> --></small></span>
                            <?php the_excerpt(); ?>

                        </div><!--end .home-featured-post-->

                        <?php $i+=1; ?>

                    <?php endwhile; ?>

                <?php else : ?>

                    <h2 class="center"><?php esc_html_e('Not Found', 'prism'); ?></h2>
                    <p class="center"><?php esc_html_e('Sorry, but you are looking for something that is not here', 'prism'); ?></p>
                    <?php get_search_form(); ?>
                <?php endif; ?>

            </div> <!-- /#featured-posts -->

        </div> <!-- /#featured-posts-container -->

    </div> <!-- /#front-featured-posts -->

<?php
} // end Featured post query ?>