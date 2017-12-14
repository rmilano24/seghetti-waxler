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
					<span class="small-intro">What we do</span>
					<h1>About Us</h1>
					<div class="seperator"></div>
					<p class="large">We help take the edge off your taxes</p>
				</div>
			</div>
		</div>
	</div>

</header>

<section class="intro">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-6">
				<span class="small-intro">A different kind of tax experience</span>
				<h2>Our industry has forgotten about the client.</h2>
				<div class="seperator"></div>
				<p class="large">There are few things that keep us awake at night like our taxes. Let’s face it, whether you’re doing your taxes by yourself or paying someone to prepare them for you, it can be a miserable experience. At Seghetti Waxler, we aim to make that experience better.</p>
			</div>
			<div class="cell medium-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/seghetti-team@2x.jpg" alt="Seghetti Waxler Team" />
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
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/approachable@2x.jpg" alt="Seghetti Waxler" />
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
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/approachable@2x.jpg" alt="Seghetti Waxler" />
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

<section id="meet-the-team" class="bg_blue">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/team-ph@2x.jpg" alt="Seghetti Waxler" />
					<h4>Tom Castillo</h4>
					<p>CPA <span class="yellow">//</span> CVA</p>
					<a data-open="exampleModal1">Read Bio</a>

					<div class="reveal" id="exampleModal1" data-reveal>
					  <h1>Awesome. I Have It.</h1>
					  <p class="lead">Your couch. It is mine.</p>
					  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
					  <button class="close-button" data-close aria-label="Close modal" type="button">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>

			</div>
			<div class="cell medium-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/team-ph@2x.jpg" alt="Seghetti Waxler" />
				<h4>Tom Castillo</h4>
				<p>CPA <span class="yellow">//</span> CVA</p>
				<a href="#">Read Bio</a>
			</div>
			<div class="cell medium-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/team-ph@2x.jpg" alt="Seghetti Waxler" />
				<h4>Tom Castillo</h4>
				<p>CPA <span class="yellow">//</span> CVA</p>
				<a href="#">Read Bio</a>
			</div>
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
