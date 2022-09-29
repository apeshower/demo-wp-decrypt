<?php
get_header();
?>
<div id="top__section">
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-lg-block col-auto">
        <div class="wrapper" style="margin-top:7rem;">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">Hair Conditioner</div>                                        
          </div>
        </div>
      </div>
      <div class="col product-single-heading">
        <div class="product-single-heading-content" style="background-color: #E9F4E0;">
            <div class="product-single-heading-image-box" style="background-color: #C8DABA;">
            </div>
            <img class="product-backgroud-image rellax" data-relax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/plant-1.png" alt="">
            <?php if( get_field('single_product_image') ): ?>
              <img class="product-image rellax" data-relax-speed="5" data-rellax-percentage="0.5" src="<?php the_field('single_product_image'); ?>" />
            <?php endif; ?>
            <!-- <img class="product-image rellax" data-relax-speed="5" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/product-image-1.png" alt=""> -->
            <div class="product-single-heading-text-box">
                <h4 class="title-en"><?php the_title(); ?></h4>
                <p class="title-description"><?php echo the_field('single_product_short_description'); ?></p>
            </div>
            <div class="quotation-box">
                <button class="quotation-button">
                    <p>ขอใบเสนอราคา</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
                </button>
            </div>
        </div> 
        <div class="hero__seen">
          <p class="text-uppercase">as seen in</p>
          <div class="hero__seen-image-box">
            <?php 

            $args = array(
                'post_type' => 'tv_show',
                'posts_per_page' => 6,
                
                
            );

            $query = new WP_Query($args);
            $bigpost = $post->ID;

            while($query->have_posts()): $query->the_post();

            ?>
            <?php if( get_field('tv_image') ): ?>
                <img src="<?php the_field('tv_image'); ?>" />
            <?php endif; ?>
            <?php endwhile; wp_reset_query(  ); ?>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>
<div id="single__why">
  <?php

        $args = array(

          'post_type' => 'page',
          'meta_key' => '_wp_page_template',
          'meta_value' => 'product.php'

          );

        $query = new WP_Query($args);

        while($query->have_posts()): $query->the_post();

    ?>
    <div class="container p-lg-0">
        <img class="single__why-background-image" src="<?php echo get_template_directory_uri(); ?>/asset/why-bg-2.png" alt="">
        <div class="row">
            <div class="d-none d-lg-block col-auto">
                <div class="wrapper">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word text-uppercase">why choose us</div>                                        
                    </div>
                </div>
            </div>
            <?php if( have_rows('wcu') ): ?>
              <?php while( have_rows('wcu') ): the_row(); ?>
            <div class="col single__why-content">
                <div class="single__why-content-heading">
                    <p class="tag-title text-uppercase"><?php echo the_sub_field('wcu_tag_title'); ?></p>
                    <h4 class="title-en">Be more than your OEM</h4>
                </div>
                <div class="row">
                  <?php
                  if( have_rows('wcu_list') ): 

                    $i = 1;

                    while( have_rows('wcu_list') ) : the_row(); 
                    
                    if ($i === 1) {

                      $colsize = "col-lg-8 single__why-large";
                      $boxsize = "single__why-large-box";
                      $imagesize = "large-box-image";
                      $textsize = "large-box-text";
                
                    }

                    else if ($i%7 == 0) {

                      $colsize = "col-lg-8 single__why-large";
                      $boxsize = "single__why-large-box";
                      $imagesize = "large-box-image";
                      $textsize = "large-box-text";
                    }
                
                    else {
                
                      $colsize = "col-lg-4 single__why-small";
                      $boxsize = "single__why-small-box";
                      $imagesize = "small-box-image";
                      $textsize = "small-box-text";
                    }
                    ?>
                    <div class="col-12 <?=$colsize; ?>">
                        <div class="<?=$boxsize; ?>">
                            <div class="<?=$imagesize; ?>">
                              <?php if( get_sub_field('wcu_list_icon') ): ?>
                                  <img src="<?php the_sub_field('wcu_list_icon'); ?>" />
                              <?php endif; ?>
                            </div>
                            <div class="<?=$textsize; ?>">
                                <p class="title-th"><?php echo the_sub_field('wcu_list_title'); ?></p>
                                <p class="title-description"><?php echo the_sub_field('wcu_list_description'); ?></p>
                            </div>
                        </div>
                    </div>
                          <?php $i++; endwhile;
                      else :  
                      endif;         
                    ?>
                </div>
            </div>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php endwhile; wp_reset_query(); ?>
</div>
<!-- <div id="single__business">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-lg-block col-auto">
                <div class="wrapper">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word text-uppercase">start your business</div>                                        
                    </div>
                </div>
            </div>
            <div class="col single__business-content">
                <div class="row">
                    <div class="col-auto single__business-first-column">
                        <div class="single__business-content-text">
                            <p class="tag-title text-uppercase">star your business</p>
                            <h4 class="title-en">Anyone can have a Hair conditioner Business</h4>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Small Business
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <div class="accordion-body-text">
                                       <p>เป็นหนึ่งในผู้รับจ้างผลิตสินค้าของใช้ส่วนตัว, สินค้าเพื่อสุขภาพ, เวชภัณฑ์ และอาหารเสริม เรามีความภาคภูมิใจในการผลิต</p>
                                   </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Medium Business
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body-text">
                                       <p>เป็นหนึ่งในผู้รับจ้างผลิตสินค้าของใช้ส่วนตัว, สินค้าเพื่อสุขภาพ, เวชภัณฑ์ และอาหารเสริม เรามีความภาคภูมิใจในการผลิต</p>
                                   </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Large Business  
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body-text">
                                       <p>เป็นหนึ่งในผู้รับจ้างผลิตสินค้าของใช้ส่วนตัว, สินค้าเพื่อสุขภาพ, เวชภัณฑ์ และอาหารเสริม เรามีความภาคภูมิใจในการผลิต</p>
                                   </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg single__business-content-image">
                        <div class="single__business-content-image-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/single-business-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div id="frontpage__service">
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-lg-block col-auto">
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
            <h2 class="title-en">One Stop Service <br>for your new product</h2>
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
        <?php endwhile; wp_reset_query(); ?>
        <div class="d-none d-lg-flex row service__detail">
          <div class="col-auto service__product-list text-center">
            <div class="icon-box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/chat-icon.png" alt="">
            </div>
            <p class="title">ให้คำปรึกษา</p>
            <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
          </div>
          <div class="col-auto service__product-list text-center">
            <div class="icon-box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/experiment-icon.png" alt="">
            </div>
            <p class="title">พัฒนาสูตร</p>
            <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
          </div>
          <div class="col-auto service__product-list text-center">
            <div class="icon-box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/cream-icon.png" alt="">
            </div>
            <p class="title">จัดหาบรรจุภัณฑ์</p>
            <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
          </div>
          <div class="col-auto service__product-list text-center">
            <div class="icon-box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/drip-icon.png" alt="">
            </div>
            <p class="title">พัฒนาบรรจุภัณฑ์</p>
            <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
          </div>
          <div class="col-auto service__product-list text-center">
            <div class="icon-box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/notepad-icon.png" alt="">
            </div>
            <p class="title">จดแจ้งทะเบียนสินค้า</p>
            <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
          </div>
          <div class="col-auto service__product-list text-center">
            <div class="icon-box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/sunscreen-icon.png" alt="">
            </div>
            <p class="title">ออกแบบดีไซน์</p>
            <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
          </div>
          <div class="col-auto service__product-list text-center">
            <div class="icon-box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/cosmetic-icon.png" alt="">
            </div>
            <p class="title">รับผลิตสินค้า</p>
            <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
          </div>
          <div class="col-auto service__product-list text-center">
            <div class="icon-box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/search-icon.png" alt="">
            </div>
            <p class="title">ตรวจสอบและประกันคุณภาพ</p>
            <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
          </div>
          <div class="col-auto service__product-list text-center">
            <div class="icon-box">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/parcel-icon.png" alt="">
            </div>
            <p class="title">ส่งมอบสินค้าทั้งในและต่างประเทศ</p>
            <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
          </div>
        </div>
        <div class="row service__detail mobile">
          <div class="col">
            <div class="swiper-container service">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="service__product-list">
                    <div class="icon-box">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/chat-icon.png" alt="">
                    </div>
                    <p class="title">ให้คำปรึกษา</p>
                    <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="service__product-list">
                    <div class="icon-box">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/chat-icon.png" alt="">
                    </div>
                    <p class="title">ให้คำปรึกษา</p>
                    <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="service__product-list">
                    <div class="icon-box">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/chat-icon.png" alt="">
                    </div>
                    <p class="title">ให้คำปรึกษา</p>
                    <p class="description">ให้คำปรึกษาด้านการจัดการผลิตภัณฑ์ธุรกิจและการตลาดโดยผู้เชี่ยวชาญเฉพาะทาง</p>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="fontpage__quality">
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-lg-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">quality</div>                                        
          </div>
        </div>
      </div>
      <div class="col quality__content">
        <img class="quality__background-image" src="<?php echo get_template_directory_uri(); ?>/asset/quality-bg.png" alt="">
        <div class="quality__content-text">
          <p class="text-uppercase tag-title">quality</p>
          <h2 class="title-en">We pride ourself in the production of high quality products</h2>
          <p class="title-description">เป็นหนึ่งในผู้รับจ้างผลิตสินค้าของใช้ส่วนตัว, สินค้าเพื่อสุขภาพ, เวชภัณฑ์ และอาหารเสริม เรามีความภาคภูมิใจในการผลิตเพื่อให้ได้ สินค้าที่มีคุณภาพสูง รวมทั้งมีการตรวจสอบคุณภาพทุกขั้นตอนการ ผลิต ตั้งแต่การรับวัตถุดิบจนกระทั่งเสร็จสิ้นการส่งมอบสินค้า</p>
          <div class="quality__certify-image">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/haccp.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/iso.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/iso.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/jalal.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="frontpage__process">
  <div class="container p-lg-0">
    <img class="process__background-image d-none d-lg-block rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/process-bg.jpg" alt="">
    <div class="row">
      <div class="d-none d-lg-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">process</div>                                        
          </div>
        </div>
      </div>
      <div class="col">
        <?php

        $args = array(

          'post_type' => 'page',
          'meta_key' => '_wp_page_template',
          'meta_value' => 'process.php'

          );

        $query = new WP_Query($args);

        while($query->have_posts()): $query->the_post();

        ?>
        <?php
          if( have_rows('process_home') ):
            while( have_rows('process_home') ) : the_row();
      
        ?>
        <div class="row process__content">
          <div class="col-12 col-lg-6 order-2 order-lg-1 process__content-image">
            <?php if( get_sub_field('process_home_large_image') ): ?>
              <img class="primary-image" src="<?php the_sub_field('process_home_large_image'); ?>" />
            <?php endif; ?>
            <?php if( get_sub_field('process_home_small_image') ): ?>
              <img class="secondary-image rellax" data-rellax-speed="3" data-rellax-percentage="0.5" src="<?php the_sub_field('process_home_small_image'); ?>" />
            <?php endif; ?>
            <!-- <img class="primary-image" src="<?php echo get_template_directory_uri(); ?>/asset/process-image-3.png" alt="">
            <img class="secondary-image rellax" data-rellax-speed="3" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/process-image-4.png" alt=""> -->
          </div>
          <div class="col-12 col-lg-6 order-1 order-lg-2 process__content-text">
            <p class="tag-title text-uppercase"><?php echo the_sub_field('process_home_tag_title'); ?></p>
            <h3 class="title-en"><?php echo the_sub_field('process_home_main_title'); ?></h3>
            <p class="title-description"><?php echo the_sub_field('process_home_description'); ?></p>
            <div class="readmore-link">
              <a href="<?php the_permalink(); ?>">
              <p>Read more</p>
              <img class="readmore-button" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <?php 
          endwhile;
            endif; 
        ?>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>
<div id="process__faq">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-lg-block col-auto">
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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Environment
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor .</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                CSR
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor .</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Employees
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor .</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="frontpage__blog">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-lg-block col-auto">
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
                                        <p class="category-name">marketing</p>
                                        <p class="single-date">12/02/20</p>
                                    </div>
                                    <p class="single-title"><?php the_title(); ?></p>
                                </div>
                            </div> 
                            </a> 
                        </div>
                        <?php endwhile; wp_reset_query( ); ?>
                        <!-- <div class="swiper-slide">
                            <a href="">
                            <div class="archive__list-single-box">
                                <div class="archive__list-single-image-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/blog-single-1.png" alt="">
                                </div>
                                <div class="archive__list-single-text">
                                    <div class="single-category">
                                        <p class="category-name">marketing</p>
                                        <p class="single-date">12/02/20</p>
                                    </div>
                                    <p class="single-title">10 ผลิตภัณฑ์ความงามแปลก ๆ ของเกาหลีที่สามารถใช้งานได้จริง</p>
                                </div>
                            </div> 
                            </a> 
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                            <div class="archive__list-single-box">
                                <div class="archive__list-single-image-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/blog-single-2.png" alt="">
                                </div>
                                <div class="archive__list-single-text">
                                    <div class="single-category">
                                        <p class="category-name">marketing</p>
                                        <p class="single-date">12/02/20</p>
                                    </div>
                                    <p class="single-title">10 ผลิตภัณฑ์ความงามแปลก ๆ ของเกาหลีที่สามารถใช้งานได้จริง</p>
                                </div>
                            </div>
                            </a> 
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                            <div class="archive__list-single-box">
                                <div class="archive__list-single-image-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/blog-single-3.png" alt="">
                                </div>
                                <div class="archive__list-single-text">
                                    <div class="single-category">
                                        <p class="category-name">marketing</p>
                                        <p class="single-date">12/02/20</p>
                                    </div>
                                    <p class="single-title">10 ผลิตภัณฑ์ความงามแปลก ๆ ของเกาหลีที่สามารถใช้งานได้จริง</p>
                                </div>
                            </div> 
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                            <div class="archive__list-single-box">
                                <div class="archive__list-single-image-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asset/blog-single-1.png" alt="">
                                </div>
                                <div class="archive__list-single-text">
                                    <div class="single-category">
                                        <p class="category-name">marketing</p>
                                        <p class="single-date">12/02/20</p>
                                    </div>
                                    <p class="single-title">10 ผลิตภัณฑ์ความงามแปลก ๆ ของเกาหลีที่สามารถใช้งานได้จริง</p>
                                </div>
                            </div>
                            </a> 
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>