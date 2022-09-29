<?php /* Template Name: Services */ ?>

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
              <div class="word text-uppercase">our <?php echo the_field('service_heading_title'); ?></div>                                        
          </div>
        </div>
      </div>
      <div class="col heading-section">
        <?php if( get_field('service_heading_image') ): ?>
            <img class="heading-image" src="<?php the_field('service_heading_image'); ?>" />
        <?php endif; ?>
        <div class="heading-section__text">
          <h3 class="title-en"><?php echo the_field('service_heading_title'); ?></h3>
        </div>
      </div>  
    </div>
  </div>
</div>
<div id="service__content">
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper" style="top:-1%;">
              <div class="word text-uppercase"><?php echo the_field('service_tag_title'); ?></div>                                        
          </div>
        </div>
      </div>  
      <div class="col service__content-title">
        <div class="row">
          <div class="col service__content-title-box">
            <p class="text-uppercase tag-title"><?php echo the_field('service_tag_title'); ?></p>
            <h2 class="title-en"><?php echo the_field('service_title'); ?></h2>
            <p class="title-description"><?php echo the_field('service_description'); ?></p>
          </div>
          <img class="service__content-background-image d-none d-lg-block rellax" data-rellax-speed="2" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/service-archive-bg.png" alt="">
        </div>
        <?php
          if( have_rows('service_list') ): 

            $i = 1;

            while( have_rows('service_list') ) : the_row(); 
            
            if ($i%2 == 0) {

              $reverse = "flex-row-reverse";
              
        
            }
        
            else {
        
              $reverse = "";
            }
            ?>
              
              <div class="row service__content-list <?=$reverse; ?>">
                <div class="col-12 col-lg-auto order-2 order-lg-1 service__content-list-image-box">
                  <?php if( get_sub_field('service_list_image') ): ?>
                      <img src="<?php the_sub_field('service_list_image'); ?>" />
                  <?php endif; ?>
                </div>
                <div class="col-12 col-lg order-1 order-lg-2" style="margin-top:auto;">
                  <?php if( get_sub_field('service_list_image') ): ?>
                      <img class="service__content-list-icon" src="<?php the_sub_field('service_list_icon'); ?>" />
                  <?php endif; ?>
                  <!-- <img class="service__content-list-icon" src="<?php echo get_template_directory_uri(); ?>/asset/chat-icon.png" alt=""> -->
                  <p class="service__content-list-title"><?php echo the_sub_field('service_list_title'); ?></p>
                  <p class="service__content-list-description"><?php echo the_sub_field('service_list_description'); ?></p>
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
<?php
get_footer();
?>