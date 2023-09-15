<!-- <?php get_header(); ?>

<section class="page-title">
    <div class="container">
        <h1><?php
            if (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_author()) {
                the_post();
                echo 'Author Archives: ' . get_the_author();
                rewind_posts();
            } elseif (is_day()) {
                echo 'Daily Archives: ' . get_the_date();
            } elseif (is_month()) {
                echo 'Monthly Archives: ' . get_the_date('F Y');
            } elseif (is_year()) {
                echo 'Yearly Archives: ' . get_the_date('Y');
            } else {
                echo 'Archives';
            }
            ?></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article <?php post_class(); ?>>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="meta">
                                <span class="author">By <?php the_author(); ?></span>
                                <span class="date"><?php the_date(); ?></span>
                            </div>
                            <?php the_excerpt(); ?>
                        </article>

                    <?php endwhile; ?>

                    <div class="pagination">
                        <?php the_posts_pagination(); ?>
                    </div>

                <?php else : ?>
                    <p><?php _e('Sorry, no posts found.', 'your-text-domain'); ?></p>
                <?php endif; ?>

            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?> -->
