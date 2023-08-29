<?php
get_header();

?>


<!-- Slider Start -->
<section class="banner">
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


<section class="section about">
	<div class="container">
		<?php
			require_once('about-template.php');
		?>
	</div>
</section>

<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<?php
				require_once('cta-template.php');
			?>
		</div>
	</div>
</section>

<section class="section service gray-bg">
	<?php
	require_once('service-template.php');
	?>
</section>

<section class="section appoinment">
	<div class="container">
		<?php
			require_once('appoinment-template.php');
		?>
	</div>
</section>

<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>We served over 5000+ Patients</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<?php
				require_once('testimonial-template.php');
			?>
		</div>
	</div>
</section>

<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<?php
			require_once('clients-template.php');
		?>
	</div>
</section>


<?php
get_footer();
?>