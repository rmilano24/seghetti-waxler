<?php
/*
Template Name: One Column
*/
get_header(); ?>

<header class="inner-hero" role="banner">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-7">
				<div class="hero-text">
					<span class="small-intro"><?php the_field('hero_small_text'); ?></span>
					<h1><?php the_field('hero_header'); ?></h1>
					<div class="seperator"></div>
					<p class="large"><?php the_field('hero_header_content'); ?></p>
				</div>
			</div>
		</div>
	</div>

</header>


<section class="two-col">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-12">
				<?php the_field('one_col_content'); ?>
			</div>

		</div>
	</div>

</section>

<section class="capabilities bg_blue">


	<div class="grid-container">
		<div class="grid-x grid-padding-x leadin">
			<span class="small-intro">Here’s what else we can help with</span>
			<h2>Other <b>Services</b></h2>
			<div class="seperator"></div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<?php
					 $args = array(
						 'post_type' => 'capabilities',
						 'posts_per_page' => 8
					 );
					 $my_capabilities = new WP_Query( $args );
					 if( $my_capabilities->have_posts() ) {
						 while( $my_capabilities ->have_posts() ) {
							 $my_capabilities->the_post();
					?>

					<div class="cell medium-6 large-3">
						<?php
								$image = get_field('thumbnail_image');
								if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
							<h4><?php the_title(); ?></h4>
							<div class="seperator"></div>
							<p><?php the_field('thumbnail_snippet'); ?></p>
							<a href="<?php the_field('link_to_service_page'); ?>">Learn More</a>
					</div>

					<?php
							}
						}
						else {
							echo 'There are currently no capabilities added.';
						}
					?>
				 <?php wp_reset_query(); ?>


		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x grid-padding-x cta">
			<a class="button" href="/services/">Learn More</a>
		</div>
	</div>

</section>

<section class="cta">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 medium-offset-2 cell"><h2>Ready to take the edge off?</h2></div>
  		<div class="small-12 medium-4 cell"><a href="/contact-us/" class="button">Get in touch</a></div>
		</div>
	</div>
</section>


<?php get_footer();
