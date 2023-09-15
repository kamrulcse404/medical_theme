<div class="row clients-logo">

    <?php
    $logos = get_post_meta(get_the_ID(), 'index_clients', true);

    foreach ((array)$logos as $key => $logo) {
        $img = '';
        if (isset($logo['index_client_logo'])) {
            $img = esc_html($logo['index_client_logo']);
        } 
        
        if (!empty($logos)) {?>

        <div class="col-lg-2">
            <div class="client-thumb">
                <img src="<?php echo $img ?>" alt="" class="img-fluid">
            </div>
        </div>

    <?php
        }
    }
    ?>


    <!-- <div class="col-lg-2">
        <div class="client-thumb">
            <img src="<?php //echo get_template_directory_uri(); ?>/images/about/1.png" alt="" class="img-fluid">
        </div>
    </div> -->

   
</div>