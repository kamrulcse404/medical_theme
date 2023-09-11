<?php

/**
 * Template Name: all_doctor
 **/
get_header();
?>

<section class="page-title bg-1" style="background: url('<?php echo get_post_meta(get_the_ID(), 'doctors-container-background', true); ?>');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white"><?php echo get_post_meta(get_the_ID(), 'doctors-container-title', true) ?></span>
					<h1 class="text-capitalize mb-5 text-lg"><?php echo get_post_meta(get_the_ID(), 'doctors-container-desc', true) ?></h1>
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
					<h2><?php echo get_post_meta(get_the_ID(), 'doctors-section-title', true) ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo get_post_meta(get_the_ID(), 'doctors-section-desc', true) ?></p>
				</div>
			</div>
		</div>


		<?php
		$terms = get_terms(array(
			'taxonomy' => 'doc_category',
			'hide_empty' => false,
			'orderby' => 'term_id',
			'order' => 'ASC',
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
					'post_type' => 'doctor',
					'tax_query' => array(
						array(
							'taxonomy' => 'doc_category',
							'field' => 'term_id',
							'terms' => $term_id_cat,
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
									<h4 class="mb-0"><a href="<?php the_permalink() ?>">
											<?php echo the_title(); ?> </a></h4>
									<p><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></p>
								</div>
							</div>
						</div>

				<?php
					}
					wp_reset_postdata();
				} else {
					echo 'No doctors found in the "cardiology" category.';
				}
				?>

			<?php	}  ?>

		</div>
</section>
<!-- /portfolio -->
<section class="section cta-page" style="background: url('<?php echo get_post_meta(get_the_ID(), 'doctors-cta-background', true); ?>'); background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">
						<!-- We are pleased to offer you the <span class="title-color">chance to have the healthy</span> -->
						<?php echo get_post_meta(get_the_ID(), 'doctors-cta-desc', true) ?>
					</h2>
					<a href="appoinment.html" class="btn btn-main-2 btn-round-full"><?php echo get_post_meta(get_the_ID(), 'doctors-cta-button', true) ?><i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>