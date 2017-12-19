<?php
/*
Template Name: Services
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
					<p class="large"><?php the_field('hero_content'); ?></p>
				</div>
			</div>
		</div>
	</div>

</header>


<section class="services">
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

			<div class="grid-x grid-padding-x service-container">
				<div class="cell medium-6 service-content">
					<span class="small-intro"><?php the_field('small_header_text'); ?></span>
					<h2><?php the_title(); ?></h2>
					<div class="seperator"></div>
					<p class="large"><?php the_field('intro_text'); ?></p>
					<a href="<?php the_field('link_to_service_page'); ?>" class="button">Learn More</a>
				</div>
				<div class="cell medium-6 bg_service-image" style="background: url('<?php the_field('background_image'); ?>') center center;">

				</div>
			</div>


			<?php
					}
				}
				else {
					echo 'There are currently no capabilities added.';
				}
			?>
		 <?php wp_reset_query(); ?>


</section>


<?php get_footer();
