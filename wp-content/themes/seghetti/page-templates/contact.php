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


<section class="services">

		<div class="grid-x grid-padding-x">
			<div class="cell medium-6 service-content">
				<span class="small-intro">Read to reach out?</span>
				<h2>Get in touch</h2>
				<div class="seperator"></div>
				<p class="large">There are few things that keep us awake at night like our taxes. Let’s face it, whether you’re doing your taxes by yourself or paying someone to prepare them for you, it can be a miserable experience. At Seghetti Waxler, we aim to make that experience better.</p>
				<a href="#" class="button">Learn More</a>
			</div>
			<div class="cell medium-6 bg_blue">

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
