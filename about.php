<?php

/**
 * Template Name: about
 **/
get_header();
?>

<!-- done  -->
<section class="page-title bg-1" style="background: url('<?php echo get_post_meta(get_the_ID(), "about-section-background", true) ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white"><?php echo get_post_meta(get_the_ID(), 'about-title', true); ?></span>
					<h1 class="text-capitalize mb-5 text-lg"><?php echo get_post_meta(get_the_ID(), 'about-description', true); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- done img show problem -->
<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color"><?php echo get_post_meta(get_the_ID(), 'about-description-title', true) ?></h2>
			</div>
			<div class="col-lg-8">
				<p><?php echo get_post_meta(get_the_ID(), 'about-section-description', true) ?></p>

				<img class="img-fluid" style="background: url('<?php echo get_post_meta(get_the_ID(), "about-section-description-background", true) ?>')">

			</div>
		</div>
	</div>
</section>

<section class="fetaure-page ">
	<div class="container">
		<div class="row">

		
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="<?php echo get_template_directory_uri(); ?>/images/about/about-1.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Healthcare for Kids</h4>
					<p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
				</div>
			</div>



		</div>
	</div>
</section>

<section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h2 class="title-color">Our Doctors achievements </h2>
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/about/1.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/about/2.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- done  -->
<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">
						<?php
						echo get_post_meta(get_the_ID(), 'about-doctors-container-title', true)
						?>
					</h2>
					<div class="divider mx-auto my-4"></div>
					<p>
						<?php
						echo get_post_meta(get_the_ID(), 'about-doctors-container-description', true)
						?>
					</p>
				</div>
			</div>
		</div>

		<div class="row">

			<?php
			$post_type = get_post_meta(get_the_ID(), "dropdown_field-custom-post-type", true);
			$doctors = new WP_Query(array(
				'post_type' => $post_type,
				'posts_per_page' => 4
			));
			?>
			<?php while ($doctors->have_posts()) : $doctors->the_post() ?>


				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="team-block mb-5 mb-lg-0">
						<img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100">

						<div class="content">
							<h4 class="mt-4 mb-0"><a href="doctor-single.html">
									<?php
									the_title();
									?></a></h4>
							<p><?php
								the_content();
								?></p>
						</div>
					</div>
				</div>

			<?php
			endwhile;
			wp_reset_postdata();
			?>

		</div>
	</div>
</section>

<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4">What they say about us</h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
				<div class="testimonial-block">
					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>

				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>