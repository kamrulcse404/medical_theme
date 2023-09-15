<?php


/**
 * Template Name: blog
 **/
get_header();
?>


<section class="section blog-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">

					<?php if (have_posts()) : ?>
						<div class="post-list">
							<?php while (have_posts()) : the_post(); ?>
								<article <?php post_class(); ?>>
									<div class="blog-thumb">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid ">
									</div>
									<header class="entry-header">
										<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</header>

									<div class="entry-content">
										<?php the_excerpt(); ?>
									</div>
								</article>
							<?php endwhile; ?>
						</div>

					<?php else : ?>
						<p><?php _e('Sorry, no results were found.', 'your-text-domain'); ?></p>
					<?php endif; ?>

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





<!-- <div id="primary" class="content-area">
    <main id="main" class="site-main">

        <header class="page-header">
            <h1 class="page-title">
                <?php printf(__('Search Results for: %s', 'your-text-domain'), '<span>' . get_search_query() . '</span>'); ?>
            </h1>
        </header>

        <?php if (have_posts()) : ?>
            <div class="post-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p><?php _e('Sorry, no results were found.', 'your-text-domain'); ?></p>
        <?php endif; ?>

    </main>
</div> -->