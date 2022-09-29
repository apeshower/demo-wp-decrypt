<?php
get_header();
?>
<div id="top-section">
  <div class="container">
    <div class="row top-section__service">
      <div class="col"></div>
      </div>
    </div>
  </div>
</div>
<div class="service__list single__service-container">
  <div class="container-fluid">
    <div class="row">
      <div class="col single__service-title">
        <div class="service-icon">
          <i class="fas fa-industry"></i>
        </div>
        <div class="service-title">
          <h3><?php the_title(); ?></h3>
        </div>
        <div class="single__service-short-description">
          <p><?php echo get_field('short_description') ?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="single__service-image">
          <img src="" alt="">
        </div>
      </div>
      <div class="col-6">
        <div class="single__service-long-description">
          <p><?php echo get_field('service_detail') ?></p>
        </div>
      </div>
      <div class="row single-service-step">
        <div class="col-12">
          <div class="step-title">
            <h2>ขั้นตอนการทำงาน</h2>
          </div>
        </div>
        <div class="col-4">
          <div class="step-list">
            <div class="step-list-icon">
             <i class="fas fa-industry"></i>
            </div>
            <div class="step-list-title">
              <p>ขั้นตอนที่ 1</p>
            </div>
            <div class="step-list-description">
              <p>การออกแบบโรงงาน การขออณุญาตทำการก่อสร้างโรงงาน การขออณุญาตขอให้โรงงาน</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="step-list">
            <div class="step-list-icon">
              <i class="fas fa-industry"></i>
            </div>
            <div class="step-list-title">
              <p>ขั้นตอนที่ 1</p>
            </div>
            <div class="step-list-description">
              <p>การออกแบบโรงงาน การขออณุญาตทำการก่อสร้างโรงงาน การขออณุญาตขอให้โรงงาน</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="step-list">
            <div class="step-list-icon">
              <i class="fas fa-industry"></i>
            </div>
            <div class="step-list-title">
              <p>ขั้นตอนที่ 1</p>
            </div>
            <div class="step-list-description">
              <p>การออกแบบโรงงาน การขออณุญาตทำการก่อสร้างโรงงาน การขออณุญาตขอให้โรงงาน</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="testimonial">
  <div class="container-fluid">
    <div class="row">
      <div class="col testimonial__container">
        <div class="testimonial__content">
          <div class="testimonial__content-title">
            <h3 class="title-en">testimonials</h3>
            <h3 class="title-th">ความประทับใจจากเจ้าของโครงการ</h3>
          </div>
          <div class="testimonial__content-slide">
            <div class="swiper-container testimonial">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-slide-box">
                    <p class="testimonial-slide-description">“ขอบคุณทีมงานขนะดีไซน์ ที่ใส่ใจทุกๆขั้นตอน
                      เข้ามาดูหน้างานก่อสร้าง รวมถึงทุกๆกระบวนแสดงถึงความใส่ใจในทุกๆขั้นตอนในการทำงาน
                      รวมทั้งเมื่อโครงการเสร็จสิ้นก็ได้ผลลัพธ์ที่เกินความคาดหมายมาก ”</p>
                    <div class="testimonial-customer-detail-box">
                      <div class="testimonial-customer-image-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/testimonial_customer.png"
                          alt="" class="testimonial-customer-image">
                      </div>
                      <div class="testimonial-customer-title">
                        <p class="customer-lead-title">เจ้าของโครงการ</p>
                        <p class="customer-title">Frasers Property</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-slide-box">
                    <p class="testimonial-slide-description">“ขอบคุณทีมงานขนะดีไซน์ ที่ใส่ใจทุกๆขั้นตอน
                      เข้ามาดูหน้างานก่อสร้าง รวมถึงทุกๆกระบวนแสดงถึงความใส่ใจในทุกๆขั้นตอนในการทำงาน
                      รวมทั้งเมื่อโครงการเสร็จสิ้นก็ได้ผลลัพธ์ที่เกินความคาดหมายมาก ”</p>
                    <div class="testimonial-customer-detail-box">
                      <div class="testimonial-customer-image-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/testimonial_customer.png"
                          alt="" class="testimonial-customer-image">
                      </div>
                      <div class="testimonial-customer-title">
                        <p class="customer-lead-title">เจ้าของโครงการ</p>
                        <p class="customer-title">OBS Property</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="prev-button">
                <div class="leftarrow">
                  <i class="fas fa-chevron-left"></i>
                </div>
              </div>
              <div class="next-button">
                <div class="rightarrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__background-image">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/bg-testimonials.jpg" alt="">
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