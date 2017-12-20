<?php
/*
Template Name: Contact
*/
get_header(); ?>

<header class="inner-hero" role="banner">

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-7">
				<div class="hero-text">
					<span class="small-intro">What we do</span>
					<h1>Contact Us</h1>
					<div class="seperator"></div>
					<p class="large">Here’s what we can do for you</p>
				</div>
			</div>
		</div>
	</div>

</header>


<section class="contact">

		<div class="grid-x grid-padding-x">
			<div class="cell medium-6 contact-content">
				<span class="small-intro"><?php the_field('section_one_small_text'); ?></span>
				<h2><?php the_field('section_one_header'); ?></h2>
				<div class="seperator"></div>

				<div class="grid-x small-12">
						<div class="shrink cell">
							<?php
									$image = get_field('contact_icon_one');
									if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
						</div>
						<div class="auto cell">
							<h4><?php the_field('contact_heading_one'); ?></h4>
							<a target="_blank" href="mailto:<?php the_field('contact_link_one'); ?>"><?php the_field('contact_info_one'); ?></a>
						</div>
				</div>

				<div class="grid-x small-12">
						<div class="shrink cell">
							<?php
									$image = get_field('contact_icon_two');
									if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
						</div>
						<div class="auto cell">
							<h4><?php the_field('contact_heading_two'); ?></h4>
							<a target="_blank" href="<?php the_field('contact_link_two'); ?>"><?php the_field('contact_info_two'); ?></a>
						</div>
				</div>

				<div class="grid-x small-12">
						<div class="shrink cell">
							<?php
									$image = get_field('contact_icon_three');
									if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
						</div>
						<div class="auto cell">
							<h4><?php the_field('contact_heading_three'); ?></h4>
							<a target="_blank" href="tel:<?php the_field('contact_link_three'); ?>"><?php the_field('contact_info_three'); ?></a>
						</div>
				</div>

			</div>
			<div class="cell medium-6 bg_blue" id="contact-form">
				<?php echo do_shortcode("[contact-form-7 id='18' title='Contact Form']"); ?>
			</div>
		</div>

</section>

<section id="google-map">
	<div id="map"></div>
	    <script>
	      function initMap() {
	        var uluru = {lat: 36.9840777, lng: -121.9580202};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 16,
						scrollwheel: false,
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#3e606f"},{"weight":2},{"gamma":0.84}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#1a3541"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#29768a"},{"lightness":-37}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#193341"}]}],
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map
	        });
	      }
	    </script>

			<script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAncbiy38ArY_hc3f3AJ0bVXRRhUoJgFwo&callback=initMap">
			</script>

</section>

<?php get_footer();
