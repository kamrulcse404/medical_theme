<div class="block">
    <div class="divider mb-3"></div>
    <span class="text-uppercase text-sm letter-spacing "><?php echo get_post_meta(get_the_ID(), 'index-banner-title', true) ?></span>
    <h1 class="mb-3 mt-3"><?php echo get_post_meta(get_the_ID(), 'index-banner-sub-title', true) ?></h1>

    <p class="mb-4 pr-5"><?php echo get_post_meta(get_the_ID(), 'index-banner-desc', true) ?></p>
    <div class="btn-container ">
        <a href="<?php echo home_url('/appoinment') ?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i class="icofont-simple-right ml-2  "></i></a>
    </div>
</div>