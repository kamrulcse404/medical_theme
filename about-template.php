<div class="row align-items-center">
    <div class="col-lg-4 col-sm-6">
        <div class="about-img">
            <img src="<?php echo get_post_meta(get_the_ID(), 'index-about-img-one', true); ?>" alt="" class="img-fluid">
            <img src="<?php echo get_post_meta(get_the_ID(), 'index-about-img-two', true); ?>" alt="" class="img-fluid mt-4">
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="about-img mt-4 mt-lg-0">
            <img src="<?php echo get_post_meta(get_the_ID(), 'index-about-img-three', true); ?>" alt="" class="img-fluid">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="about-content pl-4 mt-4 mt-lg-0">
            <h2 class="title-color"><?php echo get_post_meta(get_the_ID(), 'index-about-title', true); ?></h2>
            <p class="mt-4 mb-5"><?php echo get_post_meta(get_the_ID(), 'index-about-desc', true); ?></p>

            <a href="<?php echo home_url('/service') ?>" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
        </div>
    </div>
</div>