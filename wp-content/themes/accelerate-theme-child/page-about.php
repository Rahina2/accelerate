
/**
 * The template for displaying the about page
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->



<section class="featured-work">
	 <div class="site-content">
		 <h4 class="homepage-featured-work-title">Featured Work</h4>
		 <ul class="homepage-featured-work">
				<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				 <?php while ( have_posts() ) : the_post();
				 $image1 = get_field("image1");
				 $size = "medium";
				 ?>
				 <a href="<?php the_permalink(); ?>">
				 <li class="individual-featured-work">
					 <figure>
						 <?php echo wp_get_attachment_image($image1, $size); ?>
					 </figure>
					 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				 </li>
				 </a>
				 <?php endwhile; ?>
				<?php wp_reset_query(); ?>
			 </ul>
	 </div>
	</section>

	<section class="services">
	 <div class="site-content">
		 <h4 class="homepage-services-title">Our Services</h4>
		 <ul class="homepage-services">
				<?php query_posts('posts_per_page=4&post_type=about'); ?>
				 <?php while ( have_posts() ) : the_post();
				 $image1 = get_field("image1");
				 $image2 = get_field('image2');
				 $image3 = get_field('image3');
				 $image4 = get_field('image4');
				 $size = "medium";
				 $contentStrategy= get_field('content_strategy');
				 $influencerMapping = get_field('influencer_mapping');
				 $socialMediaStrategy = get_field('social_media_strategy');
				 $designDevelopment = get_field('design_and_development');
				 $contentStrategyText= get_field('content_strategy_text');
				 $influencerMappingText = get_field('influencer_mapping_text');
				 $socialMediaStrategyText = get_field('social_media_strategy_text');
				 $designDevelopmentText = get_field('design_and_evelopment_text');
				  ?>