<?php

/**
 * Template Name: all_doctor
 **/
get_header();
?>

<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">All Doctors</span>
					<h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>

					<!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
          </ul> -->
				</div>
			</div>
		</div>
	</div>
</section>


<!-- portfolio -->
<section class="section doctors">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">
					<h2>Doctors</h2>
					<div class="divider mx-auto my-4"></div>
					<p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
				</div>
			</div>
		</div>


		<?php
		$terms = get_terms(array(
			'taxonomy' => 'doc_category', // Replace with your taxonomy slug
			'hide_empty' => false,
			'orderby' => 'term_id', // Order by term_id
			'order' => 'ASC', // Ascending order // Set to true if you want to hide empty categories
		));
		?>



		<div class="col-12 text-center  mb-5">
			<div class="btn-group btn-group-toggle " data-toggle="buttons">
				<label class="btn active ">
					<input type="radio" name="shuffle-filter" value="all" checked="checked" />All Department
				</label>


				<?php

				foreach ($terms as $term) { ?>

					<label class="btn ">
						<input type="radio" name="shuffle-filter" value="cat<?php echo $term->term_id; ?>" />
						<?php echo $term->name; ?>
					</label>

				<?php	}  ?>
			</div>
		</div>

		<div class="row shuffle-wrapper portfolio-gallery">


			<?php


			foreach ($terms as $term) {
				$term_id_cat = $term->term_id;
				$args = array(
					'post_type' => 'doctor', // Replace with your custom post type name
					'tax_query' => array(
						array(
							'taxonomy' => 'doc_category', // Replace with your taxonomy slug
							'field' => 'term_id',
							'terms' => $term_id_cat, // Replace with the term_id of "cardiology"
						),
					),
				);

				$doctor_query = new WP_Query($args);

				if (
					$doctor_query->have_posts()
				) {
					while ($doctor_query->have_posts()) {
						$doctor_query->the_post(); ?>


						<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat<?php echo $term->term_id; ?>&quot;,&quot;cat2&quot;]">
							<div class="position-relative doctor-inner-box">
								<div class="doctor-profile">
									<div class="doctor-img">
										<img src="<?php echo get_the_post_thumbnail_url() ?> " alt="doctor-image" class="img-fluid w-100">
									</div>
								</div>
								<div class="content mt-3">
									<h4 class="mb-0"><a href="doctor-single.html">
											<?php echo the_title(); ?> </a></h4>
									<p><?php echo $term->name; ?></p>
								</div>
							</div>
						</div>

				<?php
						// Display doctor information here
						// Example: Display the doctor's title
						// You can display other doctor information as needed
					}
					wp_reset_postdata(); // Reset the query to the main loop
				} else {
					echo 'No doctors found in the "cardiology" category.';
				}



				?>




			<?php	}  ?>





			<!-- <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat2&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/2.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">Harrision Samuel</a></h4>
						<p>Radiology</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat3&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">Alexandar James</a></h4>
						<p>Dental</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat3&quot;,&quot;cat4&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/4.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">Edward john</a></h4>
						<p>Pediatry</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat5&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/1.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">Thomas Henry</a></h4>
						<p>Neurology</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat6&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">Henry samuel</a></h4>
						<p>Palmology</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat4&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/1.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">Thomas alexandar</a></h4>
						<p>Cardiology</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat5&quot;,&quot;cat6&quot;,&quot;cat1&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">HarissonThomas </a></h4>
						<p>Traumatology</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration" data-groups="[&quot;cat2&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/4.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">Jonas Thomson</a></h4>
						<p>Cardiology</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat5&quot;,&quot;cat6&quot;,&quot;cat1&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">Henry Forth</a></h4>
						<p>hematology</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration" data-groups="[&quot;cat2&quot;]">
				<div class="position-relative doctor-inner-box">
					<div class="doctor-profile">
						<div class="doctor-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/team/4.jpg" alt="doctor-image" class="img-fluid w-100">
						</div>
					</div>
					<div class="content mt-3">
						<h4 class="mb-0"><a href="doctor-single.html">Thomas Henry</a></h4>
						<p>Dental</p>
					</div>
				</div>
			</div> -->





		</div>




	</div>
</section>
<!-- /portfolio -->
<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
					<a href="appoinment.html" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>