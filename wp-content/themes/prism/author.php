<?php
/**
 * The template for displaying an archive page for Categories.
 *
 * @package Prism
 * @since Prism 1.0
 */

get_header(); ?>

<div id="maincontentcontainer">

	<div id="primary" class="site-content row" role="main">

		<div class="col grid_8_of_12">
                    
                    <div class="main-content">

			<?php if ( have_posts() ) : ?>

				<?php
				// Queue the first post, that way we know what author we're dealing with (if that is the case).
				// We reset this later so we can run the loop properly with a call to rewind_posts().
				the_post();
				?>

				<header class="archive-header">
					<h1 class="archive-title"><?php printf( esc_html__( 'Author Archives: %s', 'prism' ), '<span class="vcard">' . get_the_author() . '</span>' ); ?></h1>
				</header><!-- .archive-header -->

				<?php // If a user has filled out their description, show a bio on their entries.
				if ( get_the_author_meta( 'description' ) ) {
					get_template_part( 'author-bio' );
				} ?>

				<?php
				// Since we called the_post() above, we need to rewind the loop back to the beginning that way we can run the loop properly, in full.
				rewind_posts();
				?>

				<?php // Start the Loop ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php prism_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

			<?php endif; // end have_posts() check ?>

                    </div> <!-- /.main-content -->
                    
		</div> <!-- /.col.grid_8_of_12 -->
		<?php get_sidebar(); ?>

	</div> <!-- /#primary.site-content.row -->

</div> <!-- /#maincontentcontainer -->

<?php get_footer(); ?>
