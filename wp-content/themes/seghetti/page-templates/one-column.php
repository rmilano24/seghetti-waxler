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
					<p class="large"><?php the_field('hero_content_content'); ?></p>
				</div>
			</div>
		</div>
	</div>

</header>


<section class="one-col">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-6">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</section>


<?php get_footer();
