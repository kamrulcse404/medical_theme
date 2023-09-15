<?php
get_header();
?>


<section class="page-title bg-1" style="background-image: url('<?php echo get_post_meta(get_the_ID(), 'single-blog-container-background', true);  ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<h1 class="text-capitalize mb-5 text-lg"><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section blog-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-12 mb-5">
						<div class="single-blog-item">
							<img src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="hdsd" class="img-fluid">
							<img src="" alt="" class="img-fluid">

							<div class="blog-item-content mt-5">
								<div class="blog-item-meta mb-3">


									<?php
									$categories = get_the_category();

									if (!empty($categories)) { ?>


										<span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i>

											<?php

											foreach ($categories as $category) { ?>

												<?php echo esc_html($category->name) ?>

											<?php
												if ($category !== end($categories)) {
													echo ', ';
												}
											}

											?>

										</span>

									<?php
									}
									?>
									<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>


								</div>

								<h2 class="mb-4 text-md"><?php echo the_title(); ?></h2>

								<blockquote class="quote">
									<?php echo get_post_meta(get_the_ID(), 'single-blog-blockquote', true) ?>
								</blockquote>

								<p class="lead mb-4"><?php echo the_content(); ?></p>


								<div class="mt-5 clearfix">



									<ul class="float-left list-inline tag-option">

										<?php
										$tags = get_the_tags();

										if (!empty($tags)) { ?>

											<li class="list-inline-item">

												<?php

												foreach ($tags as $tag) {
													echo esc_html($tag->name);
													if ($tag !== end($tags)) {
														echo ', ';
													}
												}  ?>

											</li> <?php

												}
													?>

									</ul>



									<ul class="float-right list-inline">
										<li class="list-inline-item"> Share: </li>


										<li class="list-inline-item"><a href="#!"><i class="icofont-facebook"></i></a></li>
										<li class="list-inline-item"><a href="#!"><i class="icofont-twitter"></i></a></li>
										<li class="list-inline-item"><a href="#!"><i class="icofont-pinterest"></i></a></li>
										<li class="list-inline-item"><a href="#!"><i class="icofont-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- comments here  -->
					<!-- comments form here -->
				</div>
			</div>

			<!-- sidebar here  -->
			<?php

			require_once('templates/blog/sidebar.php');
			?>

		</div>
	</div>
</section>


<?php
get_footer();
?>