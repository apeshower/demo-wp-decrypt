<?php /* Template Name: Project Category */ ?>
<?php
get_header();
?>
<div id="top-section">
  <div class="container">
    <div class="row top-section__service top-section__project">
      <div class="col-auto">
        <div class="leading-title">
            <h2>projects</h2>
        </div>
      </div>
      <div class="col">
        <div class="title-description">
          <p>ในฐานะที่เป็นผู้เชี่ยวชาญด้านการก่อสร้างโรงงาน บริษัท ชนะดีไซน์ แอนด์ คอนสตรัคชั่น จำกัด สามารถ ให้บริการที่สมบูรณ์แบบด้วยการก่อสร้างแบบครบวงจรตามความต้องการของลูกค้า</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="service__list single__service-container project-list">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="project-menu">
          <ul>
            <li>
              <a href="">
                <p>All</p>
              </a>
            </li>
            <li>
              <a href="">
                <p>Factory Jobs</p>
              </a>
            </li>
            <li>
              <a href="">
                <p>Frabication Jobs</p>
              </a>
            </li>
            <li>
              <a href="">
                <p>Warehouse Canvas</p>
              </a>
            </li>
            <li>
              <a href="">
                <p>Design Building</p>
              </a>  
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row project-item">
      <div class="col-6" style="padding:0;">
        <div class="project-list-image" style="height:100%;background:black;">
          <img src="" alt="">
        </div>
      </div>
      <div class="col-6">
        <div class="project-item-content">
          <div class="project-item-content-top">
            <div class="project-category">
              <span>ประเภทโครงการ: </span><span class="category-name">Factory Jobs</span>
            </div>
            <div class="project-title">
              <h3>Fukui Kasei New Factory</h3>
            </div>
            <div class="project-spec">
              <div class="project-spec-size">
                <div class="project-spec-size__icon">
                  <span>ขนาดโครงการ</span>
                </div>
                <div class="project-spec-size__text">
                  <p>3 ไร่</p>
                </div>
              </div>
              <div class="project-spec-location">
                <div class="project-spec-location__icon">
                  <span>สถานที่ตั้งโครงการ</span>
                </div>
                <div class="project-spec-location__text">
                  <p>Chon Buri District, Chon Buri</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-item-content-bottom">
            <div class="project-description">
              <p>บริษัท ชนะดีไซน์ แอนด์ คอนสตรัคชั่น จำกัด ก่อตั้งขึ้นเมื่อ 7 กรกฎาคม พ.ศ. 2546 โดยกลุ่มวิศวกรมืออาชีพที่มีประสบการณ์ด้านการก่อสร้างโรงงานมากกว่า</p>
            </div>
            <div class="read-more-button">
              <a href="">
                <p>อ่านเพิ่มเติม</p>
                <i class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

    $args = array(

      'post_type' => 'project',
      'posts_per_page' => 5,
    );

    $query = new WP_Query($args);

    while($query->have_posts()): $query->the_post();

    ?>
    <div class="row project-item">
      <div class="col-6" style="padding:0;">
        <div class="project-list-image" style="height:100%;background:black;">
          <img src="" alt="">
        </div>
      </div>
      <div class="col-6">
        <div class="project-item-content">
          <div class="project-item-content-top">
            <div class="project-category">
              <span>ประเภทโครงการ: </span><span class="category-name"><?php echo the_field('project_type'); ?></span>
            </div>
            <div class="project-title">
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="project-spec">
              <div class="project-spec-size">
                <div class="project-spec-size__icon">
                  <span>ขนาดโครงการ</span>
                </div>
                <div class="project-spec-size__text">
                  <p><?php echo the_field('project_size'); ?></p>
                </div>
              </div>
              <div class="project-spec-location">
                <div class="project-spec-location__icon">
                  <span>สถานที่ตั้งโครงการ</span>
                </div>
                <div class="project-spec-location__text">
                  <p><?php echo the_field('project_location'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-item-content-bottom">
            <div class="project-description">
              <p>บริษัท ชนะดีไซน์ แอนด์ คอนสตรัคชั่น จำกัด ก่อตั้งขึ้นเมื่อ 7 กรกฎาคม พ.ศ. 2546 โดยกลุ่มวิศวกรมืออาชีพที่มีประสบการณ์ด้านการก่อสร้างโรงงานมากกว่า</p>
            </div>
            <div class="read-more-button">
              <a href="">
                <p>อ่านเพิ่มเติม</p>
                <i class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; wp_reset_query();?>
    <div class="row project-item">
      <div class="col-6" style="padding:0;">
        <div class="project-list-image" style="height:100%;background:black;">
          <img src="" alt="">
        </div>
      </div>
      <div class="col-6">
        <div class="project-item-content">
          <div class="project-item-content-top">
            <div class="project-category">
              <span>ประเภทโครงการ: </span><span class="category-name">Factory Jobs</span>
            </div>
            <div class="project-title">
              <h3>Fukui Kasei New Factory</h3>
            </div>
            <div class="project-spec">
              <div class="project-spec-size">
                <div class="project-spec-size__icon">
                  <span>ขนาดโครงการ</span>
                </div>
                <div class="project-spec-size__text">
                  <p>3 ไร่</p>
                </div>
              </div>
              <div class="project-spec-location">
                <div class="project-spec-location__icon">
                  <span>สถานที่ตั้งโครงการ</span>
                </div>
                <div class="project-spec-location__text">
                  <p>Chon Buri District, Chon Buri</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-item-content-bottom">
            <div class="project-description">
              <p>บริษัท ชนะดีไซน์ แอนด์ คอนสตรัคชั่น จำกัด ก่อตั้งขึ้นเมื่อ 7 กรกฎาคม พ.ศ. 2546 โดยกลุ่มวิศวกรมืออาชีพที่มีประสบการณ์ด้านการก่อสร้างโรงงานมากกว่า</p>
            </div>
            <div class="read-more-button">
              <a href="">
                <p>อ่านเพิ่มเติม</p>
                <i class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
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