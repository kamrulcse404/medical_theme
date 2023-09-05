<?php

/**
 * Template Name: departments
 **/
get_header();
?>

<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">All Department</span>
					<h1 class="text-capitalize mb-5 text-lg">Care Department</h1>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Award winning patient care</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>

		<div class="row">

			<?php
			$departments = new WP_Query(array(
				'post_type' => 'departments',
			))
			?>

			<?php while ($departments->have_posts()) : $departments->the_post(); ?>

				<div class="col-lg-4 col-md-6 ">
					<div class="department-block mb-5">
						<img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100">
						<div class="content">
							<h4 class="mt-4 mb-2 title-color"><?php the_title(); ?></h4>
							<p class="mb-4"><?php the_content(); ?></p>
							<a href="<?php the_permalink() ?>" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
					</div>
				</div>

			<?php endwhile;
				wp_reset_postdata();
			?>

		</div>
	</div>
</section>

<?php
get_footer();
?>