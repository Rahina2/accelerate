<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
                <h1>  404 page</h1>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->


	<aside class="widget widget_search">
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="search" />
					<input type="submit" id="searchsubmit" value="" />
				</form>
			</aside>

			<div class="about-contact"><h4>oops this page is nowhere to be found :) <span><a class="button" href="<?php echo site_url('/case-studies/') ?>">View our work</a></span></h4></div>

	</section>

	
<?php get_footer();