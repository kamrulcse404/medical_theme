<?php


/**
 * Template Name: blog
 **/
get_header();
?>

<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white"><?php echo get_post_meta(get_the_ID(), 'blog-container-title', true)?></span>
					<h1 class="text-capitalize mb-5 text-lg"><?php echo get_post_meta(get_the_ID(), 'blog-container-desc', true)?></h1>
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


					<?php


					// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$blogs = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 2,
						'paged' => $paged, // Add the current page number to the query
						'orderby' => 'date',
						'order' => 'DESC',
					));

					?>


					<?php
					while ($blogs->have_posts()) {
						$blogs->the_post(); ?>

						<div class="col-lg-12 col-md-12 mb-5">
							<div class="blog-item">
								<div class="blog-thumb">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid ">
								</div>

								<div class="blog-item-content">
									<div class="blog-item-meta mb-3 mt-4">
										<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
										<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
									</div>

									<h2 class="mt-3 mb-3"><a href="blog-single.html"><?php echo the_title(); ?></a></h2>

									<p class="mb-4"><?php echo the_content(); ?></p>

									<a href="<?php echo the_permalink(); ?>" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
								</div>
							</div>
						</div>
					<?php
					}

					?>



					<div class="col-lg-12 col-md-12">
						<nav class="pagination py-2 d-inline-block">
							<div class="nav-links">
								<?php
								$big = 999999999; // A large number

								echo paginate_links(array(
									'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
									'format' => '?paged=%#%',
									'current' => max(1, get_query_var('paged')),
									'total' => $blogs->max_num_pages,
									'prev_text' => '<i class="icofont-thin-double-left"></i>',
									'next_text' => '<i class="icofont-thin-double-right"></i>',
								));
								?>
							</div>
						</nav>
					</div>

				</div>
			</div>
			<!-- sidebar here  -->
			<?php
			require_once('templates/blog/sidebar.php');
			?>
		</div>
	</div>
</section>

<?php get_footer();
?>