<?php

/**
 * Template Name: contact
 **/
get_header();
?>

<!-- done  -->
<section class="page-title bg-1" style="background: url('<?php echo get_post_meta(get_the_ID(), 'contatc-section-background', true); ?>');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white"><?php echo get_post_meta(get_the_ID(), 'contact-title', true); ?></span>
					<h1 class="text-capitalize mb-5 text-lg"><?php echo get_post_meta(get_the_ID(), 'contact-description', true); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact form start -->

<!-- done  -->
<section class="section contact-info pb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="contact-block mb-4 mb-lg-0">
					<i class="icofont-live-support"></i>
					<h5><?php echo get_post_meta(get_the_ID(), 'contact-call-title', true); ?></h5>
					<?php echo get_post_meta(get_the_ID(), 'contact-call-number', true); ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="contact-block mb-4 mb-lg-0">
					<i class="icofont-support-faq"></i>
					<h5><?php echo get_post_meta(get_the_ID(), 'contact-email-title', true); ?></h5>
					<?php echo get_post_meta(get_the_ID(), 'contact-email', true); ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="contact-block mb-4 mb-lg-0">
					<i class="icofont-location-pin"></i>
					<h5><?php echo get_post_meta(get_the_ID(), 'contact-location-title', true); ?></h5>
					<?php echo get_post_meta(get_the_ID(), 'contact-location', true); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contact-form-wrap section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="text-md mb-2"><?php echo get_post_meta(get_the_ID(), 'contact-form-title', true) ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p class="mb-5"><?php echo get_post_meta(get_the_ID(), 'contact-form-desc', true) ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">



				<form id="get_contact-form" ajax_url="<?php echo admin_url('admin-ajax.php'); ?>" class="contact__form " method="post" action="mail.php">
					<!-- form message -->
					<!-- <div class="row">
						<div class="col-12">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Your message was sent successfully.
							</div>
						</div>
					</div> -->

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<input name="user_full_name" id="name" type="text" class="form-control" placeholder="Your Full Name">
							</div>
						</div>

						<div class="col-lg-6">
							<div class="form-group">
								<input name="user_email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input name="user_query_topic" id="subject" type="text" class="form-control" placeholder="Your Query Topic" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input name="user_phone_number" id="phone" type="text" class="form-control" placeholder="Your Phone Number" required>
							</div>
						</div>
					</div>

					<div class="form-group-2 mb-4">
						<textarea name="user_message" id="message" class="form-control" rows="8" placeholder="Your Message" required></textarea>
					</div>

					<div>
						<input class="btn btn-main btn-round-full" name="submit" type="submit" value="Send Messege"></input>
					</div>
				</form>



			</div>
		</div>
	</div>
</section>


<!-- <div class="google-map ">
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="<?php //echo get_template_directory_uri(); ?>/images/marker.png"></div>
</div> -->

<div class="google-map ">
	<div id="map" class="text-center">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7306.0001064949265!2d90.464590789186!3d23.711692137937856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b70abed44b75%3A0x4b94bcb774fb6573!2sKonapara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1693904140806!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>

<?php
get_footer();
?>