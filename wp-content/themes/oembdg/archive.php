<?php

get_header();

?>
<div id="second__heading">
    <div class="container p-lg-0">
        <div class="row">
            <div class="d-none d-xl-block col-auto">
                <div class="wrapper" style="margin-top: 6.375rem;">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word">Blog</div>                                        
                    </div>
                </div>
            </div>
            <div class="col second__heading-content">
                <div class="second__heading-content-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/archive-blog-bg.png" alt="">
                    <div class="second__heading-text">
                        <h3 class="title-en">Blog</h3>
                    </div>
                </div>
                <div class="archive__category">
                    <ul>
                        <?php $categories = get_categories();
                        foreach ($categories as $cat) {
                            $category_link = get_category_link($cat->cat_ID);
                            echo '<li><a href="'.esc_url( $category_link ).'">'.$cat->name.'</a></li>';
                        } ?>

                    </ul>
                </div>  
                <div class="row archive__list">
                    <?php
                    
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                        
                        
                    );

                    $query = new WP_Query($args);

                    while($query->have_posts()): $query->the_post();

                    ?>
                    <div class="col-12 col-md-6 col-lg-auto archive__list-single">
                        <a href="<?php the_permalink(); ?>">
                        <div class="archive__list-single-box">
                            <?php if(has_post_thumbnail()): ?>   
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="">
                            <?php endif; ?>
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/asset/blog-single-1.png" alt=""> -->
                            <div class="archive__list-single-text">
                                <div class="single-category">
                                    <?php the_category(); ?>
                                    <!-- <p class="category-name"></p> -->
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
<?php

get_footer( );

?>

