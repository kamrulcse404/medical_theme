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
					<h2 class="text-md mb-2">Contact us</h2>
					<div class="divider mx-auto my-4"></div>
					<p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi mollitia sit
						perferendis maiores ratione aliquam?</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<form id="contact-form" class="contact__form " method="post" action="mail.php">
					<!-- form message -->
					<div class="row">
						<div class="col-12">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Your message was sent successfully.
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<input name="name" id="name" type="text" class="form-control" placeholder="Your Full Name">
							</div>
						</div>

						<div class="col-lg-6">
							<div class="form-group">
								<input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input name="subject" id="subject" type="text" class="form-control" placeholder="Your Query Topic" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number" required>
							</div>
						</div>
					</div>

					<div class="form-group-2 mb-4">
						<textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message" required></textarea>
					</div>

					<div>
						<input class="btn btn-main btn-round-full" name="submit" type="submit" value="Send Messege"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<div class="google-map ">
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png"></div>
</div>

<?php
get_footer();
?>