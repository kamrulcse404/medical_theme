<!-- footer Start -->

<?php
global $doc_pro;
?>


<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="images/logo.png" alt="" class="img-fluid">
                    </div>
                    <p><?php echo $doc_pro['footer-description'] ?></p>

                    <ul class="list-inline footer-socials mt-4">
                        <li class="list-inline-item">
                            <a href="<?php echo $doc_pro['social-media-icon-one-url'] ?>"><i class="<?php echo $doc_pro['social-media-icon-one'] ?>"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo $doc_pro['social-media-icon-two-url'] ?>"><i class="<?php echo $doc_pro['social-media-icon-two'] ?>"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo $doc_pro['social-media-icon-three-url'] ?>"><i class="<?php echo $doc_pro['social-media-icon-two'] ?>"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">

                    <h4 class="text-capitalize mb-3">

                        <?php
                        $menu_locations = get_nav_menu_locations();
                        $menu_location = 'footer_menu_1';
                        if (isset($menu_locations[$menu_location])) {
                            $menu_id = $menu_locations[$menu_location];
                        }
                        $menu_object = wp_get_nav_menu_object($menu_id);
                        $menu_name = $menu_object->name;
                        echo $menu_name;
                        ?>
                    </h4>

                    <div class="divider mb-4"></div>

                    <?php
                    if (has_nav_menu('footer_menu_1')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer_menu_1',
                            'container' => 'ul',
                            'container_class' => '',
                            'menu_class' => 'list-unstyled footer-menu lh-35',
                        ));
                    }
                    ?>


                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">

                    <h4 class="text-capitalize mb-3">

                        <?php
                        $menu_locations = get_nav_menu_locations();
                        $menu_location = 'footer_menu_2';
                        // print_r($menu_locations[$menu_location]);

                        if (isset($menu_locations[$menu_location])) {
                            $menu_id = $menu_locations[$menu_location];
                        }
                        $menu_object = wp_get_nav_menu_object($menu_id);
                        $menu_name = $menu_object->name;
                        echo $menu_name;
                        ?>
                    </h4>

                    <div class="divider mb-4"></div>
                    <?php
                    if (has_nav_menu('footer_menu_1')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer_menu_2',
                            'container' => 'ul',
                            'container_class' => '',
                            'menu_class' => 'list-unstyled footer-menu lh-35',
                        ));
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3"><?php echo $doc_pro['footer-menu-last'] ?></h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span class="h6 mb-0"><?php echo $doc_pro['support-duration'] ?></span>
                        </div>
                        <h4 class="mt-2"><a href="mailto:support@email.com"><?php echo $doc_pro['support-mail'] ?></a></h4>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <span class="h6 mb-0"><?php echo $doc_pro['time-duaration'] ?></span>
                        </div>
                        <h4 class="mt-2"><a href="tel:<?php echo $doc_pro['contact-number'] ?>"><?php echo $doc_pro['contact-number'] ?></a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm py-4 mt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="copyright">
                        <?php echo $doc_pro['copyright-section'] ?><a href="<?php echo $doc_pro['author-url'] ?>"><?php echo $doc_pro['author'] ?></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                        <form action="#" class="subscribe">
                            <input type="text" class="form-control" placeholder="Your Email address" required>
                            <button type="submit" class="btn btn-main-2 btn-round-full">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop scroll-top-to" href="#top">
                        <i class="icofont-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>