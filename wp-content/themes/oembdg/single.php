<?php 

get_header();

?>

<article>

<div id="product__top-section">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto" style="margin-top: 7rem;">
                <div class="wrapper">
                <div class="line"></div>
                <div class="wordwrapper">
                    <div class="word text-uppercase">Blog</div>                                        
                </div>
                </div>
            </div>
            <div class="col product__top-section-content single-blog-content">
                <?php if(has_post_thumbnail()): ?>   
                    <img class="product__top-section-background-image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="verytv__content-thumbnail__image">
                <?php endif; ?> 
                <!-- <img class="product__top-section-background-image" src="<?php echo get_template_directory_uri(); ?>/asset/single-blog-1.png" alt=""> -->
                <div class="product__top-section-conent-text-box">
                    <div class="single-blog-relative">
                        <div class="archive__list-single-text">
                            <div class="single-category">
                                <?php the_category(); ?>
                                <p class="single-date"><?php echo get_the_date(); ?></p>
                            </div>
                            <p class="single-title"><?php the_title(); ?></p>
                        </div>
                    </div>
                    <a href="javascript:history.back()">
                    <div class="back-button">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
                        <div class="back-button-text">
                            <p>Back to Blog</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="single-article">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper">
                <div class="line"></div>
                <div class="wordwrapper">
                    <div class="word text-uppercase">story</div>                                        
                </div>
                </div>
            </div>
            <div class="col single-article-content">
                <div class="single-article-content-box">
                    <?php the_content(); ?>
                </div>
                <div class="share__box">
                    <div class="share__text">
                        <span>แชร์</span>
                    </div>
                    <div class="share__icon">
                        <div class="facebook-icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="twitter-icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="line-icon">
                            <i class="fab fa-line"></i>
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
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word text-uppercase">related posts</div>                                        
                    </div>
                </div>
            </div>
            <div class="col frontpage__blog-content">
                <div class="frontpage__blog-content-title">
                    <h4 class="title-en related-post">Related Posts</h4>
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
</article>


<?php
    get_footer();
?> 