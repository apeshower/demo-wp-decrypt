<?php /* Template Name: Process */ ?>
<?php
get_header();
?>
<div id="top__section">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper" style="margin-top:7rem;">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word text-uppercase">our <?php echo the_field('process_heading_title') ?></div>
                    </div>
                </div>
            </div>
            <div class="col heading-section">
                <?php if( get_field('process_heading_image') ): ?>
                    <img class="heading-image" src="<?php the_field('process_heading_image'); ?>" />
                <?php endif; ?>
                <!-- <img class="heading-image" src="<?php echo get_template_directory_uri(); ?>/asset/process-heading.png"
                    alt=""> -->
                <div class="heading-section__text">
                    <h3 class="title-en"><?php echo the_field('process_heading_title') ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="process__step">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word text-uppercase">steps</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <ul class="stack-cards js-stack-cards" style="padding-left:0;border-radius:30px;">
                    <?php if( have_rows('process_step_main_title') ): ?>
                    <?php while( have_rows('process_step_main_title') ): the_row(); ?>
                    <li class="stack-cards__item bg radius-lg shadow-md js-stack-cards__item"
                        style="border-radius: 30px;">
                        <div class="row process__step-content">
                            <div class="col-12 col-lg-4 process__step-content-text">
                                <p class="text-uppercase tag-title">
                                    <?php echo the_sub_field('process_step_main_title_tag_title'); ?></p>
                                <h4 class="title-en"><?php echo the_sub_field('process_step_main_title_main_title'); ?>
                                </h4>
                                <p class="title-description">
                                    <?php echo the_sub_field('process_step_main_title_description'); ?></p>
                            </div>
                            <div class="col-12 col-lg process__step-list-first">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/process-stacked.png" alt="">
                            </div>
                            <img class="process__step-background-image"
                                src="<?php echo get_template_directory_uri(); ?>/asset/process-step-bg.png" alt="">
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php
                    if( have_rows('process_step') ):
                        while( have_rows('process_step') ) : the_row();
                
                    ?>
                    <li class="stack-cards__item bg radius-lg shadow-md js-stack-cards__item"
                        style="border-radius: 30px;">
                        <div class="row process__step-content">
                            <div class="col-12 col-lg-4 process__step-content-text">
                                <p class="text-uppercase tag-title">
                                    <?php echo the_sub_field('process_step_tag_title'); ?></p>
                                <h4 class="title-en"><?php echo the_sub_field('process_step_main_title'); ?></h4>
                                <p class="title-description"><?php echo the_sub_field('process_step_description'); ?>
                                </p>
                            </div>
                            <div class="col-12 col-lg process__step-list">
                                <div class="step-text">
                                    <?php if( get_sub_field('process_step_inner_icon') ): ?>
                                    <img class="step-icon" src="<?php the_sub_field('process_step_inner_icon'); ?>" />
                                    <?php endif; ?>
                                    <h4 class="title-en"><?php echo the_sub_field('process_step_inner_title'); ?></h4>
                                    <p class="title-description">
                                        <?php echo the_sub_field('process_step_inner_description'); ?></p>
                                </div>
                                <div class="step-image-box d-none d-lg-block">
                                    <?php if( get_sub_field('process_step_inner_image') ): ?>
                                    <img src="<?php the_sub_field('process_step_inner_image'); ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php 
                    endwhile;
                        endif; 
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="process__detail">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word text-uppercase">details</div>
                    </div>
                </div>
            </div>
            <div class="col process__detail-content">
                <?php if( have_rows('terms_of_service') ): ?>
                <?php while( have_rows('terms_of_service') ): the_row(); ?>
                <div class="row process__detail-policy">
                    <div class="col-auto order-2 order-xl-1 process__detail-policy-image">
                        <?php if( get_sub_field('terms_of_service_image') ): ?>
                        <img src="<?php the_sub_field('terms_of_service_image'); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-lg order-1 order-xl-2 process__detail-policy-text">
                        <h3 class="title-en"><?php echo the_sub_field('terms_of_service_title'); ?></h3>
                        <p class="title-description"><?php echo the_sub_field('terms_of_service_description'); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <div class="row process__detail-payment">
                    <?php if( have_rows('operating_process') ): ?>
                    <?php while( have_rows('operating_process') ): the_row(); ?>
                    <div class="col-auto order-2 order-xl-1 process__detail-payment-image">
                        <?php if( get_sub_field('operating_process_image') ): ?>
                        <img src="<?php the_sub_field('operating_process_image'); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col order-1 order-xl-2 process__detail-payment-text">
                        <h3 class="title-en"><?php echo the_sub_field('operating_process_main_title'); ?></h3>
                        <?php
                        if( have_rows('operating_process_step') ):
                            while( have_rows('operating_process_step') ) : the_row();
                    
                        ?>
                        <div class="process__detail-payment-step">
                            <?php if( get_sub_field('operating_process_step_icon') ): ?>
                            <img src="<?php the_sub_field('operating_process_step_icon'); ?>" />
                            <?php endif; ?>
                            <div class="process__detail-payment-step__text">
                                <h4 class="title-en"><?php echo the_sub_field('operating_process_step_title'); ?></h4>
                                <p class="title-description">
                                    <?php echo the_sub_field('operating_process_step_description'); ?></p>
                            </div>
                        </div>
                        <?php 
                        endwhile;
                            endif; 
                        ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- <div class="row process__detail-shipping">
                    <div class="col-auto order-2 order-lg-1 process__detail-shipping-image">
                        <img src="<?php echo get_template_directory_uri();?>/asset/process-shipping.png" alt="">
                    </div>
                    <div class="col order-1 order-lg-2 process__detail-shipping-text">
                        <h3 class="title-en">ระยะเวลาดำเนินงาน</h3>
                        <div class="process__detail-shipping-step">
                            <div class="process__detail-shipping-step__text">
                                <h4 class="title-en">Step 1</h4>
                                <p class="title-description">ระยะเวลาการผลิตสินค้าไม่เกิน 30 วันทำการ หลังได้รับบรรจุภัณฑ์พร้อมอุปกรณ์ ครบถ้วน ระยะเวลาการพัฒนาสูตร พัฒนาสูตรใหม่ตามความต้องการ 14 วัน ทำการ  หมายเหตุ : หากมีการปรับชนิด/รูปแบบใหม่หลังส่งตัวอย่างถือว่าเป็นการพัฒนาใหม่</p>
                            </div>
                            <div class="process__detail-shipping-step__text">
                                <h4 class="title-en">Step 2</h4>
                                <p class="title-description">ระยะเวลาการขอเอกสารจดแจ้งจาก อย. ดำเนินการขอใบจดแจ้ง จากทาง อย. 60-90 วันทำการ การขอใบ Certificate of Free Sales 14 วันทำการ</p>
                            </div>
                            <div class="process__detail-shipping-step__text">
                                <h4 class="title-en">Step 3</h4>
                                <p class="title-description">ระยะเวลาออกแบบ: 1. โลโก้, ฉลาก, กล่อง, ภาพสินค้า 7-14 วันทำการ 2. โปรชัวร์, ป้ายโฆษณา, แคตตาล็อค 14 วันทำการ</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- <div id="process__faq">
    <?php if( have_rows('faq') ): ?>
    <?php while( have_rows('faq') ): the_row(); ?>
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word text-uppercase">faq</div>
                    </div>
                </div>
            </div>
            <div class="col process__faq-content">
                <h4 class="title-en text-uppercase">FAQ</h4>
                <div class="accordion__faq">
                    <div class="accordion" id="accordionExample">
                        <?php
                        if( have_rows('faq_list') ): 

                        $i = 1;

                        while( have_rows('faq_list') ) : the_row(); 
                        
                        if ($i === 1) {

                        $number = "One";
                        $show = "show";
                    
                        }

                        else if ($i === 2) {

                            $number = "Two";
                            $show = "";
                        }

                        else if ($i === 3) {

                            $number = "Three";
                            $show = "";
                        }

                        else if ($i === 4) {

                            $number = "Four";
                            $show = "";
                        }

                        else if ($i === 5) {

                            $number = "Five";
                            $show = "";
                        }
                    
                        else {
                    
                        $number = "Six";
                        $show = "";
                        }
                        ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?=$number; ?>">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse<?=$number; ?>" aria-expanded="true"
                                    aria-controls="collapse<?=$number; ?>">
                                    <?php echo the_sub_field('faq_question'); ?>
                                </button>
                            </h2>
                            <div id="collapse<?=$number; ?>" class="accordion-collapse collapse <?=$show; ?>"
                                aria-labelledby="heading<?=$number; ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><?php echo the_sub_field('faq_answer'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php $i++; endwhile;
                        else :  
                        endif;         
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div> -->
<div id="frontpage__service">
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">services</div>                                        
          </div>
        </div>
      </div>
      <div class="col">
        <?php

        $args = array(

          'post_type' => 'page',
          'meta_key' => '_wp_page_template',
          'meta_value' => 'service.php'

          );

        $query = new WP_Query($args);

        while($query->have_posts()): $query->the_post();

        ?>
        <div class="row service__heading">
          <div class="col-auto">
            <p class="text-uppercase tag-title">our services</p>
            <h2 class="title-en"><?php echo the_field('service_title'); ?></h2>
          </div>
          <div class="col readmore-link-box">
            <div class="readmore-link">
              <a href="<?php the_permalink(); ?>">
              <p>Read more</p>
              <img class="readmore-button" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </a>
            </div>
          </div>
          <img class="service__background-image d-none d-lg-block rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/service-bg.png" alt="">
        </div>
        <div class="d-none d-xxl-flex row service__detail">
          <?php
            if( have_rows('service_list') ):
              while( have_rows('service_list') ) : the_row();
          ?>
          <div class="col-auto service__product-list text-center">
		  	<a href="<?php the_permalink(); ?>">
            <div class="icon-box">
              <?php if( get_sub_field('service_list_image') ): ?>
                  <img src="<?php the_sub_field('service_list_icon'); ?>" />
                <?php endif; ?>
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/asset/chat-icon.png" alt=""> -->
            </div>
            <p class="title"><?php echo the_sub_field('service_list_title_home'); ?></p>
            <p class="description"><?php echo the_sub_field('service_list_description_home'); ?></p>
			</a>
          </div>
          <?php 
            endwhile;
              endif; 
          ?>
        </div>
        <div class="row service__detail mobile">
          <div class="col">
            <div class="swiper-container service">
              <div class="swiper-wrapper">
                <?php
                  if( have_rows('service_list') ):
                    while( have_rows('service_list') ) : the_row();
                ?>
                <div class="swiper-slide">
                  <div class="service__product-list">
				  	<a href="<?php the_permalink(); ?>">
                    <div class="icon-box">
                      <?php if( get_sub_field('service_list_image') ): ?>
                        <img src="<?php the_sub_field('service_list_icon'); ?>" />
                      <?php endif; ?>
                      <!-- <img src="<?php echo get_template_directory_uri(); ?>/asset/chat-icon.png" alt=""> -->
                    </div>
                    <p class="title"><?php echo the_sub_field('service_list_title_home'); ?></p>
                    <p class="description"><?php echo the_sub_field('service_list_description_home'); ?></p>
					</a>
                  </div>
                </div>
                <?php 
                  endwhile;
                    endif; 
                ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>
<div id="frontpage__blog">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word text-uppercase">blog</div>                                        
                    </div>
                </div>
            </div>
            <div class="col frontpage__blog-content">
                <div class="frontpage__blog-content-title">
                    <h4 class="title-en">Blog</h4>
                    <div class="blog-readmore">
                      <a href="https://www.bdgoem.com/category/marketing/">
                        <span>Readmore</span>
                        <img class="readmore-button" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
                      </a>
                    </div>
                </div>
                <div class="swiper-container blog-swiper">
                    <div class="swiper-wrapper">
                        <?php
                                $args = array(
                            'post_type' => $post_type,
                            'posts_per_page' => 5,
                            
                            
                        );

                        $query = new WP_Query($args);

                        while($query->have_posts()): $query->the_post();

                        ?>
                        <div class="swiper-slide">
                            <a href="<?php the_permalink();?>">
                            <div class="archive__list-single-box">
                                <div class="archive__list-single-image-box">
                                <?php if(has_post_thumbnail()): ?>   
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="">
                                <?php endif; ?> 
                                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/asset/blog-single-1.png" alt=""> -->
                                </div>
                                <div class="archive__list-single-text">
                                    <div class="single-category">
                                        <?php the_category(); ?>
                                        <p class="single-date"><?php echo get_the_date(); ?></p>
                                    </div>
                                    <p class="single-title"><?php the_title(); ?></p>
                                </div>
                            </div> 
                            </a> 
                        </div>
                        <?php endwhile; wp_reset_query( ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>