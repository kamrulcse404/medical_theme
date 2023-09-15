<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
            <div class="section-title">
                <h2><?php echo get_post_meta(get_the_ID(), 'index-service-title', true) ?></h2>
                <div class="divider mx-auto my-4"></div>
                <p><?php echo get_post_meta(get_the_ID(), 'index-service-desc', true) ?></p>
            </div>
        </div>
    </div>

    <div class="row">

        <?php
        $services = get_post_meta(get_the_ID(), "index_service", true);
        ?>


        <?php
        foreach ($services as $key => $service) {
            $title = $desc = $icon = ''; ?>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">

                        <?php

                        if (isset($service['index_service_icon'])) {
                            $icon = esc_html($service['index_service_icon']);
                        } ?>

                        <i class="<?php echo $icon ?> text-lg"></i>
                        <!-- <i class="icofont-laboratory text-lg"></i> -->

                        <?php

                        if (isset($service['index_service_title'])) {
                            $title = esc_html($service['index_service_title']);
                        } ?>

                        <h4 class="mt-3 mb-3"><?php echo $title ?></h4>
                    </div>

                    <?php

                    if (isset($service['index_service_info'])) {
                        $desc = esc_html($service['index_service_info']);
                    } ?>


                </div>
                <div class="content">
                    <p class="mb-4"><?php echo $desc ?></p>
                </div>
            </div>


        <?php
        }
        ?>

        <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-laboratory text-lg"></i>
                            <h4 class="mt-3 mb-3">Laboratory services</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div> -->

        <!-- <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                    <i class="icofont-heart-beat-alt text-lg"></i>
                    <h4 class="mt-3 mb-3">Heart Disease</h4>
                </div>
                <div class="content">
                    <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                </div>
            </div>
        </div> -->

        <!-- <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                    <i class="icofont-tooth text-lg"></i>
                    <h4 class="mt-3 mb-3">Dental Care</h4>
                </div>
                <div class="content">
                    <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                </div>
            </div>
        </div> -->


        <!-- <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                    <i class="icofont-crutch text-lg"></i>
                    <h4 class="mt-3 mb-3">Body Surgery</h4>
                </div>

                <div class="content">
                    <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                </div>
            </div>
        </div> -->

        <!-- <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                    <i class="icofont-brain-alt text-lg"></i>
                    <h4 class="mt-3 mb-3">Neurology Sargery</h4>
                </div>
                <div class="content">
                    <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                </div>
            </div>
        </div> -->

        <!-- <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                    <i class="icofont-dna-alt-1 text-lg"></i>
                    <h4 class="mt-3 mb-3">Gynecology</h4>
                </div>
                <div class="content">
                    <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                </div>
            </div>
        </div> -->
    </div>
</div>