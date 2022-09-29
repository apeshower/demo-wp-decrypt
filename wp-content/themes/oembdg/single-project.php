<?php
get_header();
?>
<div id="single__project-thumbnail">
  <div class="container-fluid">
    <div class="row single__project-thumbnail">
      <div class="col">
        <div class="single__project-thumbnail-box">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<div id="single__project-content">
  <div class="container-fluid">
    <div class="row single__project-heading">
      <div class="col">
        <div class="single-project-category">
          <span>ประเภทโครงการ: </span><span class="category-name"><?php echo the_field('project_type'); ?></span>
        </div>
        <div class="single-project-title">
          <h3><?php the_title(); ?></h3>
        </div>
      </div>
      <div class="col">
        <div class="single__project-size-icon">
          <span>ขนาดโครงการ</span>
        </div>
        <div class="single__project-size-text">
          <p><?php echo the_field('project_size') ?></p>
        </div>
      </div>
      <div class="col">
        <div class="single__project-location-icon">
          <span>สถานที่ตั้งโครงการ</span>
        </div>
        <div class="single__project-location-text">
          <p><?php echo the_field('project_location') ?></p>
        </div>
      </div>
    </div>
    <div class="row single-project-mid">
      <div class="col-12">
        <h3 class='mid-title'>ความเป็นมาของโครงการ</h3>
      </div>
      <div class="col-auto">
        <p class="mid-small-text">บริษัท ชนะดีไซน์ แอนด์ คอนสตรัคชั่น จำกัด ก่อตั้งขึ้นเมื่อ 7 กรกฎาคม พ.ศ.2546 โดยกลุ่มวิศวกรมืออาชีพที่มีประสบการณ์ด้านก่อสร้างโรงงานมากกว่า 17 ปี เพื่อให้บริการที่มีความรวดเร็วและมีคุณภาพ จากวันนั้นเป็นต้นมา บริษัท ชนะดีไซน์ แอนด์ คอนสตรัคชั่น จำกัด ได้พัฒนาตนเองมาจนเป็นผู้นำในด้าน การก่อสร้างโรงงานทั้งระบบ</p>
      </div>
      <div class="col">
        <p class="mid-large-text">“ในฐานะที่เป็นผู้เชี่ยวชาญด้านการก่อสร้างโรงงาน บริษัท ชนะดีไซน์ ให้การบริการที่สมบูรณ์แบบ”</p>
      </div>
    </div>
    <div class="row related-project">
      <div class="col-12">
        <h3 class='related-project__title'>โครงการอื่นๆของเรา</h3>
      </div>
      <?php

      $args = array(

        'post_type' => 'project',
        'posts_per_page' => '3',

        );

      $query = new WP_Query($args);

      while($query->have_posts()): $query->the_post();
      
      ?>
      <div class="col-4 related-project-item">
        <div class="related-project-image">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </div>
        <p class="small-text">โครงการ</p>
        <p class="large-text"><?php the_title(); ?></p>
      </div>
      <?php endwhile; wp_reset_query(); ?>
      <div class="col-4">
        <div class="related-project-image">
          <img src="" alt="">
        </div>
        <p class="small-text">โครงการ</p>
        <p class="large-text">Saraya MFG</p>
      </div>
      <div class="col-4">
        <div class="related-project-image">
          <img src="" alt="">
        </div>
        <p class="small-text">โครงการ</p>
        <p class="large-text">Saraya MFG</p>
      </div>
    </div>
  </div>
</div>
<div id="consult">
  <div class="container">
    <div class="row consult__title">
      <div class="col-12 col-lg">
        <div class="consult__title__text">
          <p>สนใจรับคำปรึกษาจากทีมงานมืออาชีพติดต่อเราได้ที่</p>
        </div>
        <div class="row consult__icon">
          <div class="col-12 col-lg-auto">
            <div class="consult__hotline">
              <i class="fas fa-phone-alt"></i>
              <span>Hotline 085-3838613</span>
            </div>
          </div>
          <div class="col-12 col-lg-auto">
            <div class="consult__line">
              <i class="fab fa-line"></i>
              <span>@Chanadesign</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-auto consult__button">
        <!-- <a href=""> -->
          <div class="consult__botton__text btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            <span>รับคำปรึกษาจากเรา</span>
          </div>
        <!-- </a> -->
      </div>
    </div>
  </div>
</div>
<div id="main__footer">
  <div class="container">
    <div class="row main__footer__list">
      <div class="col-12 col-lg-auto">
        <div class="footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/chanadesign-logo.png" alt="">
        </div>
      </div>
      <div class="col-12 col-lg-auto location__box">
        <div class="vertical__location">
          <p class="text-uppercase">location</p>
        </div>
        <div class="location__detail">
          <p class="location__title">บริษัท ชนะ ดีไซน์แอนด์คอนสตรัคชั่น จำกัด </p>
          <p class="location__address">99/108 ม.3 ถ.ดอนหัวฬ่อ อ.เมืองขลบุรี<br> จ.ชลบุรี 20000</p>
        </div>
      </div>
      <div class="col-12 col-lg-auto contact__box">
        <div class="vertical__contact">
          <p class="text-uppercase">contact</p>
        </div>
        <div class="contact__detail">
          <div class="tel-box">
            <i class="fas fa-phone-alt"></i>
            <span>038-440486</span>
          </div>
          <div class="hotline-box">
            <i class="fas fa-mobile-alt"></i>
            <span>Hotline 085-383-8613</span>
          </div>
          <div class="mail-box">
            <i class="fas fa-envelope"></i>
            <span>Chanaconst@gmail.com</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg social__box">
        <div class="vertical__social">
          <p class="text-uppercase">social</p>
        </div>
        <div class="social__detail">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-line"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </div>
    <div class="row footer__copyright">
      <div class="col">
        <div class="copyright__text">
          <span>©2020 Chana Design & Construction All Right Retenved.</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>-->
      <div class="modal-body">
      <div class="row contact-us__form">
      <div class="col-12">
        <div class="contact-us__form-title">
          <h4>กรอกข้อมูลเพื่อรับคำปรึกษาจากเรา</h4>
        </div>
      </div>
      <div class="col-12">
        <div class="contact-us__form-form">
          <div class="contact-us__form-form-box">
            <form action="">
              <input type="text" class="name" placeholder="Name">
              <input type="number" class="phone" placeholder="Phone">
              <input type="number" class="mail" placeholder="E-mail Address">
              <textarea name="message" class="message" placeholder="Message" cols="30" rows="5"></textarea>
              <div class="submit-button">
                <button type="submit">SEND</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>
<?php
get_footer();
?>