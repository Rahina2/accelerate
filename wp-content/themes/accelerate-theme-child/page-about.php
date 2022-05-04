<?php
/**
 * The template for displaying about page
 
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
			 $cS = get_field('content_strategy');
			 $cSt = get_field('content_strategy_text');
			 $iM = get_field('influencer_mapping_copy');
			 $iMt = get_field('influencer_mapping_text');
			 $sMS = get_field('social_media_strategy');
			 $sMSt = get_field('social_media_strategy_text');
			 $dAd= get_field('design_and_development');
			 $dAdt = get_field('design_and_development_text');
			 $hAt = get_field('hero_area_text');
			 $image1 = get_field('image1');
			 $image2 = get_field('image2');
			 $image3 = get_field('image3');
			 $image4 = get_field('image4');
			 $size = "large"?>

						<aside class="hero-services-info">
							<p><?php echo $hAt; ?></p>
						</aside>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

				<div class="about-services" role="main">
					<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				</div><!-- .main-content -->
			<div class="about-main-all">
				<article class="about-main">
					<div class="about-row">
						<aside class="about-images">
							<?php if($image1){
								echo wp_get_attachment_image( $image1, $size );
								} ?>
						</aside>
						<aside class="about-info">
							<h2><?php echo $cS; ?></h2>
							<p><?php echo $cSt; ?></p>
						</aside>
					</div>

					<div class="about-row">
						<aside class="about-info">
							<h2><?php echo $iM; ?></h2>
							<p><?php echo $iMt; ?></p>
						</aside>

						<aside class="about-images">
							<?php if($image2){
								echo wp_get_attachment_image( $image2, $size );
								} ?>
						</aside>
					</div>

					
					<div class="about-row">
						<aside class="about-images">
							<?php if($image3){
								echo wp_get_attachment_image( $image3, $size );
								} ?>
						</aside>
						<aside class="about-info">
							<h2><?php echo $sMS ; ?></h2>
							<p><?php echo $sMSt; ?></p>
						</aside>
					</div>

					<div class="about-row">
					<aside class="about-info">
							<h2><?php echo $dAd; ?></h2>
							<p><?php echo $dAdt; ?></p>
						</aside>

						<aside class="about-images">
							<?php if($image4){
								echo wp_get_attachment_image( $image4, $size );
								} ?>
						</aside>
					</div>	
				</article>
			</div>	
		<div class="about-contact"><h4>Intrested in working with us? <span><a class="button" href="<?php echo site_url('/contact/') ?>">contact us</a></span></h4></div>
<?php get_footer(); ?>

