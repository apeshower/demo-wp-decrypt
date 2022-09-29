<!DOCTYPE html>
<html lang="en th">

<head>
    <meta http-equiv="Content-Language" content="th, en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/rellax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/asset/js/scripts.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/style.css">
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/asset/js/verif.js"></script>
    <script type="text/javascript">
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 130) {
            $(".header-inner").addClass("scroll");
        } else {
            $(".header-inner").removeClass("scroll");
        }
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#contactForm").validate();
        $('.proposal').click(function() {
            $('.proposal-section').addClass('open');
        });
        $('.before__footer-quote').click(function() {
            $('.proposal-section').addClass('open');
        });
        $('.proposal-button').click(function() {
            $('.proposal-section').addClass('open');
        });
        $('.proposal-button').click(function() {
            $('.proposal-overlay').addClass('open');
        });
        $('.quotation-button').click(function() {
            $('.proposal-section').addClass('open');
        });
        $('.quotation-button').click(function() {
            $('.proposal-overlay').addClass('open');
        });
        $('.before__footer-quote').click(function() {
            $('.proposal-overlay').addClass('open');
        });
        $('.proposal-close').click(function() {
            $('.proposal-section').removeClass('open');
        });
        $('.proposal-close').click(function() {
            $('.proposal-overlay').removeClass('open');
        });
        $('.proposal').click(function() {
            $('.proposal-overlay').addClass('open');
        });
        $('.proposal-overlay').click(function() {
            $('.proposal-overlay').removeClass('open');
        });
        $('.proposal-overlay').click(function() {
            $('.proposal-section').removeClass('open');
        });
        $('.header__menu').click(function() {
            $('.header-menu').addClass('open');
        });
        $('.header__menu').click(function() {
            $('.menu-overlay').addClass('open');
        });
        $('.menu-overlay').click(function() {
            $('.menu-overlay').removeClass('open');
        });
        $('.menu-overlay').click(function() {
            $('.header-menu').removeClass('open');
        });
        $('.menu-overlay').click(function() {
            $('.header__menu-close').removeClass('open');
        });
        $('.header__menu').click(function() {
            $('.header__menu-close').addClass('open');
        });
        $('.header__menu-close').click(function() {
            $('.header__menu-close').removeClass('open');
        });
        $('.header__menu-close').click(function() {
            $('.header-menu').removeClass('open');
        });
        $('.header__menu-close').click(function() {
            $('.menu-overlay').removeClass('open');
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(window).on("resize", function(e) {
            checkScreenSize();
        });

        checkScreenSize();

        function checkScreenSize() {
            var newWindowWidth = $(window).width();
            if (newWindowWidth < 500) {

                $('.header__menu').click(function() {
                    $('.header__menu p').addClass('open');
                });

                $('.menu-item-has-children').click(function() {
                    $('.main-menu li a ul').addClass('open');
                });

                $('.menu-item-has-children').click(function() {
                    $(this).children('.sub-menu-1').addClass('open');
                });
                // $('.main-menu .menu-item-has-children .sub-menu-1 .menu-item-has-children').click(function() {
                //   $(this).children('.sub-menu-2').addClass('open');
                // });

                $('.back-button').click(function() {
                    $(this).parent('.sub-menu-1').addClass('close');
                });
            } else {

            }
        }
    });
    </script>

    <?php
wp_head();
?>

<body>
    <div id="header">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-auto">
                    <div class="header__menu__section">
                        <div class="header__menu">
                            <img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/asset/menu-icon.png"
                                alt="">
                            <p class="text-uppercase">menu</p>
                        </div>
                        <div class="header__menu-close">
                            <img class="menu-icon-close"
                                src="<?php echo get_template_directory_uri(); ?>/asset/menu-close-button.png" alt="">
                            <p class="text-uppercase">close</p>
                        </div>
                        <div class="header__logo">
                            <a href="https://www.bdgoem.com/">
                                <img src="<?php echo get_template_directory_uri() ?>/asset/bdglogo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col header__proposal__section">
                    <div class="proposal">
                        <img src="<?php echo get_template_directory_uri() ?>/asset/proposal-icon.png" alt="">
                        <p>ขอใบเสนอราคา</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="proposal-overlay"></div>
        <div id="proposal-section" class="proposal-section">
            <img class="proposal-background-image" src="<?php echo get_template_directory_uri(); ?>/asset/quote-bg.png"
                alt="">
            <div class="proposal-section-content">
                <div class="proposal-close">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/close-icon.png" alt="">
                </div>
                <div class="proposal-section-content-text">
                    <p class="text-uppercase tag-title">request a quote</p>
                    <h3 class="title-th">ขอใบเสนอราคา</h3>
                </div>
                <div class="proposal-section-content-form">
                    <?php echo apply_shortcodes( '[contact-form-7 id="1342" title="Contact form 2"]' ); ?>
                    <!-- <form action="" method="post" class="ajax" enctype="multipart/form-data">
                        <div class="first-two">
                            <div class="form-name">
                                <p>ชื่อ</p>
                                <input type="text" class="name">
                            </div>
                            <div class="form-surname">
                                <p>นามสกุล</p>
                                <input type="text" class="surname">
                            </div>
                        </div>
                        <div class="second-two">
                            <div class="form-tel">
                                <p>หมายเลขโทรศัพท์</p>
                                <input type="number" class="tel">
                            </div>
                            <div class="form-mail">
                                <p>อีเมล</p>
                                <input type="email" class="email" required>
                            </div>
                        </div>
                        <div class="third-select">

                        </div>
                        <div class="fourth-textarea">
                            <p>ฝากข้อความ</p>
                            <textarea name="" id="" cols="30" rows="6" placeholder="พิมพ์ข้อความที่นี่"
                                class="message"></textarea>
                        </div>
                        <button class="contact-submit" type="submit">
                            <span>ขอใบเสนอราคา</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/contact-submit-icon.png" alt="">
                        </button>
                    </form> -->
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="wrapper-box d-none d-lg-block">
                <div class="wrapper">
                    <div class="line"></div>
                    <div class="wordwrapper">
                        <div class="word text-uppercase">british dispensary</div>
                    </div>
                </div>
            </div>
            <?php
          wp_nav_menu( 
              array (
                  'menu' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<ul class="main-menu">%3$s</ul>',
                  'walker' => new Walker_Nav_Primary
              )
          )
      ?>
        </div>
        <div class="menu-overlay"></div>
    </div>