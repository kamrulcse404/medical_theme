<?php

/**
 * Template Name: services
 **/
get_header();
?>

<!-- bg-1 -->
<section class="page-title bg-1 " style="background-image: url('<?php echo get_post_meta(get_the_ID(), 'service-container-background', true);  ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white"><?php echo get_post_meta(get_the_ID(), 'service-title', true) ?></span>
					<h1 class="text-capitalize mb-5 text-lg"><?php echo get_post_meta(get_the_ID(), 'service-description', true) ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row">

			<?php
			$services = new WP_Query(array(
				'post_type' => 'services',
			))
			?>

			<?php while ($services->have_posts()) : $services->the_post(); ?>

				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="service-block mb-5">
						<img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
						<div class="content">
							<h4 class="mt-4 mb-2 title-color"><?php the_title(); ?></h4>
							<p class="mb-4"><?php the_content(); ?></p>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		</div>
	</div>
</section>

<!-- cta-page -->
<section class="section cta-page" style="background-image: url('<?php echo get_post_meta(get_the_ID(), 'service-cta-background', true);  ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4">

					</div>
					<h2 class="mb-5 text-lg">
						12333
						<?php echo get_post_meta(get_the_ID(), 'service-cta-title', true); ?>
					</h2>
					<a href="appoinment.html" class="btn btn-main-2 btn-round-full">
						<?php echo get_post_meta(get_the_ID(), 'service-cta-btn', true); ?>
						<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>