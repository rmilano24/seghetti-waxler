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

	<div class="grid-container" id="reasons">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-4">

				<div class="grid-x grid-padding-x">
					<div class="cell medium-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/approachable@2x.jpg" alt="Seghetti Waxler" />
					</div>
					<div class="cell medium-8">
						<div class="number">01<span class="yellow">_</span></div>
						<h3>Approachable</h3>
						<p>Seghetti Waxler’s CPAs and staff are friendly and speak in plain language. The tax code is complex. You need a firm that you feel comfortable working with to ensure your issues are understood.</p>
					</div>
				</div>

			</div>
			<div class="cell medium-4">

				<div class="grid-x grid-padding-x">
					<div class="cell medium-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/reliable@2x.jpg" alt="Seghetti Waxler" />
					</div>
					<div class="cell medium-8">
						<div class="number">02<span class="yellow">_</span></div>
						<h3>Approachable</h3>
						<p>Seghetti Waxler’s CPAs and staff are friendly and speak in plain language. The tax code is complex. You need a firm that you feel comfortable working with to ensure your issues are understood.</p>
					</div>
				</div>

			</div>
			<div class="cell medium-4">

				<div class="grid-x grid-padding-x">
					<div class="cell medium-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/responsive@2x.jpg" alt="Seghetti Waxler" />
					</div>
					<div class="cell medium-8">
						<div class="number">01<span class="yellow">_</span></div>
						<h3>Approachable</h3>
						<p>Seghetti Waxler’s CPAs and staff are friendly and speak in plain language. The tax code is complex. You need a firm that you feel comfortable working with to ensure your issues are understood.</p>
					</div>
				</div>

			</div>

		</div>
	</div>

</section>

<section class="serives bg_blue">

	<div class="grid-container">
		<div class="grid-x grid-padding-x leadin">
			<span class="small-intro">How we can help you</span>
			<h2>Our Services</h2>
			<div class="seperator"></div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/business-valutions@2x.jpg" alt="Seghetti Waxler" />
					<h4>Tax Preparation</h4>
					<div class="seperator"></div>
					<p>Let Seghetti Waxler’s CPAs and staff ease the burden of your annual tax filings.</p>
					<a href="#">Learn More</a>
			</div>
			<div class="cell medium-3">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/business-valutions@2x.jpg" alt="Seghetti Waxler" />
				<h4>Tax Preparation</h4>
				<div class="seperator"></div>
				<p>Let Seghetti Waxler’s CPAs and staff ease the burden of your annual tax filings.</p>
				<a href="#">Learn More</a>
			</div>
			<div class="cell medium-3">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/business-valutions@2x.jpg" alt="Seghetti Waxler" />
				<h4>Tax Preparation</h4>
				<div class="seperator"></div>
				<p>Let Seghetti Waxler’s CPAs and staff ease the burden of your annual tax filings.</p>
				<a href="#">Learn More</a>
			</div>
			<div class="cell medium-3">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/business-valutions@2x.jpg" alt="Seghetti Waxler" />
				<h4>Tax Preparation</h4>
				<div class="seperator"></div>
				<p>Let Seghetti Waxler’s CPAs and staff ease the burden of your annual tax filings.</p>
				<a href="#">Learn More</a>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x grid-padding-x cta">
			<a class="button" href="/services/">Learn More</a>
		</div>
	</div>

</section>

<section class="testimonials">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-12">
				<div class="lazy slider">

					<div>
						<blockquote>
							As a professional athlete and model, my tax and financial situation can get very complicated. I rely on Seghetti Waxler to help with my strategic tax planning and to stay out of trouble with the IRS.
						</blockquote>
						<div class="person"><span class="yellow">—</span> Luke Rockhold, <b>UFC® Fighter, Model</b></div>					</div>
					<div>
						<blockquote>
							As a professional athlete and model, my tax and financial situation can get very complicated. I rely on Seghetti Waxler to help with my strategic tax planning and to stay out of trouble with the IRS.
						</blockquote>
						<div class="person"><span class="yellow">—</span> Luke Rockhold, <b>UFC® Fighter, Model</b></div>					</div>
					<div>
						<blockquote>
							As a professional athlete and model, my tax and financial situation can get very complicated. I rely on Seghetti Waxler to help with my strategic tax planning and to stay out of trouble with the IRS.
						</blockquote>
						<div class="person"><span class="yellow">—</span> Luke Rockhold, <b>UFC® Fighter, Model</b></div>					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="meet-the-team">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-4">
				<span class="small-intro">Get to know us</span>
				<h2>Meet our team</h2>
				<div class="seperator"></div>
				<p>Let Seghetti Waxler’s CPAs and staff ease the burden of your annual tax filings.</p>
				<a href="/about-us/">meet the team</a>
			</div>
		</div>
	</div>
</section>


<?php get_footer();
