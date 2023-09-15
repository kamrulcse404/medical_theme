<div class="feature-block d-lg-flex">
    <div class="feature-item mb-5 mb-lg-0">
        <div class="feature-icon mb-4">
            <i class="icofont-surgeon-alt"></i>
        </div>
        <span><?php echo get_post_meta(get_the_ID(), 'index-feature-service-title', true) ?></span>
        <h4 class="mb-3"><?php echo get_post_meta(get_the_ID(), 'index-feature-service-sub-title', true) ?></h4>
        <p class="mb-4"><?php echo get_post_meta(get_the_ID(), 'index-feature-service-info', true) ?></p>
        <a href="<?php  echo home_url('/appoinment') ?>" class="btn btn-main btn-round-full">Make a appoinment</a>
    </div>

    <div class="feature-item mb-5 mb-lg-0">
        <div class="feature-icon mb-4">
            <i class="icofont-ui-clock"></i>
        </div>
        <span><?php echo get_post_meta(get_the_ID(), 'index-feature-time-title', true) ?></span>
        <h4 class="mb-3"><?php echo get_post_meta(get_the_ID(), 'index-feature-time-sub-title', true) ?></h4>
        <ul class="w-hours list-unstyled">
            <li class="d-flex justify-content-between"><?php echo get_post_meta(get_the_ID(), 'index-feature-time-day-one', true) ?><span><?php echo get_post_meta(get_the_ID(), 'index-feature-time-one', true) ?></span></li>
            <li class="d-flex justify-content-between"><?php echo get_post_meta(get_the_ID(), 'index-feature-time-day-two', true) ?><span><?php echo get_post_meta(get_the_ID(), 'index-feature-time-two', true) ?></span></li>
            <li class="d-flex justify-content-between"><?php echo get_post_meta(get_the_ID(), 'index-feature-time-day-Three', true) ?><span><?php echo get_post_meta(get_the_ID(), 'index-feature-time-three', true) ?></span></li>
        </ul>
    </div>

    <div class="feature-item mb-5 mb-lg-0">
        <div class="feature-icon mb-4">
            <i class="icofont-support"></i>
        </div>
        <span>
            <li class="d-flex justify-content-between"><?php echo get_post_meta(get_the_ID(), 'index-emergency-title', true) ?></span>
        <h4 class="mb-3"><?php echo get_post_meta(get_the_ID(), 'index-emergency-contact', true) ?></h4>
        <p><?php echo get_post_meta(get_the_ID(), 'index-emergency-info', true) ?></p>
    </div>
</div>