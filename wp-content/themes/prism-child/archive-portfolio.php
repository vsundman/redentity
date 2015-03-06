<?php
/**
 * The portfolio template file.
 *
 * @package Prism
 * @since Prism 1.0
 */
get_header();
?>

<div id="maincontentcontainer">

    <div id="primary" class="site-content row" role="main">

        <div class="col grid_8_of_12">
           

            <div class="main-content">
  <section class="filter">
                    <h3>Filter by Type of Work:</h3>
                    <ul>
                        <?php wp_list_categories(array(
                            'taxonomy' => 'typework',
                            'orderby' => 'count',
                            'title_li' => '',
                            'show_option_none' => 'No work types',

                        ) ); ?>
                    </ul>
                </section>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
           
                        
              
          
        <article id="post-<?php the_ID(); ?>" <?php post_class();//this adds extra classes to the post ?>>

            <h2 class="entry-title"> 
                <a href="<?php the_permalink(); ?>"> 
                    <?php the_title(); ?> 
                </a>
            </h2>

            <div class="entry-content">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </a>
                <?php the_excerpt(); ?>
            </div>

        </article><!-- end post -->
                    <?php endwhile; ?>

                <?php endif; // end have_posts() check ?>

            </div> <!-- /.main-content -->

        </div> <!-- /.col.grid_8_of_12 -->
        <?php get_sidebar(); ?>

    </div> <!-- /#primary.site-content.row -->

</div> <!-- /#maincontentcontainer -->

<?php get_footer(); ?>
