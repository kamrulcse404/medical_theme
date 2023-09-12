<?php
get_header();
?>


<section class="page-title bg-1" style="background: url('<?php echo get_post_meta(get_the_ID(), 'single-department-container-background', true); ?>');">
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


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="<?php echo the_post_thumbnail_url('large') ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md"><?php echo the_title(); ?></h3>
					<div class="divider my-4"></div>
					<p class="lead"><?php echo the_content(); ?></p>


					<?php
					$services = get_post_meta(get_the_ID(), "single-department-service", true);
					if (!empty($services)) { ?>
						<h3 class="mt-5 mb-4">Services features</h3>
						<div class="divider my-4"></div>
					<?php
					}
					?>



					<ul class="list-unstyled department-service">


						<?php

						if (!empty($services)) {


							foreach ($services as $service) {
								$srvs = '';

								if (isset($service['service-feature-single-department'])) {
									$srvs = esc_html($service['service-feature-single-department']);
								}

								if (!empty($service)) { ?>

									<li><i class="icofont-check mr-2"></i><?php echo $srvs ?></li>

						<?php

								}
							}
						};
						?>


						<!-- <li><i class="icofont-check mr-2"></i></li> -->

					</ul>

					<a href="<?php echo home_url('/appoinment-page') ?>" class="btn btn-main-2 btn-round-full">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Time Schedule</h5>

					<ul class="list-unstyled">
						<li class="d-flex justify-content-between align-items-center">
							<span><?php echo get_post_meta(get_the_ID(), 'single-department-sidebar-schedule-1-day', true)  ?></span>
							<span><?php echo get_post_meta(get_the_ID(), 'single-department-sidebar-schedule-1-time', true)  ?></span>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span><?php echo get_post_meta(get_the_ID(), 'single-department-sidebar-schedule-2-day', true)  ?></span>
							<span><?php echo get_post_meta(get_the_ID(), 'single-department-sidebar-schedule-2-time', true)  ?></span>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span><?php echo get_post_meta(get_the_ID(), 'single-department-sidebar-schedule-3-day', true)  ?></span>
							<span><?php echo get_post_meta(get_the_ID(), 'single-department-sidebar-schedule-3-time', true)  ?></span>
						</li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3><?php echo get_post_meta(get_the_ID(), 'single-department-sidebar-urgent-contact', true)  ?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>