<?php
/**
 * The template for displaying case studies
 *

 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('site_link');
			$image1 = get_field('image1');
			$image2 = get_field('image2');
			$image3 = get_field('image3');
			$size = "large"?>
		<article class="case-study">
			<aside class="case-study-info">
				<h2><?php the_title(); ?></h2>
				<h4><?php echo $services; ?></h4>
				<h5>Client: <?php echo $client; ?></h5>
				<?php the_content(); ?>
				<p class="read-more-link"><stronge><a href="<?php echo $link; ?>">Visit Live Site ›</a></strong></p>
			</aside>
			<aside class="case-study-images">
				<?php if($image1){
					echo wp_get_attachment_image( $image1, $size );
					} ?>

					<?php if($image2){
						echo wp_get_attachment_image( $image2, $size );
						} ?>

					<?php if(	$image3){
						echo wp_get_attachment_image( $image3, $size );
						} ?>
			</aside>
		</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->



	</div><!-- #primary -->

	<nav id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to posts</span></a></div>
	</nav>
<?php get_footer(); ?>
