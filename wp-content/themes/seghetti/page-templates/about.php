<?php
/*
Template Name: About
*/
get_header(); ?>

<header class="inner-hero" role="banner">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-7">
				<div class="hero-text">
					<?php the_field('hero_header'); ?>
					<div class="seperator"></div>
					<div class="large"><?php the_field('hero_header_content'); ?></div>
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

<section id="meet-the-team" class="bg_blue">

	<div class="grid-container">
		<div class="grid-x grid-padding-x leadin">
			<span class="small-intro">Get to know us</span>
			<h2>Our Team</h2>
			<div class="seperator"></div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<?php
					 $args = array(
						 'post_type' => 'team_members',
						 'posts_per_page' => 8
					 );
					 $my_team_members = new WP_Query( $args );
					 if( $my_team_members->have_posts() ) {
						 while( $my_team_members ->have_posts() ) {
							 $my_team_members->the_post();
					?>

					<div class="cell medium-4">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/team-ph@2x.jpg" alt="Seghetti Waxler" />
							<h4><?php the_title(); ?></h4>
							<p>CPA <span class="yellow">//</span> CVA</p>
							<a data-open="exampleModal1">Read Bio</a>

							<div class="reveal large" id="exampleModal1" data-reveal>

								<div class="grid-x grid-padding-x">
									<div class="cell medium-5">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/team-ph@2x.jpg" alt="Seghetti Waxler" />
		 							</div>
									<div class="cell medium-7">
										<p>CPA <span class="yellow">//</span> CVA</p>
										<h4><?php the_title(); ?></h4>
										<div class="seperator"></div>
										<p>Tom specializes in finance and taxation for small businesses, focusing on strategic planning, tax efficiency, and real estate. He also works with many individuals who hold real estate, receive equity compensation (RSUs, ESPPs, ISOs, NSOs), and have interests in pass-through businesses.

		Outside of work, Tom reads as much as possible and tries unsuccessfully to keep up with his 3-year-old daughter and 4-year-old German Shorthaired Pointer. He’s an avid Bay Area sports fan, but not quite as big a fan as his wife, Lori.</p>
		 							</div>
								</div>

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

		</div>
	</div>

</section>

<section class="cta">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 medium-offset-2 cell"><h2>Ready to take the edge off?</h2></div>
  		<div class="small-12 medium-4 cell"><a href="#" class="button">Get in touch</a></div>
		</div>
	</div>
</section>

<?php get_footer();
