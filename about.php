<?php

/**
 * Template Name: about
 **/
get_header();
?>




<?php print_r(get_the_ID()); ?> 
<?php echo get_post_meta(get_the_ID(), 'blog-container-title', true) ?>

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

<!-- done  -->
<section class="fetaure-page ">
	<div class="container">
		<div class="row">

			<?php
			$features = get_post_meta(get_the_ID(), 'about-feature', true);

			foreach ((array)$features as $key => $entry) {
				$title = $desc = $img = '';
				if (isset($entry['about-feature-title'])) {
					$title = esc_html($entry['about-feature-title']);
				}
				if (isset($entry['about-feature-description'])) {
					$desc = $entry['about-feature-description'];
				}

				if (isset($entry['about-feature-image'])) {
					$img = esc_html($entry['about-feature-image']);
				}

				if (!empty($features)) { ?>


					<div class="col-lg-3 col-md-6">
						<div class="about-block-item mb-5 mb-lg-0">
							<img src="<?php echo $img; ?>" alt="" class="img-fluid w-100">
							<h4 class="mt-3"><?php echo $title; ?></h4>
							<p><?php echo $desc; ?></p>
						</div>
					</div>
			<?php }
			}
			?>

		</div>
	</div>
</section>

<!-- done  -->
<section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h2 class="title-color"><?php echo get_post_meta(get_the_ID(), 'about-section-achivements', true) ?></h2>
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">

					<?php
					$achivements =  get_post_meta(get_the_ID(), "about-achivement", true);

					foreach ($achivements as $achivement) {
						$img = '';

						if (isset($achivement['about-achivement-image'])) {
							$img = esc_html($achivement['about-achivement-image']);
						}

						if (!empty($achivement)) { ?>

							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="award-img">
									<img src="<?php echo $img ?>" alt="" class="img-fluid">
								</div>
							</div>
					<?php
						}
					}
					?>

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



<!-- style="bacground: url(' -->


<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4"><?php echo get_post_meta(get_the_ID(), 'about-section-testimonial-title', true) ?></h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">

				<?php
				$testimonials =  get_post_meta(get_the_ID(), 'about-testimonial', true);

				foreach ($testimonials as $testimonial) {
					$compliment = $name = $desc = '';

					if (isset($testimonial['about-testimonial-compliment'])) {
						$compliment = $testimonial['about-testimonial-compliment'];
					}
					if (isset($testimonial['about-testimonial-doctor-name'])) {
						$name = $testimonial['about-testimonial-doctor-name'];
					}
					if (isset($testimonial['about-testimonial-compliment-desc'])) {
						$desc = $testimonial['about-testimonial-compliment-desc'];
					}

					if (!empty($testimonials)) { ?>
						<div class="testimonial-block">
							<div class="client-info ">
								<h4><?php echo $compliment ?></h4>
								<span><?php echo $name ?></span>
							</div>
							<p>
								<?php echo $desc ?>
							</p>
							<i class="icofont-quote-right"></i>
						</div>
				<?php
					}
				}
				?>



			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>