<?php
    get_header();
?>
<div id="frontpage__hero">
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-xl-block col-auto" style="padding-top:7.5rem;">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">british dispensary</div>                                        
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-11 hero__content-box">
        <div class="hero__content">
          <div class="swiper-container hero">
            <div class="swiper-wrapper">
              <?php 

                $args = array(
                    'post_type' => 'slideshow',
                    'posts_per_page' => 3,
                    
                    
                );

                $query = new WP_Query($args);
                $bigpost = $post->ID;

                while($query->have_posts()): $query->the_post();

              ?>
              <div class="swiper-slide">
                <div class="hero__content-box">
                  <?php if( get_field('hero_background_image') ): ?>
                    <img class="hero__slide-image" src="<?php the_field('hero_background_image'); ?>" />
                  <?php endif; ?>
                  <?php if( get_field('hero_overlay_image') ): ?>
                    <img class="hero__slide-image-overlay rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php the_field('hero_overlay_image'); ?>" />
                  <?php endif; ?>
                  <div class="hero__content-text-box">
                    <h2 class="title-en"><?php echo the_field('hero_main_title'); ?></h2>
                    <!-- <div class="title-image">
                    <?php
                      if( have_rows('slideshow_certificate_icon') ):
                        while( have_rows('slideshow_certificate_icon') ) : the_row();
                    ?>
                      <?php if( get_sub_field('slideshow_certificate_icon_image') ): ?>
                        <img src="<?php the_sub_field('slideshow_certificate_icon_image'); ?>" />
                      <?php endif; ?>
                    <?php 
                      endwhile;
                        endif; 
                    ?>
                    </div> -->
                    <p class="title-description"><?php echo the_field('hero_description'); ?></p>
                    <a href="https://www.bdgoem.com/about-us/">
                      <div class="readmore-link">
                        <p>Read more</p>
                        <img class="readmore-button" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-white.png" alt="">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <?php endwhile; wp_reset_query(  ); ?>
            </div>
            <div class="swiper-pagination d-md-none"></div>
          </div>
        </div>
        <div class="hero__seen">
          <!-- <p class="text-uppercase">as seen in</p> -->
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
<div id="frontpage__about">
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">about</div>                                        
          </div>
        </div>
      </div>
      <?php

        $args = array(

          'post_type' => 'page',
          'meta_key' => '_wp_page_template',
          'meta_value' => 'aboutus.php'

          );

        $query = new WP_Query($args);

        while($query->have_posts()): $query->the_post();
        ?>
      <div class="col frontpage__about-content">
        <?php if( have_rows('home_about') ): ?>
          <?php while( have_rows('home_about') ): the_row(); ?>
          <img class="bottom-right-curve-one d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-right-curve.png" alt="">
          <img class="bottom-right-curve-two d-none d-xl-block" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-right-curve.png" alt="">
          <div class="about__stat-content">
          <?php
            if( have_rows('home_about_list_item') ): 

              $i = 1;

              while( have_rows('home_about_list_item') ) : the_row(); 
              
              if ($i === 1) {

                $margin = "stat-year";
              }

              else if ($i === 2) {

                $margin = "stat-order";
              }
          
              else {
          
                $margin = "stat-brand";
              }
            ?>
            <div class="stat-box <?=$margin; ?> ">
              <p class="large-text"><?php echo the_sub_field('home_about_list_item_large_text'); ?></p>
              <p class="small-text"><?php echo the_sub_field('home_about_list_item_small_text'); ?></p>
            </div>
            <?php $i++; endwhile; else : endif; ?>
          </div>
          <div class="about__content-text">
            <p class="text-uppercase tag-title"><?php echo the_sub_field('home_about_tag_title'); ?></p>
            <h2 class="title-en"><?php echo the_sub_field('home_about_main_title'); ?></h2>
            <p class="title-description"><?php echo the_sub_field('home_about_description'); ?></p>
            <div class="readmore-link">
              <a href="<?php the_permalink(); ?>">
              <p>Read more</p>
              <img class="readmore-button" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </a>
            </div>
          </div>
          <div class="background-image-mobile">
          <img class="about__background-image" src="<?php echo get_template_directory_uri(); ?>/asset/about-bg.png" alt="">
          <div class="about-overlay"></div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</div>
<div id="frontpage__product">
  <div class="container p-lg-0">
    <img class="service__background-image d-none d-lg-block rellax" data-rellax-speed="-0.5" src="<?php echo get_template_directory_uri(); ?>/asset/product-bg.png" alt="">
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">products</div>                                        
          </div>
        </div>
      </div>
      <div class="col">
        <?php

        $args = array(

          'post_type' => 'page',
          'meta_key' => '_wp_page_template',
          'meta_value' => 'product.php'

          );

        $query = new WP_Query($args);

        while($query->have_posts()): $query->the_post();

        ?>
        <?php if( have_rows('product_home') ): ?>
          <?php while( have_rows('product_home') ): the_row(); ?>
        <div class="row product__content">
          <!-- <img class="service__background-image d-none d-lg-block rellax" data-rellax-speed="-0.5" src="<?php echo get_template_directory_uri(); ?>/asset/product-bg.png" alt=""> -->
          <div class="col-12 product__content__first-column">
            <div class="product__text">
              <p class="text-uppercase tag-title"><?php echo the_sub_field('product_home_tag_title'); ?></p>
              <h2 class="title-en"><?php echo the_sub_field('product_home_main_title'); ?></h2>
              <p class="title-description"><?php echo the_sub_field('product_home_description'); ?></p>
            </div>
          </div>
          <div class="col-12 col-md-3 product__list-list">
            <?php if( have_rows('main_category_1') ): ?>
              <?php while( have_rows('main_category_1') ): the_row(); ?>
            <a href="<?php echo the_sub_field('main_category_1_link_url'); ?>">
              <div class="product__list product-archive first" style="background-color: <?php echo the_sub_field('main_category_1_background_color'); ?>;">
                <?php if( get_sub_field('main_category_1_image') ): ?>
                  <img class="product__list-background first-image" src="<?php the_sub_field('main_category_1_image'); ?>" />
                <?php endif; ?>
                <img class="product__list-background-0 rellax" data-rellax-speed="2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/front-product-bg-1.png" alt="">
                <img class="product__list-background-1 rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/front-product-bg-1-2.png" alt="">
                <div class="product-text">
                  <p class="product-title-en"><?php echo the_sub_field('main_category_1_title'); ?></p>
                  <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
                </div>
                <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
                <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              </div>
            </a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="col-12 col-md-3 product__list-list">
            <?php if( have_rows('main_category_2') ): ?>
              <?php while( have_rows('main_category_2') ): the_row(); ?>
              <a href="<?php echo the_sub_field('main_category_2_link_url'); ?>">
                <div class="product__list product-archive second" style="background-color: <?php echo the_sub_field('main_category_2_background_color'); ?>;">
                  <?php if( get_sub_field('main_category_2_image') ): ?>
                    <img class="product__list-background" src="<?php the_sub_field('main_category_2_image'); ?>" />
                  <?php endif; ?>
                  <img class="product__list-background-2 rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/front-product-bg-2.png" alt="">
                  <img class="product__list-background-3 rellax" data-rellax-speed="2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/front-product-bg-2-2.png" alt="">
                  <div class="product-text">
                    <p class="product-title-en"><?php echo the_sub_field('main_category_2_title'); ?></p>
                    <img class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
                  </div>
                  <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
                  <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
                </div>
              </a> 
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="col-12 col-md-3 product__list-list">
            <?php if( have_rows('main_category_3') ): ?>
              <?php while( have_rows('main_category_3') ): the_row(); ?>
              <a href="<?php echo the_sub_field('main_category_3_link_url'); ?>">
                <div class="product__list product-archive third" style="background-color: <?php echo the_sub_field('main_category_3_background_color'); ?>;">
                  <?php if( get_sub_field('main_category_3_image') ): ?>
                    <img class="product__list-background" src="<?php the_sub_field('main_category_3_image'); ?>" />
                  <?php endif; ?>
                  <img class="product__list-background-4 rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/front-product-bg-3.png" alt="">
                  <div class="product-text">
                    <p class="product-title-en"><?php echo the_sub_field('main_category_3_title'); ?></p>
                    <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
                  </div>
                  <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
                  <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
                </div>
              </a>  
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="col-12 col-md-3 product__list-list">
            <?php if( have_rows('main_category_4') ): ?>
              <?php while( have_rows('main_category_4') ): the_row(); ?>
              <a href="<?php echo the_sub_field('main_category_4_link_url'); ?>">
                <div class="product__list product-archive" style="background-color: <?php echo the_sub_field('main_category_4_background_color'); ?>;">
                  <?php if( get_sub_field('main_category_4_image') ): ?>
                    <img class="product__list-background" src="<?php the_sub_field('main_category_4_image'); ?>" />
                  <?php endif; ?>
                  <img class="product__list-background-0 rellax" data-rellax-speed="2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/front-product-bg-1.png" alt="">
                  <img class="product__list-background-1 rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/front-product-bg-1-2.png" alt="">
                  <div class="product-text">
                    <p class="product-title-en"><?php echo the_sub_field('main_category_4_title'); ?></p>
                    <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
                  </div>
                  <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
                  <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
                </div>
              </a>  
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>
<div id="frontpage__service">
  <div class="container p-lg-0">
    <img class="service__background-image d-none d-lg-block rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/service-bg.png" alt="">
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
          <!-- <img class="service__background-image d-none d-lg-block rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/service-bg.png" alt=""> -->
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
<div id="fontpage__quality">
    <?php

    $args = array(

    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'aboutus.php'

    );

    $query = new WP_Query($args);

    while($query->have_posts()): $query->the_post();

    ?>
    <?php if( have_rows('quality') ): ?>
    <?php while( have_rows('quality') ): the_row(); ?>
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">quality</div>                                        
          </div>
        </div>
      </div>
      <div class="col quality__content">
        <?php if( get_sub_field('quality_background') ): ?>
          <img class="quality__background-image" src="<?php the_sub_field('quality_background'); ?>" />
        <?php endif; ?>
        <!-- <img class="quality__background-image" src="<?php echo get_template_directory_uri(); ?>/asset/quality-bg.png" alt=""> -->
        <div class="quality__content-text">
          <p class="text-uppercase tag-title"><?php echo the_sub_field('quality_tag_title'); ?></p>
          <h2 class="title-en"><?php echo the_sub_field('quality_main_title'); ?></h2>
          <p class="title-description"><?php echo the_sub_field('quality_description'); ?></p>
          <div class="quality__certify-image">
            <?php
              if( have_rows('quality_certificate') ):
                while( have_rows('quality_certificate') ) : the_row();
          
            ?>
            <?php if( get_sub_field('quality_certificate_icon') ): ?>
              <img src="<?php the_sub_field('quality_certificate_icon'); ?>" />
            <?php endif; ?>
            <?php 
              endwhile;
                endif; 
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php endwhile; wp_reset_query(); ?>
</div>
<div id="frontpage__process">
  <div class="container p-lg-0">
    <img class="process__background-image d-none d-lg-block rellax" data-rellax-speed="-2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/process-bg.jpg" alt="">
    <div class="row">
      <div class="d-none d-xl-block col-auto">
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
                                    <a href="<?php the_permalink();?>"><p class="single-title"><?php the_title(); ?> </p></a>
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