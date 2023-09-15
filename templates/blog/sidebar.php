<div class="col-lg-4">
    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
        <div class="sidebar-widget search  mb-3 ">
            <h5>Search Here</h5>
            <!-- <form action="#" class="search-form">
                <input type="text" class="form-control" placeholder="search">
                <i class="ti-search"></i>
            </form> -->
            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="search" class="form-control" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s">
                <!-- <button type="submit" class="ti-search"></button> -->
            </form>

        </div>


        <div class="sidebar-widget latest-post mb-3">
            <h5>Recent Posts</h5>

            <div class="py-2">

                <?php
                $args = array(
                    'post_type' => 'post', // You can specify a custom post type if needed
                    'posts_per_page' => 4, // Display only one post
                    'orderby' => 'date', // Order by date (most recent)
                    'order' => 'DESC', // Display in descending order (most recent first)
                );

                $last_post = new WP_Query($args);

                if ($last_post->have_posts()) {
                    while ($last_post->have_posts()) {
                        $last_post->the_post();

                ?>

                        <span class="text-sm text-muted"><?php the_date() ?></span>
                        <h6 class="my-2"><a href="<?php echo get_the_permalink() ?>"><?php echo the_title(); ?></a></h6>


                <?php
                    }
                    wp_reset_postdata(); // Reset the post data
                }
                ?>

            </div>

        </div>



        <div class="sidebar-widget category mb-3">
            <h5 class="mb-4">Categories</h5>

            <ul class="list-unstyled">


                <?php
                $categories = get_categories();

                if ($categories) {

                    foreach ($categories as $category) {
                        echo '<li  class="align-items-center"><a href="' . get_category_link($category->term_id) . '">' . esc_html($category->name) . '</a></li>';
                    }
                }

                ?>
            </ul>
        </div>


        <div class="sidebar-widget tags mb-3">
            <h5 class="mb-4">Tags</h5>

            <?php
            $tags = get_tags();


            foreach ($tags as $tag) {
                echo '<a href="' . get_tag_link($tag) . '">' . esc_html($tag->name) . '</a>';
            }

            ?>

        </div>

        <!-- <div class="sidebar-widget schedule-widget mb-3">
            <h5 class="mb-4">Time Schedule</h5>

            <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center">
                    <span><?php //echo get_post_meta(get_the_ID(), 'sidebar-schedule-day-one', true) ?></span>
                    <span><?php //echo get_post_meta(get_the_ID(), 'sidebar-schedule-time-one', true) ?></span>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                    <span><?php //echo get_post_meta(get_the_ID(), 'sidebar-schedule-day-two', true) ?></span>
                    <span><?php //echo get_post_meta(get_the_ID(), 'sidebar-schedule-time-two', true) ?></span>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                    <span><?php //echo get_post_meta(get_the_ID(), 'sidebar-schedule-off-day', true) ?></span>
                    <span>Closed</span>
                </li>
            </ul>

            <div class="sidebar-contatct-info mt-4">
                <p class="mb-0">Need Urgent Help?</p>
                <h3><?php //echo get_post_meta(get_the_ID(), 'sidebar-schedule-urgent-contact', true) ?></h3>
            </div>
        </div> -->

    </div>
</div>