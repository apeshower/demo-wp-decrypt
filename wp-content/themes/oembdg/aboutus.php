<?php /* Template Name: About Us */ ?>

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
              <div class="word text-uppercase"><?php echo the_field('about_heading_title'); ?></div>                                        
          </div>
        </div>
      </div>
      <div class="col heading-section">
        <?php if( get_field('about_heading_image') ): ?>
            <img class="heading-image" src="<?php the_field('about_heading_image'); ?>" />
        <?php endif; ?>
        <div class="heading-section__text">
          <h3 class="title-en"><?php echo the_field('about_heading_title'); ?></h3>
        </div>
      </div>  
    </div>
  </div>
</div>
<div id="about__profile">
  <div class="container p-lg-0">
    <div class="row" style="overflow:hidden;">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word">company profile</div>                                        
          </div>
        </div>
      </div>
      <div class="col about__profile-container">
      <?php if( have_rows('company_profile') ): ?>
        <?php while( have_rows('company_profile') ): the_row(); ?>
        <p class="tag-title text-uppercase"><?php echo the_sub_field('company_profile_tag_title'); ?></p>
        <h3 class="title-en"><?php echo the_sub_field('company_profile_title'); ?></h3>
        <p class="title-description"><?php echo the_sub_field('company_profile_description'); ?></p>
        <?php if( get_sub_field('company_profile_image') ): ?>
            <img class="about__profile-logo" src="<?php the_sub_field('company_profile_image'); ?>" />
        <?php endif; ?>
        <img class="d-none d-lg-block about__profile-background-image rellax" data-relax-speed="1" data-rellax-percentage="0.5" src="<?php echo get_template_directory_uri(); ?>/asset/about-profile-bg.png" alt="">
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/<?php the_sub_field('company_profile_youtube_link'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div id="about__history">
  <div class="container p-lg-0">
  <?php if( have_rows('history') ): ?>
    <?php while( have_rows('history') ): the_row(); ?>
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">history</div>                                        
          </div>
        </div>
      </div>
      <div class="col about__history-content">
        <div class="swiper-container history-swiper">
          <h4 class="title-en"><?php echo the_sub_field('history_main_title'); ?></h4>
          <div class="swiper-wrapper">
            <?php
              if( have_rows('history_list') ):
                while( have_rows('history_list') ) : the_row();
          
            ?>
            <div class="swiper-slide">
              <div class="history-list">
                <?php if( get_sub_field('history_list_image') ): ?>
                  <img src="<?php the_sub_field('history_list_image'); ?>" />
                <?php endif; ?>
                <div class="history-list-text">
                  <p class="history-year"><?php echo the_sub_field('history_list_year'); ?></p>
                  <p class="history-description"><?php echo the_sub_field('history_list_description'); ?></p>
                </div>
              </div>
            </div>
            <?php 
              endwhile;
                endif; 
            ?>
          </div>
          <div class="prev-button">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
          </div>
          <div class="next-button">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/readmore-blue.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>
<div id="about__factory">
  <div class="container p-lg-0">
  <?php if( have_rows('our_factories') ): ?>
    <?php while( have_rows('our_factories') ): the_row(); ?>
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">factory</div>                                        
          </div>
        </div>
      </div>
      <div class="col about__factory-content">
        <h3 class="title-en"><?php echo the_sub_field('our_factories_main_title'); ?></h3>
        <?php
          if( have_rows('our_factories_list') ):
            while( have_rows('our_factories_list') ) : the_row();
          
        ?>
        <div class="row about__factory-list">
          <div class="col-auto col-md-12 col-lg-auto">
            <?php if( get_sub_field('our_factories_list_image') ): ?>
              <img src="<?php the_sub_field('our_factories_list_image'); ?>" />
            <?php endif; ?>
          </div>
          <div class="col">
            <p class="sub-title"><?php echo the_sub_field('our_factories_list_title'); ?></p>
            <p class="title-description"><?php echo the_sub_field('our_factories_list_description'); ?></p>
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
<div id="about__research">
  <div class="container p-lg-0">
  <?php if( have_rows('r_d') ): ?>
    <?php while( have_rows('r_d') ): the_row(); ?>
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">research and development</div>                                        
          </div>
        </div>
      </div>
      <div class="col about__research-content">
        <div class="row">
          <div class="col-auto order-2 order-lg-1 about__research-image-box">
            <?php if( get_sub_field('r_d_title_image') ): ?>
              <img class="about__research-image" src="<?php the_sub_field('r_d_title_image'); ?>" />
            <?php endif; ?>
          </div>
          <div class="col order-1 order-lg-2 about__research-detail">
            <h3 class="title-en"><?php echo the_sub_field('r_d_main_title'); ?></h3>
            <?php
              if( have_rows('r_d_text_list') ):
                while( have_rows('r_d_text_list') ) : the_row();
          
            ?>
            <h4 class="sub-title"><?php echo the_sub_field('r_d_list_title'); ?></h4>
            <p class="title-description"><?php echo the_sub_field('r_d_list_description'); ?></p>
            <?php 
              endwhile;
                endif; 
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>
<div id="about__vision">
  <div class="container p-lg-0">
  <?php if( have_rows('vision') ): ?>
    <?php while( have_rows('vision') ): the_row(); ?>
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">vision & mission</div>                                        
          </div>
        </div>
      </div>
      <div class="col about__vision-content">
        <img class="about__vision-background-image d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/asset/about-vision-bg.png" alt="">
        <div class="row">
          <div class="col-auto about__vision-content-left">
            <p class="tag-title text-uppercase"><?php echo the_sub_field('vision_tag_title'); ?></p>
            <h4 class="title-en"><?php echo the_sub_field('vision_main_title'); ?></h4>
          </div>
          <div class="col about__vision-content-right">
            <?php
              if( have_rows('vision_list') ):
                while( have_rows('vision_list') ) : the_row();
          
            ?>
            <p class="sub-title"><?php echo the_sub_field('vision_list_title'); ?></p>
            <p class="title-description"><?php echo the_sub_field('vision_list_description'); ?></p>
            <?php 
              endwhile;
                endif; 
            ?>
          </div>
        </div>
        <?php if( get_sub_field('vision_image') ): ?>
          <img class="about__vision-image rellax" data-rellax-speed="1" data-rellax-percentage="0.5" src="<?php the_sub_field('vision_image'); ?>" />
        <?php endif; ?>
      </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>
<div id="fontpage__quality">
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
</div>
<!-- <div id="about__project">
  <?php if( have_rows('about_project') ): ?>
  <?php while( have_rows('about_project') ): the_row(); ?>
  <div class="container p-lg-0">
    <div class="row">
      <div class="d-none d-xl-block col-auto">
        <div class="wrapper">
          <div class="line"></div>
          <div class="wordwrapper">
              <div class="word text-uppercase">projects</div>                                        
          </div>
        </div>
      </div>
      <div class="col mobile-content">
        <div class="row about__project-content">
          <div class="col-auto about__project-content-mobile">
            <p class="tag-title text-uppercase"><?php echo the_sub_field('about_project_tag_title'); ?></p>
            <h3 class="title-en"><?php echo the_sub_field('about_project_main_title'); ?></h3>
            <div class="accordion" id="accordionExample">
              <?php
              if( have_rows('about_project_list') ): 

              $i = 1;

              while( have_rows('about_project_list') ) : the_row(); 
              
              if ($i === 1) {

                  $number = "One";
                  $show = "show";
          
              }

              else if ($i === 2) {

                  $number = "Two";
                  $show = "";
              }
          
              else {
          
              $number = "Three";
              $show = "";
              }
              ?>  
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?=$number; ?>">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$number; ?>" aria-expanded="true" aria-controls="collapse<?=$number; ?>">
                    <?php echo the_sub_field('about_project_list_title'); ?>
                  </button>
                </h2>
                <div id="collapse<?=$number; ?>" class="accordion-collapse collapse <?=$show; ?>" aria-labelledby="heading<?=$number; ?>" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p><?php echo the_sub_field('about_project_list_description'); ?></p>
                  </div>
                </div>
              </div>
              <?php $i++; endwhile;
                else :  
                endif;         
                ?>
              <!-- <div class="accordion-item">
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
          <div class="col-12 col-lg accordion__image-box">
            <div class="accordion__image">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/accordion-image-1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div> -->
<?php
get_footer();
?>