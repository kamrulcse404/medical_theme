<?php
get_header();
?>

<section class="page-title bg-1" style="background: url('<?php echo get_post_meta(get_the_ID(), 'single-doctor-container-background', true); ?>');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<h1 class="text-capitalize mb-5 text-lg"><?php echo the_title() ?></h1>
					<span class="text-white"><?php echo the_content() ?></span>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section doctor-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="doctor-img-block">
					<img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100">

					<div class="info-block mt-4">
						<h4 class="mb-0"><?php echo the_title() ?></h4>
						<p>
							<?php
							$terms = get_the_terms(get_the_ID(), 'doc_category');
							foreach ($terms as $term) {
								echo $term->name . '<br>';
							}
							?>
						</p>

						<ul class="list-inline mt-4 doctor-social-links">


							<?php
							$socials = get_post_meta(get_the_ID(), "single-doctor-social", true);
							?>

							<?php

							foreach ($socials as $key => $social) {
								$icon =  $url = '';

								if (isset($social['single-doctor-social-icon'])) {
									$icon = esc_html($social['single-doctor-social-icon']);
								}

								if (isset($social['single-doctor-social-url'])) {
									$url = esc_html($social['single-doctor-social-url']);
								}

							?>

								<li class="list-inline-item"><a href="<?php echo $url ?>"><i class="<?php echo $icon  ?>"></i></a></li>


							<?php


							}

							?>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-6">
				<div class="doctor-details mt-4 mt-lg-0">
					<h2 class="text-md">Introducing to myself</h2>
					<div class="divider my-4"></div>
					<p><?php the_content() ?></p>

					<a href="<?php echo home_url('/appoinment-page') ?>" class="btn btn-main-2 btn-round-full mt-3">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section doctor-qualification gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="section-title">
					<h3>My Educational Qualifications</h3>
					<div class="divider my-4"></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 mb-4 mb-lg-0">

				<?php
				$educations = get_post_meta(get_the_ID(), "single-doctor-ecucation", true);

				$len = count($educations);
				// echo '<pre>';
				// print_r($len);
				?>

				<?php
				foreach ($educations as $key => $education) {
					$duration = $institute = $des = '';

					if (isset($education['single-doctor-education-duration'])) {
						$duration = esc_html($education['single-doctor-education-duration']);
					}

					if (isset($education['single-doctor-education-university'])) {
						$institute = esc_html($education['single-doctor-education-university']);
					}

					if (isset($education['single-doctor-education-details'])) {
						$des = esc_html($education['single-doctor-education-details']);
					} ?>


					<div class="edu-block mb-5">
						<span class="h6 text-muted"><?php echo $duration; ?></span>
						<h4 class="mb-3 title-color"><?php echo $institute; ?></h4>
						<p><?php echo $des; ?></p>
					</div>


				<?php
				}
				?>


				<!-- <div class="edu-block mb-5">
					<span class="h6 text-muted">Year(2005-2007) </span>
					<h4 class="mb-3 title-color">MBBS, M.D at University of Wyoming</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi doloremque harum, mollitia, soluta maxime
						porro veritatis fuga autem impedit corrupti aperiam sint, architecto, error nesciunt temporibus! Vel quod,
						dolor aliquam!</p>
				</div> -->

				<!-- <div class="edu-block">
					<span class="h6 text-muted">Year(2007-2009) </span>
					<h4 class="mb-3 title-color">M.D. of Netherland Medical College</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi doloremque harum, mollitia, soluta maxime
						porro veritatis fuga autem impedit corrupti aperiam sint, architecto, error nesciunt temporibus! Vel quod,
						dolor aliquam!</p>
				</div> -->
			</div>

			<!-- <div class="col-lg-6">
				<div class="edu-block mb-5">
					<span class="h6 text-muted">Year(2009-2010) </span>
					<h4 class="mb-3 title-color">MBBS, M.D at University of Japan</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi doloremque harum, mollitia, soluta maxime
						porro veritatis fuga autem impedit corrupti aperiam sint, architecto, error nesciunt temporibus! Vel quod,
						dolor aliquam!</p>
				</div>

				<div class="edu-block">
					<span class="h6 text-muted">Year(2010-2011) </span>
					<h4 class="mb-3 title-color">M.D. of Canada Medical College</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi doloremque harum, mollitia, soluta maxime
						porro veritatis fuga autem impedit corrupti aperiam sint, architecto, error nesciunt temporibus! Vel quod,
						dolor aliquam!</p>
				</div>
			</div> -->
		</div>
	</div>
</section>


<section class="section doctor-skills">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3>My skills</h3>
				<div class="divider my-4"></div>
				<p><?php echo get_post_meta(get_the_ID(), 'single-doctor-skills', true) ?></p>
			</div>
			<div class="col-lg-4">
				<div class="skill-list">
					<h5 class="mb-4">Expertise area</h5>
					<ul class="list-unstyled department-service">

						<?php
						$expertises = get_post_meta(get_the_ID(), "single-doctor-expertise", true);
						?>

						<?php
						foreach ($expertises as $key => $expertise) {
							$expert = '';


							if (isset($expertise['single-doctor-expertise-name'])) {
								$expert = esc_html($expertise['single-doctor-expertise-name']);
							} ?>

							<li><i class="icofont-check mr-2"></i><?php echo $expert; ?></li>


						<?php
						}
						?>	

					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebar-widget  gray-bg p-4">
					<h5 class="mb-4">Make Appoinment</h5>

					<ul class="list-unstyled lh-35">
						<li class="d-flex justify-content-between align-items-center">
							<span><?php echo get_post_meta(get_the_ID(), 'single-doctor-visit-day-1', true) ?></span>
							<span><?php echo get_post_meta(get_the_ID(), 'single-doctor-visit-time-1', true) ?></span>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span><?php echo get_post_meta(get_the_ID(), 'single-doctor-visit-day-2', true) ?></span>
							<span><?php echo get_post_meta(get_the_ID(), 'single-doctor-visit-time-2', true) ?></span>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span><?php echo get_post_meta(get_the_ID(), 'single-doctor-visit-day-off', true) ?></span>
							<span><?php echo get_post_meta(get_the_ID(), 'single-doctor-visit-day-off-1', true) ?></span>
						</li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3 class="text-color-2"><?php echo get_post_meta(get_the_ID(), 'single-doctor-urgent-contact', true) ?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
get_footer();
?>