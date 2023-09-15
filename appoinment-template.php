<div class="row align-items-center">
    <div class="col-lg-6 ">
        <div class="appoinment-content">
            <img src="<?php echo get_post_meta(get_the_ID(), 'index-appoinment-image', true) ?>" alt="" class="img-fluid">
            <div class="emergency">
                <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i><?php echo get_post_meta(get_the_ID(), 'index-appoinment-contact', true) ?></h2>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-10 ">
        <div class="appoinment-wrap mt-5 mt-lg-0">
            <h2 class="mb-2 title-color"><?php echo get_post_meta(get_the_ID(), 'index-appoinment-title', true) ?></h2>
            <p class="mb-4"><?php echo get_post_meta(get_the_ID(), 'index-appoinment-desc', true) ?></p>


            <form id="get_appoinment" ajax_url="<?php echo admin_url('admin-ajax.php'); ?>" class="appoinment-form">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<select class="form-control" id="exampleFormControlSelect1" name="department">


										<?php

										$departments = new WP_Query(array(
											'post_type' => 'departments',
										));

										?>

										<option> --Select-- </option>
										<?php while ($departments->have_posts()) : $departments->the_post(); ?>

											<option value="<?php echo the_title() ?>"><?php echo the_title() ?></option>

										<?php endwhile;
										wp_reset_postdata(); ?>

									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<select class="form-control" id="exampleFormControlSelect2" name="doctor">

										<?php

										$doctors = new WP_Query(array(
											'post_type' => 'doctor',
										));

										?>

										<option> --Select-- </option>
										<?php while ($doctors->have_posts()) : $doctors->the_post(); ?>

											<option value="<?php echo the_title() ?>"><?php echo the_title() ?></option>

										<?php endwhile;
										wp_reset_postdata(); ?>

									</select>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="appoinment_date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="appoinment_time" id="time" type="text" class="form-control" placeholder="Time">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="full_name" id="get_name" type="text" class="form-control" placeholder="Full Name">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="phone_number" id="phone" type="Number" class="form-control" placeholder="Phone Number">
								</div>
							</div>
						</div>
						<div class="form-group-2 mb-4">
							<textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
						</div>

						<!-- <a class="btn btn-main btn-round-full" href="confirmation.html">Make Appoinment<i class="icofont-simple-right ml-2"></i></a> -->

						<input type="submit" value="Make Appoinment" class="btn btn-main btn-round-full">


					</form>



        </div>
    </div>
</div>