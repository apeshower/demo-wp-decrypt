<?php
/* Template Name: Archive Product*/
?>
<?php
get_header();

$term = get_queried_object();

?>
<div id="product__top-section">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper" style="margin-top:7rem;">
                <div class="line"></div>
                <div class="wordwrapper">
                    <div class="word text-uppercase"><?php single_term_title();  ?></div>                                        
                </div>
                </div>
            </div>
            <div class="col product__top-section-content">
                <?php if( get_field('product_category_background_image', $term) ): ?>
                  <img class="product__top-section-background-image" src="<?php the_field('product_category_background_image', $term); ?>" />
                <?php endif; ?>
                <?php if( get_field('product_category_overlay_object_image', $term) ): ?>
                  <img class="product__top-section-overlay-image rellax" data-rellax-speed="-3" src="<?php the_field('product_category_overlay_object_image', $term); ?>" />
                <?php endif; ?>
                <!-- <img class="product__top-section-background-image" src="<?php echo get_template_directory_uri(); ?>/asset/product-heading.png" alt="">
                <img class="product__top-section-overlay-image rellax" data-rellax-speed="-3" src="<?php echo get_template_directory_uri(); ?>/asset/product-overlay.png" alt=""> -->
                <div class="product__top-section-conent-text-box">
                    <h4 class="title-en"><?php single_term_title();  ?></h4>
                    <p class="title-description"><?php echo the_field('product_category_short_description', $term); ?></p>
                    <div class="proposal-button">
                        <p>ขอใบเสนอราคา</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/readmore-white.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="frontpage__product">
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper" style="margin-top:2rem;">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">products</div>                                        
          </div>
        </div>
      </div>
      <div class="col">
        <div class="row product__content">
          <img class="service__background-image d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/asset/product-bg.png" alt="">
          <div class="col-12 product__content__first-column">
            <div class="product__text">
              <p class="text-uppercase tag-title product-archive">products</p>
              <h2 class="title-en product-archive">Our product lines</h2>
            </div>
          </div>
          <?php

            
            $args = array(

              'post_type' => 'product',
              'posts_per_page' => 50,
              'tax_query' => array(
                array(
                    'taxonomy' => 'product_category',
                    'field'    => 'slug',
                    'terms'    => $wp_query->query_vars['product_category'],
                ),
            ),
              
            );

            $query = new WP_Query($args);
            $i = 1;
            while($query->have_posts()): $query->the_post();

            if ($i%3 == 0) {

              $auto = "col-12 col-md-4 col-xxl-4";
            }
        
            else {
        
              $auto = "col-12 col-md-4 col-xxl-4";
            }

          ?>
          <div class="<?=$auto; ?> product__list-list">
            <a href="<?php the_permalink(); ?>">
            <div class="product__list product-archive first" style="background-color: <?php echo the_field('background_color'); ?>;">
              <?php if( get_field('single_product_image') ): ?>
                <img class="product__list-background" src="<?php the_field('single_product_image'); ?>" />
              <?php endif; ?>
              <!-- <img class="product__list-background" src="<?php echo get_template_directory_uri(); ?>/asset/product-1.png" alt=""> -->
              <div class="product-text">
                <p class="product-title-en"><?php the_title(); ?></p>
                <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </div>
              <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
            </div>
            </a>
          </div>
          <?php $i++; endwhile; wp_reset_query();?>
          <!-- <div class="col-auto product__list-list">
            <div class="product__list product-archive first" style="background-color: #E7CDC3;">
              <img class="product__list-background" src="<?php echo get_template_directory_uri(); ?>/asset/product-2.png" alt="">
              <div class="product-text">
                <p class="product-title-en">Hair Conditioner</p>
                <img class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </div>
              <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
            </div>
          </div>
          <div class="col product__list-list">
            <div class="product__list product-archive first" style="background-color: #BAD7ED;">
              <img class="product__list-background" src="<?php echo get_template_directory_uri(); ?>/asset/product-3.png" alt="">
              <div class="product-text">
                <p class="product-title-en">Hair Treatment</p>
                <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </div>
              <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
            </div>
          </div>
          <div class="col-auto product__list-list">
            <div class="product__list product-archive first" style="background-color: #EAD2CE;">
              <img class="product__list-background" src="<?php echo get_template_directory_uri(); ?>/asset/product-4.png" alt="">
              <div class="product-text">
                <p class="product-title-en">Hair Coat</p>
                <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </div>
              <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
            </div>
          </div>
          <div class="col-auto product__list-list">
            <div class="product__list product-archive first" style="background-color: #E9D5B8;">
              <img class="product__list-background" src="<?php echo get_template_directory_uri(); ?>/asset/product-5.png" alt="">
              <div class="product-text">
                <p class="product-title-en">Hair Oil</p>
                <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </div>
              <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
            </div>
          </div>
          <div class="col product__list-list">
            <div class="product__list product-archive first" style="background-color: #C8DABA;">
              <img class="product__list-background" src="<?php echo get_template_directory_uri(); ?>/asset/product-6.png" alt="">
              <div class="product-text">
                <p class="product-title-en">Hair Serum</p>
                <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </div>
              <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
            </div>
          </div>
          <div class="col-auto product__list-list">
            <div class="product__list product-archive first" style="background-color: #CFE7E3;">
              <img class="product__list-background" src="<?php echo get_template_directory_uri(); ?>/asset/hair-tonic-image.png" alt="">
              <div class="product-text">
                <p class="product-title-en">Hair Tonic</p>
                <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </div>
              <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
            </div>
          </div>
          <div class="col-auto product__list-list">
            <div class="product__list product-archive first" style="background-color: #D1D3AE;">
              <img class="product__list-background" src="<?php echo get_template_directory_uri(); ?>/asset/hair-mask-image.png" alt="">
              <div class="product-text">
                <p class="product-title-en">Hair Mask</p>
                <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </div>
              <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
            </div>
          </div>
          <div class="col product__list-list">
            <div class="product__list product-archive first" style="background-color: #F0DACB;">
              <img class="product__list-background" src="<?php echo get_template_directory_uri(); ?>/asset/hair-spray-image.png" style="height:60%;margin-top:4rem;" alt="">
              <div class="product-text">
                <p class="product-title-en">Hair Spray</p>
                <img  class="readmore-link" src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
              </div>
              <img class="bottom-left-curve-one" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
              <img class="bottom-left-curve-two" src="<?php echo get_template_directory_uri(); ?>/asset/bottom-left-curve.png" alt="">
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
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