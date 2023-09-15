<?php 

/**
 * Template Name: home
 **/



get_header();

?>


<!-- Slider Start -->

<!-- done  -->
<section class="banner" style="background: url('<?php echo get_post_meta(get_the_ID(), 'index-banner-background', true); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<?php
					require_once('banner-template.php');
				?>
			</div>
		</div>
	</div>
</section>

<!-- done  -->
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php 
					require_once('features-template.php');
				?>
			</div>
		</div>
	</div>
</section>

<!-- done  -->
<section class="section about">
	<div class="container">
		<?php
			require_once('about-template.php');
		?>
	</div>
</section>


<!-- done  -->
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<?php
				require_once('cta-template.php');
			?>
		</div>
	</div>
</section>


<!-- done  -->
<section class="section service gray-bg">
	<?php
	require_once('service-template.php');
	?>
</section>

<!-- done  -->
<section class="section appoinment">
	<div class="container">
		<?php
			require_once('appoinment-template.php');
		?>
	</div>
</section>

<!-- done  -->
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2><?php echo get_post_meta(get_the_ID(), 'index-testimonial-title', true) ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo get_post_meta(get_the_ID(), 'index-testimonial-desc', true) ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<?php
				// done 
				require_once('testimonial-template.php');
			?>
		</div>
	</div>
</section>

<!-- done  -->
<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2><?php echo get_post_meta(get_the_ID(), 'index-client-title', true) ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo get_post_meta(get_the_ID(), 'index-client-desc', true) ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<?php
			// done 
			require_once('clients-template.php');
		?>
	</div>
</section>


<?php
get_footer();
?>