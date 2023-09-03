<?php get_header(); ?>



<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">Meet Our Specialist</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Today’s users expect effortless experiences. Don’t let essential people and processes stay stuck in the past. Speed it up, skip the hassles</p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
			$term = get_queried_object();
			$args = array(
				'post_type' => 'doctor', // Your custom post type
				'tax_query' => array(
					array(
						'taxonomy' => 'doc_category', // Your custom taxonomy
						'field'    => 'slug',
						'terms'    => $term->slug,
					),
				),
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) {
				while ($query->have_posts()){
					$query->the_post();
					?>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="team-block mb-5 mb-lg-0">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100">

							<div class="content">
								<h4 class="mt-4 mb-0"><a href="doctor-single.html"><?php echo the_title() ;?></a></h4>
								<p><?php echo the_content(); ?></p>
							</div>
						</div>
					</div>

			<?php
				}
				wp_reset_postdata();
			}

			?>
		</div>
	</div>
</section>


<?php get_footer();
?>