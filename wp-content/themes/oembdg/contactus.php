<?php /* Template Name: Contact US */ ?>
<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['firstName']) === '') {
		$firstNameError = 'Please enter your first name.';
		$hasError = true;
	} else {
		$firstName = trim($_POST['firstName']);
	}

  if(trim($_POST['surName']) === '') {
		$surNameError = 'Please enter your surname.';
		$hasError = true;
	} else {
		$surName = trim($_POST['surName']);
	}

  if(trim($_POST['phoneNumber']) === '') {
		$phoneNumberError = 'Please enter your phone number.';
		$hasError = true;
	} else {
		$phoneNumber = trim($_POST['phoneNumber']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['message']) === '') {
		$messageError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$message = stripslashes(trim($_POST['message']));
		} else {
			$message = trim($_POST['message']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
    console.log('hello, message sent!');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $firstName \n\n Surname: $surName \n\n Phone No.: $phoneNumber \n\nEmail: $email \n\nComments: $message";
		$headers = 'From: '.$firstName.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>
<?php
get_header('');
?>
<div id="second__heading" style="position: relative; overflow: hidden;">
    <div class="mortar-image" style="position: absolute; top: 0; right: -4rem; width: 563px; height: auto; z-index: 1;">
        <img class="mortar rellax" data-rellax-speed="2" data-rellax-percentage="0.5"
            src="<?php echo get_template_directory_uri(); ?>/asset/mortar.png" alt="">
        <img class="leaf-1 rellax" data-rellax-speed="5" data-rellax-percentage="0.5"
            src="<?php echo get_template_directory_uri(); ?>/asset/leaf-1.png" alt="">
        <img class="leaf-2 rellax" data-rellax-speed="3" data-rellax-percentage="0.5"
            src="<?php echo get_template_directory_uri(); ?>/asset/leaf-2.png" alt="">
    </div>
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper" style="margin-top: 9.5rem;">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word">contact us</div>
                    </div>
                </div>
            </div>
            <div class="col second__heading-content contact__heading">
                <div class="second__heading-content-box">
                    <img class="contact-background-image"
                        src="<?php echo get_template_directory_uri(); ?>/asset/contact-bg.png" alt="">
                    <div class="second__heading-text">
                        <h3 class="title-en">Contact Us</h3>
                    </div>
                </div>
                <div class="row contact__first">
                    <?php if( have_rows('head_office') ): ?>
                    <?php while( have_rows('head_office') ): the_row(); ?>
                    <div class="col-12 col-lg-auto contact__office">
                        <h4 class="title-en">Head Office</h4>
                        <p class="title-th">ที่อยู่บริษัท</p>
                        <p class="title-description"><?php echo the_sub_field('head_office_location_detail'); ?></p>
                        <div class="contact__office-map">
                            <div class="map-th">
                                <a href="<?php echo the_sub_field('head_office_google_maps'); ?>" target="_blank">
                                    <p>แผนที่บริษัท</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png"
                                        alt="">
                                </a>
                            </div>
                            <div class="map-en">
                                <a href="<?php echo the_sub_field('head_office_google_maps'); ?>" target="_blank">
                                    <p>Google Maps</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if( have_rows('contact_info') ): ?>
                    <?php while( have_rows('contact_info') ): the_row(); ?>
                    <div class="col-12 col-lg-auto contact__info">
                        <h4 class="title-en">Contact Info</h4>
                        <p>โทรศัพท์ : <?php echo the_sub_field('contact_info_tel'); ?></p>
                        <p>โทรสาร : <?php echo the_sub_field('head_office_fax'); ?></p>
                        <p>ลูกค้าสัมพันธ์ : <?php echo the_sub_field('head_office_customer_relations'); ?></p>
                        <p>Email : <a href="https://www.google.com"><?php echo the_sub_field('head_office_mail'); ?></a>
                        </p>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="row contact__second">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        <div class="col-12 col-lg-auto contact__form">
                            <h4 class="title-en">Send us a message</h4>
                            <?php if(isset($emailSent) && $emailSent == true) { ?>
                            <div class="thanks">
                                <p>Thanks, your email was sent successfully.</p>
                            </div>
                            <?php } else { ?>
                            <?php the_content(); ?>
                            <!-- <?php if(isset($hasError) || isset($captchaError)) { ?>
                            <p class="error">Sorry, an error occured.
                            <p>
                                <?php } ?>
                            <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                                <div class="contact__form-first-row">
                                    <div class="form-name">
                                        <p>ชื่อ</p>
                                        <input name="firstName" id="firstName" type="text"
                                            value="<?php if(isset($_POST['firstName']))  echo $_POST['firstName'];?>">
                                    </div>
                                    <div class="form-surname">
                                        <p>นามสกุล</p>
                                        <input name="surName" id="surName" type="text"
                                            value="<?php if(isset($_POST['surName']))  echo $_POST['surName'];?>">
                                    </div>
                                </div>
                                <div class="contact__form-second-row">
                                    <div class="form-tel">
                                        <p>หมายเลขโทรศัพท์</p>
                                        <input name="phoneNumber" id="phoneNumber" type="number"
                                            value="<?php if(isset($_POST['phoneNumber']))  echo $_POST['phoneNumber'];?>">
                                        <?php if($phoneNumberError != '') { ?>
                                        <span class="error"><?=$phoneNumberError;?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="form-mail">
                                        <p>อีเมล</p>
                                        <input type="text" name="email" id="email"
                                            value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>">
                                        <?php if($emailError != '') { ?>
                                        <p class="error"><?=$emailError;?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="contact__form-third-row">
                                    <div class="form-textarea">
                                        <p>ฝากข้อความ</p>
                                        <textarea name="message" id="message" cols="30" rows="6"
                                            placeholder="พิมพ์ข้อความที่นี่"></textarea>
                                    </div>
                                </div>
                                <button class="contact-submit" type="submit">
                                    <span>ส่งข้อความ</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/contact-submit-icon.png"
                                        alt="">
                                </button>
                            </form> -->
                            <?php } ?>
                        </div>
                    </div><!-- .post -->
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact__factory">
    <div class="container p-lg-0">
        <?php if( have_rows('factory_information') ): ?>
        <?php while( have_rows('factory_information') ): the_row(); ?>
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word">factory information</div>
                    </div>
                </div>
            </div>
            <div class="col contact__factory-content">
                <img class="contact__factory-background-image"
                    src="<?php echo get_template_directory_uri(); ?>/asset/factory-bg.png" alt="">
                <p class="tag-title text-uppercase"><?php echo the_sub_field('factory_information_tag_title'); ?>
                </p>
                <h4 class="title-en"><?php echo the_sub_field('factory_information_title'); ?></h4>
                <?php
            if( have_rows('factory_information_factory_list') ):
              while( have_rows('factory_information_factory_list') ) : the_row();
            
          ?>
                <div class="row contact__factory-list">
                    <div class="d-none d-lg-block col-auto contact__factory-list-image">
                        <?php if( get_sub_field('factory_list_factory_image') ): ?>
                        <img src="<?php the_sub_field('factory_list_factory_image'); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col contact__factory-list-text">
                        <div class="contact__factory-list-text-box">
                            <h4 class="title-en"><?php echo the_sub_field('factory_list_title'); ?></h4>
                            <?php if( get_sub_field('factory_list_factory_image') ): ?>
                            <img class="contact__factory-list-image-mobile"
                                src="<?php the_sub_field('factory_list_factory_image'); ?>" />
                            <?php endif; ?>
                            <p class="title-description"><?php echo the_sub_field('factory_list_description'); ?>
                            </p>
                            <p class="title-description facotry-location">
                                <?php echo the_sub_field('factory_list_location'); ?></p>
                            <div class="contact__office-map">
                                <div class="map-th">
                                    <a href="<?php echo the_sub_field('factory_list_map'); ?>" target="_blank">
                                        <p>แผนที่บริษัท</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png"
                                            alt="">
                                    </a>
                                </div>
                                <div class="map-en">
                                    <a href="<?php echo the_sub_field('factory_list_map'); ?>" target="_blank">
                                        <p>Google Maps</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
            endwhile;
              endif; 
          ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


<?php
get_footer();
?>