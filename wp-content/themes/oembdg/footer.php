
<?php 
    wp_footer();
?>
<div id="before__footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6">
        <a href="https://www.bdgoem.com/contact-us/">
        <div class="before__footer-contact">
          <img class="bg-image" src="<?php echo get_template_directory_uri(); ?>/asset/footer-contact.png" alt="">
          <div class="contact-text">
            <p class="text-en">Contact Us</p>
            <p class="text-th">ติดต่อเรา</p>
          </div>
          <div class="contact-button">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/footer-arrow-button.png" alt="">
          </div>
        </div>
        </a>
      </div>
      <div class="col-12 col-lg-6">
        <div class="before__footer-quote">
          <img class="bg-image" src="<?php echo get_template_directory_uri(); ?>/asset/footer-quote.png" alt="">
          <div class="quote-text">
            <p class="text-en">Request a quote</p>
            <p class="text-th">ขอใบเสนอราคา</p>
          </div>
          <div class="quote-button">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/footer-arrow-button.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>   
<div id="main_footer">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="footer__company-info">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/bdglogowhite.png" alt="">
          <h3 class="footer-company-name">British Dispensary Group</h3>
          <p class="footer-location">100/105-108, 31st Floor Vongvanij B Building, Rama 9, Huay Kwang, BKK 10320. Thailand</p>
          <p class="footer-mail">oem@britishdispensary.com</p>
          <p class="footer-tel">(+66) 2-645-1333</p>
          <p class="footer-time">Monday - Friday: 08:30 - 17:00</p>
          <div class="footer-menu__mobile">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    menu
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <?php
                        wp_nav_menu( 
                            array (
                                'menu' => '',
                                'theme_location' => 'footer_1',
                                'items_wrap' => '<ul class="footer-menu__mobile-list">%3$s</ul>',
                            )
                        )
                    ?>
                    <!-- <ul class="footer-menu__mobile-list">
                      <li>
                        <a href="">About</a>
                      </li>
                      <li>
                        <a href="">Process</a>
                      </li>
                      <li>
                        <a href="">Blog</a>
                      </li>
                      <li>
                        <a href="">Contact us</a>
                      </li>
                      <li>
                        <a href="">Request a quote</a>
                      </li>
                    </ul> -->
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    cosmetic
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <?php
                        wp_nav_menu( 
                            array (
                                'menu' => '',
                                'theme_location' => 'footer_2',
                                'items_wrap' => '<ul class="footer-menu__mobile-list">%3$s</ul>',
                            )
                        )
                    ?>
                    <!-- <ul class="footer-menu__mobile-list">
                      <li>
                        <a href="">Hair Care</a>
                      </li>
                      <li>
                        <a href="">Oral Care</a>
                      </li>
                      <li>
                        <a href="">Facial Care</a>
                      </li>
                      <li>
                        <a href="">Toiletries</a>
                      </li>
                      <li>
                        <a href="">Body Care</a>
                      </li>
                      <li>
                        <a href="">Cosmeceuticals</a>
                      </li>
                      <li>
                        <a href="">Body Treatment</a>
                      </li>
                      <li>
                        <a href="">Cleaner</a>
                      </li>
                      <li>
                        <a href="">Makeuo</a>
                      </li>
                      <li>
                        <a href="">Repellent Product</a>
                      </li>
                    </ul> -->
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    supplement
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <?php
                        wp_nav_menu( 
                            array (
                                'menu' => '',
                                'theme_location' => 'footer_3',
                                'items_wrap' => '<ul class="footer-menu__mobile-list">%3$s</ul>',
                            )
                        )
                    ?>
                    <!-- <ul class="footer-menu__mobile-list">
                      <li>
                        <a href="">Bone Health</a>
                      </li>
                      <li>
                        <a href="">Hair Health</a>
                      </li>
                      <li>
                        <a href="">Eyes Health</a>
                      </li>
                      <li>
                        <a href="">Weight Control</a>
                      </li>
                      <li>
                        <a href="">Muscle Builder</a>
                      </li>
                      <li>
                        <a href="">Heart Health</a>
                      </li>
                      <li>
                        <a href="">Men Health</a>
                      </li>
                      <li>
                        <a href="">Women Health</a>
                      </li>
                      <li>
                        <a href="">Brain Health</a>
                      </li>
                      <li>
                        <a href="">Skin Care</a>
                      </li>
                    </ul> -->
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Mosquito Repellent
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <?php
                        wp_nav_menu( 
                            array (
                                'menu' => '',
                                'theme_location' => 'footer_4',
                                'items_wrap' => '<ul class="footer-menu__mobile-list">%3$s</ul>',
                            )
                        )
                    ?>
                    <!-- <ul class="footer-menu__mobile-list">
                      <li>
                        <a href="">Bone Health</a>
                      </li>
                      <li>
                        <a href="">Hair Health</a>
                      </li>
                      <li>
                        <a href="">Eyes Health</a>
                      </li>
                      <li>
                        <a href="">Weight Control</a>
                      </li>
                      <li>
                        <a href="">Muscle Builder</a>
                      </li>
                      <li>
                        <a href="">Heart Health</a>
                      </li>
                      <li>
                        <a href="">Men Health</a>
                      </li>
                      <li>
                        <a href="">Women Health</a>
                      </li>
                      <li>
                        <a href="">Brain Health</a>
                      </li>
                      <li>
                        <a href="">Skin Care</a>
                      </li>
                    </ul> -->
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Pharmaceuticals
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <?php
                        wp_nav_menu( 
                            array (
                                'menu' => '',
                                'theme_location' => 'footer_5',
                                'items_wrap' => '<ul class="footer-menu__mobile-list">%3$s</ul>',
                            )
                        )
                    ?>
                    <!-- <ul class="footer-menu__mobile-list">
                      <li>
                        <a href="">Bone Health</a>
                      </li>
                      <li>
                        <a href="">Hair Health</a>
                      </li>
                      <li>
                        <a href="">Eyes Health</a>
                      </li>
                      <li>
                        <a href="">Weight Control</a>
                      </li>
                      <li>
                        <a href="">Muscle Builder</a>
                      </li>
                      <li>
                        <a href="">Heart Health</a>
                      </li>
                      <li>
                        <a href="">Men Health</a>
                      </li>
                      <li>
                        <a href="">Women Health</a>
                      </li>
                      <li>
                        <a href="">Brain Health</a>
                      </li>
                      <li>
                        <a href="">Skin Care</a>
                      </li>
                    </ul> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer__share-icon">
            <a href="">
              <div class="facebook-icon">
                <i class="fab fa-facebook-f"></i>
              </div>
            </a>
            <a href="">
              <div class="instagram-icon">
                <i class="fab fa-instagram"></i>
              </div>
            </a>
            <a href="">
              <div class="line-icon">
                <i class="fab fa-line"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="d-none d-md-block col-auto">
        <div class="footer__main-menu">
          <span class="text-uppercase">Menu</span>
          <?php
          wp_nav_menu( 
              array (
                  'menu' => '',
                  'theme_location' => 'footer_1',
              )
          )
          ?>
          <!-- <ul>
            <li>
              <a href="">About</a>
            </li>
            <li>
              <a href="">Process</a>
            </li>
            <li>
              <a href="">Blog</a>
            </li>
            <li>
              <a href="">Contact Us</a>
            </li>
            <li>
              <a href="">Request a quote</a>
            </li>
          </ul> -->
        </div>
      </div>
      <div class="d-none d-md-block col-auto">
        <div class="footer__main-menu menu-cosmetic">
          <span class="text-uppercase">Cosmetic</span>
          <?php
          wp_nav_menu( 
              array (
                  'menu' => '',
                  'theme_location' => 'footer_2',
              )
          )
          ?>
          <!-- <ul>
            <li>
              <a href="">Hair Care</a>
            </li>
            <li>
              <a href="">Oral Care</a>
            </li>
            <li>
              <a href="">Facial Care</a>
            </li>
            <li>
              <a href="">Toiletries</a>
            </li>
            <li>
              <a href="">Body Care</a>
            </li>
            <li>
              <a href="">Cosmeceuticals</a>
            </li>
            <li>
              <a href="">Body Treatment</a>
            </li>
            <li>
              <a href="">Cleaner</a>
            </li>
            <li>
              <a href="">Makeup</a>
            </li>
            <li>
              <a href="">Repellent Product</a>
            </li>
          </ul> -->
        </div>
      </div>
      <div class="d-none d-md-block col-auto">
        <div class="footer__main-menu menu-supplement">
          <span class="text-uppercase">Supplement</span>
          <?php
          wp_nav_menu( 
              array (
                  'menu' => '',
                  'theme_location' => 'footer_3',
              )
          )
          ?>
          <!-- <ul>
            <li>
              <a href="">Bone Health</a>
            </li>
            <li>
              <a href="">Hair Health</a>
            </li>
            <li>
              <a href="">Eyes Health</a>
            </li>
            <li>
              <a href="">Weight Control</a>
            </li>
            <li>
              <a href="">Muscle Builder</a>
            </li>
            <li>
              <a href="">Heart Health</a>
            </li>
            <li>
              <a href="">Men health</a>
            </li>
            <li>
              <a href="">Woman Health</a>
            </li>
            <li>
              <a href="">Brain Health</a>
            </li>
            <li>
              <a href="">Skin Care</a>
            </li>
          </ul> -->
        </div>
      </div>
      <div class="d-none d-md-block col-auto">
        <div class="footer__main-menu menu-supplement">
          <span class="text-uppercase">Mosquito Repellent</span>
          <?php
          wp_nav_menu( 
              array (
                  'menu' => '',
                  'theme_location' => 'footer_4',
              )
          )
          ?>
          <!-- <ul>
            <li>
              <a href="">Bone Health</a>
            </li>
            <li>
              <a href="">Hair Health</a>
            </li>
            <li>
              <a href="">Eyes Health</a>
            </li>
            <li>
              <a href="">Weight Control</a>
            </li>
            <li>
              <a href="">Muscle Builder</a>
            </li>
            <li>
              <a href="">Heart Health</a>
            </li>
            <li>
              <a href="">Men health</a>
            </li>
            <li>
              <a href="">Woman Health</a>
            </li>
            <li>
              <a href="">Brain Health</a>
            </li>
            <li>
              <a href="">Skin Care</a>
            </li>
          </ul> -->
        </div>
      </div>
      <div class="d-none d-md-block col-auto">
        <div class="footer__main-menu menu-supplement">
          <span class="text-uppercase">Pharmaceuticals</span>
          <?php
          wp_nav_menu( 
              array (
                  'menu' => '',
                  'theme_location' => 'footer_5',
              )
          )
          ?>
          <!-- <ul>
            <li>
              <a href="">Bone Health</a>
            </li>
            <li>
              <a href="">Hair Health</a>
            </li>
            <li>
              <a href="">Eyes Health</a>
            </li>
            <li>
              <a href="">Weight Control</a>
            </li>
            <li>
              <a href="">Muscle Builder</a>
            </li>
            <li>
              <a href="">Heart Health</a>
            </li>
            <li>
              <a href="">Men health</a>
            </li>
            <li>
              <a href="">Woman Health</a>
            </li>
            <li>
              <a href="">Brain Health</a>
            </li>
            <li>
              <a href="">Skin Care</a>
            </li>
          </ul> -->
        </div>
      </div>
    </div>
    <div class="row footer__copyright d-none d-lg-flex">
      <div class="col-12 col-lg-6">
        <div class="footer__copyright-left">
          <p>Copyright 2022 British Dispensary Group. All Right Reserved.</p>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="footer__copyright-right text-right">
          <p>Privacy & Policy</p>
        </div>
      </div>
    </div>
    <div class="row footer__copyright d-lg-none">
      <div class="col-12 col-lg-6">
        <div class="footer__copyright-left">
          <p>Copyright 2020 British Dispensary Group.</p>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="footer__copyright-right">
          <p>All Right Reserved. Privacy & Policy</p>
        </div>
      </div>
    </div>
  </div>
</div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js" integrity="sha512-Gx/C4x1qubng2MWpJIxTPuWch9O88dhFFfpIl3WlqH0jPHtCiNdYsmJBFX0q5gIzFHmwkPzzYTlZC/Q7zgbwCw==" crossorigin="anonymous"></script>

<script>
    var myswiper = new Swiper('.swiper-container.hero', {
      slidesPerView: 1,
      effect: 'fade',
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      autoplay: {
        delay: 5600,
        disableOnInteraction: false,
      },
      zoom: true,
    });

    var swiper = new Swiper('.swiper-container.blog-swiper', {
      slidesPerView: 'auto',
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

    var historyswiper = new Swiper('.swiper-container.history-swiper', {
      slidesPerView: 'auto',
      spaceBetween: 20,
      navigation: {
        nextEl: '.next-button',
        prevEl: '.prev-button',
      },
    });

    var serviceswiper = new Swiper('.swiper-container.service', {
      slidesPerView: 'auto',
      spaceBetween: 16,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
</script>
<script>

    new fullpage('#fullPage', {

        autoScrolling: false,
        navigation:true,
        bigSectionsDestination: (top),
    })

</script> 
<script>
  var rellax = new Rellax('.rellax');
</script>  
<script>

   
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 0,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      thumbs: {
        swiper: galleryThumbs,
        width:110,
      }
    });
    
    

</script>
<script type="text/javascript">
(function() {
  var StackCards = function(element) {
    this.element = element;
    this.items = this.element.getElementsByClassName('js-stack-cards__item');
    this.scrollingFn = false;
    this.scrolling = false;
    initStackCardsEffect(this); 
    initStackCardsResize(this); 
  };

  function initStackCardsEffect(element) { // use Intersection Observer to trigger animation
    setStackCards(element); // store cards CSS properties
    var observer = new IntersectionObserver(stackCardsCallback.bind(element), { threshold: [0, 1] });
    observer.observe(element.element);
  };

  function initStackCardsResize(element) { // detect resize to reset gallery
    element.element.addEventListener('resize-stack-cards', function(){
      setStackCards(element);
      animateStackCards.bind(element);
    });
  };
  
  function stackCardsCallback(entries) { // Intersection Observer callback
    if(entries[0].isIntersecting) {
      if(this.scrollingFn) return; // listener for scroll event already added
      stackCardsInitEvent(this);
    } else {
      if(!this.scrollingFn) return; // listener for scroll event already removed
      window.removeEventListener('scroll', this.scrollingFn);
      this.scrollingFn = false;
    }
  };
  
  function stackCardsInitEvent(element) {
    element.scrollingFn = stackCardsScrolling.bind(element);
    window.addEventListener('scroll', element.scrollingFn);
  };

  function stackCardsScrolling() {
    if(this.scrolling) return;
    this.scrolling = true;
    window.requestAnimationFrame(animateStackCards.bind(this));
  };

  function setStackCards(element) {
    // store wrapper properties
    element.marginY = getComputedStyle(element.element).getPropertyValue('--stack-cards-gap');
    getIntegerFromProperty(element); // convert element.marginY to integer (px value)
    element.elementHeight = element.element.offsetHeight;

    // store card properties
    var cardStyle = getComputedStyle(element.items[0]);
    element.cardTop = Math.floor(parseFloat(cardStyle.getPropertyValue('top')));
    element.cardHeight = Math.floor(parseFloat(cardStyle.getPropertyValue('height')));

    // store window property
    element.windowHeight = window.innerHeight;

    // reset margin + translate values
    if(isNaN(element.marginY)) {
      element.element.style.paddingBottom = '0px';
    } else {
      element.element.style.paddingBottom = (element.marginY*(element.items.length - 1))+'px';
    }

    for(var i = 0; i < element.items.length; i++) {
      if(isNaN(element.marginY)) {
        element.items[i].style.transform = 'none;';
      } else {
        element.items[i].style.transform = 'translateY('+element.marginY*i+'px)';
      }
    }
  };

  function getIntegerFromProperty(element) {
    var node = document.createElement('div');
    node.setAttribute('style', 'opacity:0; visbility: hidden;position: absolute; height:'+element.marginY);
    element.element.appendChild(node);
    element.marginY = parseInt(getComputedStyle(node).getPropertyValue('height'));
    element.element.removeChild(node);
  };

  function animateStackCards() {
    if(isNaN(this.marginY)) { // --stack-cards-gap not defined - do not trigger the effect
      this.scrolling = false;
      return; 
    }

    var top = this.element.getBoundingClientRect().top;

    if( this.cardTop - top + this.element.windowHeight - this.elementHeight - this.cardHeight + this.marginY + this.marginY*this.items.length > 0) { 
      this.scrolling = false;
      return;
    }

    for(var i = 0; i < this.items.length; i++) { // use only scale
      var scrolling = this.cardTop - top - i*(this.cardHeight+this.marginY);
      if(scrolling > 0) {  
        var scaling = i == this.items.length - 1 ? 1 : (this.cardHeight - scrolling*0.05)/this.cardHeight;
        this.items[i].style.transform = 'translateY('+this.marginY*i+'px) scale('+scaling+')';
      } else {
        this.items[i].style.transform = 'translateY('+this.marginY*i+'px)';
      }
    }

    this.scrolling = false;
  };

  // initialize StackCards object
  var stackCards = document.getElementsByClassName('js-stack-cards'),
    intersectionObserverSupported = ('IntersectionObserver' in window && 'IntersectionObserverEntry' in window && 'intersectionRatio' in window.IntersectionObserverEntry.prototype),
    reducedMotion = Util.osHasReducedMotion();
    
  if(stackCards.length > 0 && intersectionObserverSupported && !reducedMotion) { 
    var stackCardsArray = [];
    for(var i = 0; i < stackCards.length; i++) {
      (function(i){
        stackCardsArray.push(new StackCards(stackCards[i]));
      })(i);
    }
    
    var resizingId = false,
      customEvent = new CustomEvent('resize-stack-cards');
    
    window.addEventListener('resize', function() {
      clearTimeout(resizingId);
      resizingId = setTimeout(doneResizing, 500);
    });

    function doneResizing() {
      for( var i = 0; i < stackCardsArray.length; i++) {
        (function(i){stackCardsArray[i].element.dispatchEvent(customEvent)})(i);
      };
    };
  }
}());
</script> 
<script>
  AOS.init();
</script>
</body>
</html>