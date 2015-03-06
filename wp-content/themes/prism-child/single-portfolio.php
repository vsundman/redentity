<?php
/**
 * The Template for displaying all single  portfolio posts.
 *
 * @package Prism
 * @since Prism 1.0
 */

get_header(); ?>

<div id="maincontentcontainer">

	<div id="primary" class="site-content row" role="main">

		<div class="col grid_8_of_12">

            <div class="main-content">
                            
				<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class();//this adds extra classes to the post ?>>

			<div class="entry-content">
				<button onclick="history.go(-1);">Go Back</button>

				<?php 
					if( is_singular() ){	
						?> <h1><?php the_title(); ?> </h1>
						<?php the_content();
					
						
					}else{
						the_excerpt();
					}
				?> 
				
				

			</div>
					
		</article><!-- end post -->


				<?php endwhile; // end of the loop. ?>
                                
                            </div> <!-- /.main-content -->

			</div> <!-- /.col.grid_8_of_12 -->

	</div> <!-- /#primary.site-content.row -->

</div> <!-- /#maincontentcontainer -->

<?php get_footer(); ?>
