<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-8 large-6">
				<div class="hero-text">
					<div class="small-intro"><?php the_field('hero_small_text'); ?></div>
					<?php the_field('hero_header'); ?>
					<div class="seperator"></div>
					<div class="large">
						<?php the_field('hero_header_content'); ?>
					</div>
					<a href="<?php the_field('hero_button_one_page_link'); ?>" class="button"><?php the_field('hero_button_one_text'); ?></a><a href="<?php the_field('hero_button_two_page_link'); ?>" class="button ghost"><?php the_field('hero_button_two_text'); ?></a>
				</div>
			</div>
		</div>
	</div>

</header>


<section class="intro">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-6">
				<span class="small-intro"><?php the_field('section_one_small_text'); ?></span>
				<?php the_field('section_one_header'); ?>
				<div class="seperator"></div>
				<?php the_field('section_one_content'); ?>
			</div>
			<div class="cell medium-6">
				<?php
						$image = get_field('section_one_image');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
			</div>
		</div>
	</div>

	<?php
			 $args = array(
				 'post_type' => 'qualities',
				 'posts_per_page' => 5
			 );
			 $my_qualities = new WP_Query( $args );
			 if( $my_qualities->have_posts() ) {
				 while( $my_qualities ->have_posts() ) {
					 $my_qualities->the_post();
			?>



			<?php
					}
				}
				else {
					echo 'There are currently no qualities added.';
				}
			?>
		 <?php wp_reset_query(); ?>




	<div class="grid-container" id="reasons">
		<div class="grid-x grid-padding-x">


				<?php
						 $args = array(
							 'post_type' => 'qualities',
							 'posts_per_page' => 3
						 );
						 $my_qualities = new WP_Query( $args );
						 if( $my_qualities->have_posts() ) {
							 while( $my_qualities ->have_posts() ) {
								 $my_qualities->the_post();
						?>

						<div class="cell medium-4">

							<div class="grid-x grid-padding-x">
								<div class="cell medium-4">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/approachable@2x.jpg" alt="Seghetti Waxler" />
								</div>
								<div class="cell medium-8">
									<div class="number"><?php the_field('number'); ?><span class="yellow">_</span></div>
									<h3><?php the_title(); ?></h3>
									<?php the_content(); ?>
								</div>
							</div>

						</div>

						<?php
								}
							}
							else {
								echo 'There are currently no qualities added.';
							}
						?>
					 <?php wp_reset_query(); ?>


		</div>
	</div>

</section>

<section class="capabilities bg_blue">


	<div class="grid-container">
		<div class="grid-x grid-padding-x leadin">
			<span class="small-intro"><?php the_field('section_two_small_text'); ?></span>
			<?php the_field('section_two_header'); ?>
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
			<a class="button" href="<?php the_field('section_two_page_link	'); ?>"><?php the_field('section_two_button_text'); ?></a>
		</div>
	</div>

</section>

<section class="testimonials">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-12">
				<div class="lazy slider">

					<?php
							 $args = array(
								 'post_type' => 'testimonials',
								 'posts_per_page' => 5
							 );
							 $my_testimonials = new WP_Query( $args );
							 if( $my_testimonials->have_posts() ) {
								 while( $my_testimonials ->have_posts() ) {
									 $my_testimonials->the_post();
							?>

							<div>
								<blockquote>
									<?php the_content(); ?>
								</blockquote>
								<div class="person"><span class="yellow">—</span> <?php the_title(); ?>, <b><?php the_field('occupation'); ?></b></div>
							</div>

							<?php
									}
								}
								else {
									echo 'There are currently no testimonials added.';
								}
							?>
						 <?php wp_reset_query(); ?>


			</div>
		</div>
	</div>
</section>

<section class="meet-the-team">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-4">
				<span class="small-intro">G<?php the_field('section_three_small_text'); ?></span>
				<h2><?php the_field('section_three_header'); ?></h2>
				<div class="seperator"></div>
				<?php the_field('section_three_content'); ?>
				<a href="<?php the_field('section_three_page_link'); ?>"><?php the_field('section_three_link_text'); ?></a>
			</div>
		</div>
	</div>
</section>


<?php get_footer();
