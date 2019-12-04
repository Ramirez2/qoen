<!DOCTYPE html>
<!--
  Girly by FreeHTML5.co
  Twitter: https://twitter.com/fh5co
  Facebook: https://fb.com/fh5co
  URL: https://freehtml5.co
-->
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/carousel.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
<script>!function(e){"undefined"==typeof module?this.charming=e:module.exports=e}(function(e,n){"use strict";n=n||{};var t=n.tagName||"span",o=null!=n.classPrefix?n.classPrefix:"char",r=1,a=function(e){for(var n=e.parentNode,a=e.nodeValue,c=a.length,l=-1;++l<c;){var d=document.createElement(t);o&&(d.className=o+r,r++),d.appendChild(document.createTextNode(a[l])),n.insertBefore(d,e)}n.removeChild(e)};return function c(e){for(var n=[].slice.call(e.childNodes),t=n.length,o=-1;++o<t;)c(n[o]);e.nodeType===Node.TEXT_NODE&&a(e)}(e),e});
</script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
  <title>QOEN</title>
</head>

<body>
  <nav class="navbar navbar-fixed-top is-primary" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="assets/img/logo.jpg" width="50" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/">
        Home
      </a>

      <a class="navbar-item" href="#about">
        About Us
      </a>

      <a class="navbar-item" href="#register">
        To Register
      </a>

      <a class="navbar-item" href="#portfolio">
        Past Queens
      </a>

      <a class="navbar-item" href="#sponsor">
        Sponsors
      </a>

      <a class="navbar-item" href="blog">
        Pet Projets
      </a>

       <a class="navbar-item" href="#galery">
        Galery
      </a>

      <a class="navbar-item" href="##contact">
        Contact Us
      </a>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

  <section>

  <div class="swiper-container slideshow">

    <div class="swiper-wrapper">

      <div class="swiper-slide slide">
        <div class="slide-image" style="background-image: url(assets/img/audition1.jpg)"></div>
        <span class="slide-title">Exotic Beauty Pageant</span>
      </div>

      <div class="swiper-slide slide">
        <div class="slide-image" style="background-image: url(assets/img/audition2.jpg)"></div>
        <span class="slide-title">Meet us during auditions</span>
      </div>

      <div class="swiper-slide slide">
        <div class="slide-image" style="background-image: url(assets/img/queens.jpg)"></div>
        <span class="slide-title">Around the world</span>
      </div>

    </div>

    <div class="slideshow-pagination"></div>

    <div class="slideshow-navigation">
      <div class="slideshow-navigation-button prev"><span class="fas fa-chevron-left"></span></div>
      <div class="slideshow-navigation-button next"><span class="fas fa-chevron-right"></span></div>
    </div>

  </div>

</section>
<script>
    // The Slideshow class.
class Slideshow {
    constructor(el) {
        
        this.DOM = {el: el};
      
        this.config = {
          slideshow: {
            delay: 3000,
            pagination: {
              duration: 3,
            }
          }
        };
        
        // Set the slideshow
        this.init();
      
    }
    init() {
      
      var self = this;
      
      // Charmed title
      this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
      this.DOM.slideTitle.forEach((slideTitle) => {
        charming(slideTitle);
      });
      
      // Set the slider
      this.slideshow = new Swiper (this.DOM.el, {
          
          loop: true,
          autoplay: {
            delay: this.config.slideshow.delay,
            disableOnInteraction: false,
          },
          speed: 500,
          preloadImages: true,
          updateOnImagesReady: true,
          
          // lazy: true,
          // preloadImages: false,

          pagination: {
            el: '.slideshow-pagination',
            clickable: true,
            bulletClass: 'slideshow-pagination-item',
            bulletActiveClass: 'active',
            clickableClass: 'slideshow-pagination-clickable',
            modifierClass: 'slideshow-pagination-',
            renderBullet: function (index, className) {
              
              var slideIndex = index,
                  number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);
              
              var paginationItem = '<span class="slideshow-pagination-item">';
              paginationItem += '<span class="pagination-number">' + number + '</span>';
              paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
              paginationItem += '</span>';
            
              return paginationItem;
              
            },
          },

          // Navigation arrows
          navigation: {
            nextEl: '.slideshow-navigation-button.next',
            prevEl: '.slideshow-navigation-button.prev',
          },

          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        
          on: {
            init: function() {
              self.animate('next');
            },
          }
        
        });
      
        // Init/Bind events.
        this.initEvents();
        
    }
    initEvents() {
        
        this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
        //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());

        this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));
        
        this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));
            
    }
    animate(direction = 'next') {
      
        // Get the active slide
        this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
        this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
        this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
        this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');
      
        // Reverse if prev  
        this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();
      
        // Get old slide
        this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
        if (this.DOM.oldSlide) {
          // Get parts
          this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
          this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span'); 
          // Animate
          this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
            TweenMax.to(letter, .3, {
              ease: Quart.easeIn,
              delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
              y: '50%',
              opacity: 0
            });
          });
        }
      
        // Animate title
        this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
          TweenMax.to(letter, .6, {
            ease: Back.easeOut,
            delay: pos*.05,
            startAt: {y: '50%', opacity: 0},
            y: '0%',
            opacity: 1
          });
        });
      
        // Animate background
        TweenMax.to(this.DOM.activeSlideImg, 1.5, {
            ease: Expo.easeOut,
            startAt: {x: direction === 'next' ? 200 : -200},
            x: 0,
        });
      
        //this.animatePagination()
    
    }
    animatePagination(swiper, paginationEl) {
            
      // Animate pagination
      this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
      this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
      this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');
      
      console.log(swiper.pagination);
      // console.log(swiper.activeIndex);
      
      // Reset and animate
        TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
        TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
          startAt: {scaleX: 0},
          scaleX: 1,
        });
      
      
    }
    
}

const slideshow = new Slideshow(document.querySelector('.slideshow'));

</script>

  <div class="container-fluid fh5co-recent-work">
    <center><div class="title is-primary"> 
       <h1 class="title"> About Us</h1>
   </div></center>
    <div class="container contact-pop">
      <div class="row">
        <div class="col-md-6  pr-0">
          <div class="card"> <img class="card-img w-100" src="assets/img/logo.jpg" alt="">
            <div class="card-img-overlay"> </div>
          </div>
        </div>
        <div class="col-md-6 pl-0" id="about">
          <div class="content">
            <h3>Things to Know About Queen of Emerald Nigeria</h3>
            <h4>Beauty Pageant </h4>
            <hr />
            <p style="text-align: justify;">Queen of Emerald  is an annual beauty pageant that has been orchestrated to raise beauty queens whose prior objective is to take up cervical cancer campaign projects that will promote more awareness; through Youth Empowerment Programmes, Advocacy, Public health promotions, secondary/tertiary Institutions sensitization and so on, which entails educating all Nigerian women about the spread and ways to stop CERVICAL CANCER. Queen of Emerald primary slogan is raising <em>Cervical cancer  awereness.</em> We are not well informed in this part of the world of this deadly cancer and ways to curb them, therefore, the Queen (winner) and her ambassadors will be charged together with our sponsors to spread the awareness across Nigeria & beyond. We need young females to enlightening the teeming Nigerian women on the symptoms, effects and ways to treat Cervical Cancer.</p>
            <a href="#" class="btn">CONTACT</a> </div>
          </div>
        </div>
      </div><br> 
    <div class="container col-lg-12">
      <center><div class="title is-primary" id="register">
            
                <h1 class="title"> To Register</h1>
              
   </div></center>
    <div class="row">
       <div class="card column is-three-quarters-mobile">
         <div class="card-content">
              <article class="message column is-three-quarters-mobile">
              <div class="message-header">
                 <p>Registration for QUEEN OF EMERALD 2020</p>
              </div><br>
              <div class="message-body" style="text-align: justify;">
                The Ideology behind Queen of Emerald beauty pageant is broken down into two core points <strong>“BEAUTY & PURPOSE”</strong><br>

                         <strong>BEAUTY:</strong> Our potential queen(s) must be one that has good looks and possess all the essential qualities of a queen ie EMERALD <br>

                         <strong>PURPOSE</strong>– she must be ready to help elevate the ignorance, young ladies get in dealing with <em>Cervical Cancer</em>; willing to work for humanity and also contribute her quota by giving her all for the fight of it.
              </div>
              <div class="message-header">
                <p>CRITERIAS TO PARTICIPATE</p>
              </div>
              <div class="message-body">
                 <p>An applicant should:</p><br>
                              ✓ be between 18 - 29yrs<br>
                              ✓ be atleast 5ft 5inches<br>
                              ✓ Not be too chubby<br>
                              ✓ be Good looking
              </div>
            </article>
         </div>
       </div>
       <div class="card column is-three-quarters-mobile">
          <div class="card-content">
             <article class="message column is-three-quarters-mobile">
                <div class="message-header">
                    <p>HOW TO APPLY</p>
                </div><br>
                <div class="message-body">
                  <p style="text-align: justify;"> Registration for 5th Queen of Emerald Nigeria 2020 [The Humanitarian Edition] will commence on the 16th of December, 2019</p><br>
                   <strong>To Register:</strong> 
                      <h4>Send </h4>
                              ✓ Full Name <br>        ✓ Full Picture <br>

                              ✓ Location               ✓ Active Phone Number <br>

                              ✓ What you can do for humanity <br>
                                 <strong>To</strong> <br>
                                 07039737968 [WhatsApp] <br>
                                 <strong>Or</strong> <br>
                                 <li>queenofemeraldng@gmail.com</li>
                </div>
                <div class="message-header">
                  <p>AUDITIONS</p>
                </div><br>
                <div class="message-body">
                  <p style="text-align: justify;"> Queen of Emerald 2020 Auditions would be held in 10 cities across  Nigeria.</p>

                              <h5><strong>Audition begins on 8thbof Feb, 2020</strong></h5><br>
                              <h5>10 Cities, for the 5th Edition Queen of Emerald 2020</h5>
                   <br>

                              ✓ Ibadan        ✓ Benin      ✓ Lagos   <br>

                              ✓Abuja          ✓ Awka       ✓ Owerri  <br>

                              ✓Portharcourt   ✓ Uyo        ✓ Calabar <br>

                              ✓Asaba
                </div>
             </article>
           </div>
         </div>
         <div class="card column is-three-quarters-mobile">
            <div class="card-content">
               <article class="message column is-three-quarters-mobile">
                  <div class="message-header">
                    <p>AUDITION REQUIREMENTS</p>
                  </div><br>
                  <div class="message-body">
                     <p style="text-align: justify;"> Applicants for Queen of Emerald 2020 should be  at the audition venue with</p>
                     <br>
                        ✓    A white tank top, upon a blue bum short or blue trouser & pencil heels
                        ✓    A CEO Perfume 
                        ✓    Printed Registration form 

                        <p style="text-align: justify;">
                          <strong>NB: </strong> <br>
                                Details of the Audition Venue would be uploaded on all our social media platform and website before Audition commences.
                        </p><br>

                        <p>
                          <strong>For more info/Enquiries/sponsorship</strong><br>
                                Call:      
                                +2347039737968
                                +2347032227610
                        </p><br>

                        <p>
                          <strong>Follow us on our social media platform</strong><br>
                                Instagram @queenofemeraldng <br>
                                Facevook: facebook.com/queenofemeraldng <br>
                                Twitter: @emeraldqueensNG <br>
                                Whatsapp: +2347039737968 <br>
                                Website: www.queenofemerald.org.ng
                        </p>
                      </div>
                 </article>
            </div>
         </div>
       </div>     
      </div>
    </div>
   </div>
 </div>
  <div class="container-fluid recent fh5co-portfolio" id="portfolio"><br> 
    <center><div class="title is-primary">
            
                <h1 class="title"> Past Queens</h1>
              
   </div></center>
    <div class="container">
      <div class="row">
          <div class="card column is-three-fifth-mobile">
            <div class="card-content">
                   <img class="card-img" src="assets/img/QOEN19.jpg" alt="" style="border-radius: 10px">
                   <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                       <div class="bottom-text">
                         <h5 class="card-title">Queen Esther Sule (QOEN 2019)</h5>
                       </div>
                   </div>
            </div>
         </div>

         <div class="card column is-three-fifth-mobile">
            <div class="card-content">
                   <img class="card-img" src="assets/img/QOEN18.jpg" alt="" style="border-radius: 10px">
                   <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                       <div class="bottom-text">
                         <h5 class="card-title">Queen Faith Efe (QOEN 2018)</h5>
                       </div>
                   </div>
            </div>
         </div>

         <div class="card column is-three-fifth-mobile">
            <div class="card-content">
                   <img class="card-img" src="assets/img/QOEN17.jpg" alt="" style="border-radius: 10px">
                   <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                       <div class="bottom-text">
                         <h5 class="card-title">Queen Stella Chidiobi (QOEN 2017)</h5>
                       </div>
                   </div>
            </div>
         </div>

         <div class="card column is-three-fifth-mobile">
            <div class="card-content">
                   <img class="card-img" src="assets/img/QOEN16.jpg" alt="" style="border-radius: 10px">
                   <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                       <div class="bottom-text">
                         <h5 class="card-title">Queen Rita Jonnah (QOEN 2016)</h5>
                       </div>
                   </div>
            </div>
         </div>

      </div>
    </div>
  </div>
  <div class="container-fluid fh5co-recent-work activity"><br> 
     <center><div class="title is-primary" id="sponsor">
            
                <h1 class="title"> Our Sponsors</h1>
             
   </div></center>
    <div class="container recent">
      <div class="row">
        <div class="owl-carousel owl-carousel3 owl-theme">
          <div>
            <div class="card"> <img class="card-img" src="assets/img/sponsor3.jpg" alt="" style="border-radius: 10px">
              <div class="card-img-overlay">
                <div class="bottom-text">
                 
                  <a href="#">Read more <img src="assets/img/double-right.svg" alt=""></a> 
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="card"> <img class="card-img" src="assets/img/sponsor1.jpg"  alt="" style="border-radius: 10px">
              <div class="card-img-overlay">
                <div class="bottom-text">
                  
                  <a href="#">Read more <img src="assets/img/double-right.svg" alt=""></a> 
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="card"> <img class="card-img" src="assets/img/sponsor2.jpg" alt="" style="border-radius: 10px">
              <div class="card-img-overlay">
                <div class="bottom-text">
                  
                  <a href="#">Read more <img src="assets/img/double-right.svg" alt=""></a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid fh5co-about-me" id="testimonial"><br> 
    <div id="my-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="card"> <img class="card-img d-block w-100" src="assets/img/about-me-img.jpg" alt="">
          <div class="card-img-overlay">
           <center> <div class="title is-primary">
            
                <h1 class="title"> People's Opinion about us</h1>
              
           </div></center>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" > <img src="assets/img/about-me-img1.png" alt=""> <span>Sherrie Rose</span> </li>
        <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> <img src="assets/img/about-me-img2.png" alt=""> <span>Sherrie Rose</span> </li>
        <li data-target="#my-carousel" data-slide-to="2"> <img src="assets/img/about-me-img3.png" alt=""> <span>Sherrie Rose</span> </li>
      </ol>
    </div>
  </div>

  <div class="container-fluid recent fh5co-portfolio" id="galery"><br> 
    <center><div class="title is-primary">
            
                <h1 class="title"> Gallery</h1>
              
   </div></center>
    <div class="container">
      <div class="row">
        <div class="bx bx-1">
          <div class="card"> <img class="card-img" src="assets/img/new/galery1.jpg" alt="" style="border-radius: 10px">
            <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
              
            </div>
          </div>
        </div>
        <div class="bx bx-2">
          <div class="card"> <img class="card-img" src="assets/img/new/galery2.jpg" alt="" style="border-radius: 10px">
            <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
              
            </div>
          </div>
        </div>
        <div class="bx bx-3">
          <div class="card"> <img class="card-img" src="assets/img/new/galery4.jpg" alt="" style="border-radius: 10px">
            <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
              
            </div>
          </div>
        </div>
        <div class="bx bx-4">
          <div class="card"> <img class="card-img" src="assets/img/new/galery3.jpg" alt="" style="border-radius: 10px">
            <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
            
            </div>
          </div>
        </div>
        <div class="bx bx-middle" style="padding: 0;">
          <div class="bx bx-5">
            <div class="card"> <img class="card-img" src="assets/img/new/winner.jpg" alt="" style="border-radius: 10px">
              <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                
              </div>
            </div>
          </div>
          <div class="bx bx-6">
            <div class="card"> <img class="card-img" src="assets/img/new/QOEN.jpg" alt="" style="border-radius: 10px">
              <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                
              </div>
            </div>
          </div>
          <div>
            <div class="bx bx-7">
              <div class="card"> <img class="card-img" src="assets/img/new/queens.jpg" alt="" style="border-radius: 10px">
                <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                  
                </div>
              </div>
            </div>
            <div class="bx bx-8">
              <div class="card"> <img class="card-img" src="assets/img/new/galey8.jpg" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid fh5co-insta-feed activity">
    <div class="container recent">
      <div class="row mb-5 pb-5">
        <div class="col-lg-6">
          <div class="twit-box">
            <div class="media mb-3"> <img class="align-self-start mr-3 rounded-circle" src="assets/img/twit-girl-img.png" alt="">
              <div class="media-body">
                <h5 class="mb-0 mt-3">Sandra reigel</h5>
                <p>@sandraphotography</p>
              </div>
            </div>
            <p class="text-justify"> “Sed ut perspiciatis unde omnis iste nats error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut. </p>
            <div class="clearfix"> <a href="#" class="btn btn-primary mt-2 float-right">Follow</a> </div>
          </div>
        </div>
        <div class="col-lg-6 feed-caro">
          <center> <div class="title is-primary">
            
                <h1 class="title"> Past Events</h1>
              
          </div></center>
          <div class="owl-carousel owl-carousel4 owl-theme">
            <div>
              <div class="card"> <iframe class="card-img" src="assets/video/event18.mp4" alt=""></iframe>
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"><iframe class="card-img" src="assets/video/event17.mp4" alt=""></iframe>
                <div class="card-img-overlay"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-center d-block">Find me on social media</h2>
      <div class="row social-links">
        <ul class="nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="https://www.facebook.com/queenofemeraldng"><img src="assets/img/facebook.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="https://twitter.com/@emeraldqueensNG"><img src="assets/img/twitter.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"><img src="assets/img/pinterest.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"><img src="assets/img/google-plus.png" alt=""></a> </li>
        </ul>
      </div>
    </div>
  </div>
  <footer class="container-fluid p-0 pr-0">
    <div class="row mr-0 ml-0">
      <div class="col-md-6 pr-0 pl-0 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13035.46901327725!2d-80.85396551628644!3d35.234674411422155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8856a03af474f38f%3A0xf8301daadf5f7670!2sFourth+Ward%2C+Charlotte%2C+NC%2C+USA!5e0!3m2!1sen!2sin!4v1551001218548"  style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6 content-us">
        <div class="contact-form" id="contact">
          <h3 class="text-uppercase">Contact me</h3>
          <input type="text" class="form-control" placeholder="Your Name">
          <input type="text" class="form-control" placeholder="Your Email">
          <textarea class="form-control" placeholder="Your Message"></textarea>
          <button type="submit">Send</button>
        </div>
      </div>
    </div>
    <div class="copy pt-4 pb-4">
      <p><a href="https://freehtml5.co/" target="_blank"> &copy; 2019 Girly</a>  &nbsp;  |  &nbsp; Design by <a href="https://freehtml5.co/" target="_blank">freehtml5.co</a> &nbsp; | &nbsp;  All rights reserved</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@3.0.0/dist/js/bulma-carousel.min.js"></script>
<script>
  $(document).ready(function(){
         var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
     });
</script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="assets/js/jquery-3.3.1.slim.min.js"></script> 
  <script src="assets/js/popper.min.js" ></script> 
  <script src="assets/js/bootstrap.min.js"></script> 
  <script src="assets/js/owl.carousel.min.js"></script> 
  <script src="assets/js/main.js"></script>

</body>
</html>