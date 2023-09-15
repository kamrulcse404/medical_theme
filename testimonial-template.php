<div class="col-lg-12 testimonial-wrap-2">

    <?php
    $testimonials = new WP_Query(array(
        'post_type' => 'testimonial',
    ))
    ?>

    <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>

        <div class="testimonial-block style-2  gray-bg">
            <i class="icofont-quote-right"></i>

            <div class="testimonial-thumb">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
            </div>

            <div class="client-info ">
                <h4> <?php echo the_title(); ?></h4>
                <span><?php echo get_post_meta(get_the_ID(), 'index-testimonial-doc-name', true) ?></span>
                <p>
                    <?php echo the_content(); ?>
                </p>
            </div>
        </div>


    <?php endwhile;
    wp_reset_postdata();
    ?>

<!-- 
    <div class="testimonial-block style-2  gray-bg">
        <i class="icofont-quote-right"></i>

        <div class="testimonial-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/images/team/test-thumb1.jpg" alt="" class="img-fluid">
        </div>

        <div class="client-info ">
            <h4>Amazing service!</h4>
            <span>John Partho</span>
            <p>
                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
            </p>
        </div>
    </div> -->




    <!-- <div class="testimonial-block style-2  gray-bg">
        <div class="testimonial-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/images/team/test-thumb2.jpg" alt="" class="img-fluid">
        </div>

        <div class="client-info">
            <h4>Expert doctors!</h4>
            <span>Mullar Sarth</span>
            <p>
                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
            </p>
        </div>

        <i class="icofont-quote-right"></i>
    </div> -->

    <!-- <div class="testimonial-block style-2  gray-bg">
        <div class="testimonial-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/images/team/test-thumb3.jpg" alt="" class="img-fluid">
        </div>

        <div class="client-info">
            <h4>Good Support!</h4>
            <span>Kolis Mullar</span>
            <p>
                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
            </p>
        </div>

        <i class="icofont-quote-right"></i>
    </div> -->

    <!-- <div class="testimonial-block style-2  gray-bg">
        <div class="testimonial-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/images/team/test-thumb4.jpg" alt="" class="img-fluid">
        </div>

        <div class="client-info">
            <h4>Nice Environment!</h4>
            <span>Partho Sarothi</span>
            <p class="mt-4">
                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
            </p>
        </div>
        <i class="icofont-quote-right"></i>
    </div> -->

    <!-- <div class="testimonial-block style-2  gray-bg">
        <div class="testimonial-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/images/team/test-thumb1.jpg" alt="" class="img-fluid">
        </div>

        <div class="client-info">
            <h4>Modern Service!</h4>
            <span>Kolis Mullar</span>
            <p>
                They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
            </p>
        </div>
        <i class="icofont-quote-right"></i>
    </div> -->
</div>