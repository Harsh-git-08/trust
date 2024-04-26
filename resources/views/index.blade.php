<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge" >

    <!--=====TITLE=======-->
    <title>Home 01 || Criminal Defence Law</title>
    <!--=====FAV ICON=======--> 
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/modal-video.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/title1.svg') }}">

 
    <!--=====JQUERY=======-->
    <script src="{{asset('assets/js/jquery-3-6-0.min.js')}}"></script>
  </head>

  <body class="body1">
  <!--===== PRELOADER START=======-->
  <div id="preloader">
    <div class="preloader6">
      <span></span>
      <span></span>
    </div>
  </div>
  <!--===== PRELOADER END=======-->

  <!--===== PROGRESS START=======-->
  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
  </div>
  <!--===== PROGRESS END =======-->

  <!--=====HEADER START=======-->
  <header>
    <div class="header-area homepage6 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index-2.html" class="h2 text-primary">
                  {{-- <img src="assets/img/logo/header-logo1.svg" alt=""> --}}
                  NexaCured
                </a>
              </div>
              <div class="main-menu menu-ex6">
                <ul>
                  <li><a href="#">Home</a>
                    {{-- <ul class="dropdown-padding">
                      <li class="main-small-menu"><a href="#">Multipul Page <i class="fa-solid fa-angle-right"></i></a>
                        <ul class="small-dropdown">
                          <li><a href="index-2.html" target="_blank">Criminal Defence Law</a></li>
                          <li><a href="index5.html" target="_blank">Personal Injury Law</a></li>
                          <li><a href="index3.html" target="_blank">Immigration Law</a></li>
                          <li><a href="index6.html" target="_blank">Corporate Law</a></li>
                          <li><a href="index4.html" target="_blank">Divorce Law</a></li>
                          <li><a href="index2.html" target="_blank">Tax Law</a></li>
                          <li><a href="rtl.html" target="_blank">RTL</a></li>
                        </ul>
                      </li>

                      <li class="main-small-menu"><a href="#">Landing Page <i class="fa-solid fa-angle-right"></i></a>
                        <ul class="small-dropdown">
                          <li><a href="single-index1.html" target="_blank">Criminal Defence Law</a></li>
                          <li><a href="single-index5.html" target="_blank">Personal Injury Law</a></li>
                          <li><a href="single-index3.html" target="_blank">Immigration Law</a></li>
                          <li><a href="single-index6.html" target="_blank">Corporate Law</a></li>
                          <li><a href="single-index4.html" target="_blank">Divorce Law</a></li>
                          <li><a href="single-index2.html" target="_blank">Tax Law</a></li>
                        </ul>
                      </li>
                    </ul> --}}
                  </li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="#">Practice Areas <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="practiceareas1.html">Practice Areas 01</a></li>
                      <li><a href="practiceareas2.html">Practice Areas 02</a></li>
                      <li><a href="practiceareas3.html">Practice Areas 03</a></li>
                      <li><a href="defense-left.html">Practice Areas Left</a></li>
                      <li><a href="defense-right.html">Practice Areas Right</a></li>
                      <li><a href="defense-details.html">Practice Areas Single</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="blog1.html">Blog 01</a></li>
                      <li><a href="blog2.html">Blog 02</a></li>
                      <li><a href="blog3.html">Blog 03</a></li>
                      <li><a href="blog-left.html">Blog left Side</a></li>
                      <li><a href="blog-right.html">Blog Right Side</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Pages <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="casestudy1.html">Case Study 01</a></li>
                      <li><a href="casestudy2.html">Case Study 02</a></li>
                      <li><a href="casestudy3.html">Case Study 03</a></li>
                      <li><a href="case-details.html">Case Study Single</a></li>
                      <li><a href="testimonial1.html">Testimonial 01</a></li>
                      <li><a href="testimonial2.html">Testimonial 02</a></li>
                      <li><a href="testimonial3.html">Testimonial 03</a></li>
                      <li><a href="team.html">Team</a></li>
                      <li><a href="team-details.html">Team Single</a></li>
                      <li><a href="404.html">404</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
              </div>
              <div class="home2-header-buttons d-none d-md-block">
                <div class="button2-all">
                  <a href="contact.html" class="theme-btn7">Hire Now <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->

  <!--===== MOBILE HEADER START=======-->
  <div class="mobile-header mobile-header6 d-block d-lg-none ">
    <div class="container">
      <div class="col-lg-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <a href="index1.html">Hexacure</a>
          </div>
          <div class="mobile-nav-icon">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-sidebar sidebar6 d-block d-lg-none">
    <div class="mobile-logo">
      <a href="index-2.html">HexaCure</a>
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">
      <ul>
        <li class="has-dropdown"><a href="#">Home </a>
          <ul class="sub-menu">
            <li class="has-dropdown has-dropdown1"><a href="index4.html">Multipage</a>
              <ul class="sub-menu">
                <li><a href="index-2.html" target="_blank">Criminal Defence Law</a></li>
                <li><a href="index5.html" target="_blank">Personal Injury Law</a></li>
                <li><a href="index3.html" target="_blank">Immigration Law</a></li>
                <li><a href="index6.html" target="_blank">Corporate Law</a></li>
                <li><a href="index4.html" target="_blank">Divorce Law</a></li>
                <li><a href="index2.html" target="_blank">Tax Law</a></li>
                <li><a href="rtl.html" target="_blank">RTL</a></li>
              </ul>
            </li>
            <li class="has-dropdown has-dropdown1"><a href="index4.html">Landing Page</a>
              <ul class="sub-menu">
                <li><a href="single-index1.html" target="_blank">Criminal Defence Law</a></li>
                <li><a href="single-index5.html" target="_blank">Personal Injury Law</a></li>
                <li><a href="single-index3.html" target="_blank">Immigration Law</a></li>
                <li><a href="single-index6.html" target="_blank">Corporate Law</a></li>
                <li><a href="single-index4.html" target="_blank">Divorce Law</a></li>
                <li><a href="single-index2.html" target="_blank">Tax Law</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="has-dropdown"><a href="about.html">About </a></li>
        <li class="has-dropdown"><a href="#">Practice Areas </a>
          <ul class="sub-menu">
            <li><a href="practiceareas1.html">Practice Areas 01</a></li>
            <li><a href="practiceareas2.html">Practice Areas 02</a></li>
            <li><a href="practiceareas3.html">Practice Areas 03</a></li>
            <li><a href="defense-left.html">Practice Areas Left</a></li>
            <li><a href="defense-right.html">Practice Areas Right</a></li>
            <li><a href="defense-details.html">Practice Areas Single</a></li>
          </ul>
        </li>
        <li class="has-dropdown"><a href="#">Blog </a>
          <ul class="sub-menu">
            <li><a href="blog1.html">Blog 01</a></li>
            <li><a href="blog2.html">Blog 02</a></li>
            <li><a href="blog3.html">Blog 03</a></li>
            <li><a href="blog-left.html">Blog left Side</a></li>
            <li><a href="blog-right.html">Blog Right Side</a></li>
            <li><a href="blog-single.html">Blog Single</a></li>
          </ul>
        </li>
        <li class="has-dropdown"><a href="#">Pages </a>
          <ul class="sub-menu">
            <li><a href="casestudy1.html">Case Study 01</a></li>
            <li><a href="casestudy2.html">Case Study 02</a></li>
            <li><a href="casestudy3.html">Case Study 03</a></li>
            <li><a href="case-details.html">Case Study Single</a></li>
            <li><a href="testimonial1.html">Testimonial 01</a></li>
            <li><a href="testimonial2.html">Testimonial 02</a></li>
            <li><a href="testimonial3.html">Testimonial 03</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="team-details.html">Team Single</a></li>
            <li><a href="404.html">404</a></li>
          </ul>
        </li>
        <li class="has-dropdown"><a href="contact.html">Contact </a></li>
      </ul>
      <a class="theme-btn7" href="contact.html">Get Started <span><i class="fa-solid fa-arrow-right"></i></span></a>
    </div>

    <div class="mobile-menu-social">
      <h3>Contact Info</h3>
      <div class="footer4-contact-info">
        <div class="mobile-menu-icon-box">
          <div class="mobile-menu-icon">
            <i class="fa-solid fa-phone-volume"></i>
          </div>
          <div class="mobile-menu-a">
            <a href="tel:921-888-0022">921-888-0022</a>
          </div>
        </div>

        <div class="mobile-menu-icon-box">
          <div class="mobile-menu-icon">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div class="mobile-menu-a">
            <a href="mailto:example@visafast.com">example@visafast.com</a>
          </div>
        </div>

        <div class="mobile-menu-social">
          <h3>Our Location</h3>

          <div class="mobile-menu-icon-box">
            <div class="mobile-menu-icon">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="mobile-menu-a">
              <a href="mailto:info@example.com">55 East Birchwood Ave.Brooklyn, <br> New York 11201,United States</a>
            </div>
          </div>
        </div>
        <div class="mobile-menu-social">
          <h3>Social Links</h3>
          <div class="mobile-menu-social-icon">
            <ul>
              <li>
                <a data-bs-toggle="tooltip" title="Linked in" href="#"><i class="fa-brands fa-facebook"></i></a>
              </li>
              <li>
                <a data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              </li>
              <li>
                <a data-bs-toggle="tooltip" title="Instagram" href="#"><i class="fa-brands fa-youtube"></i></a>
              </li>
              <li>
                <a data-bs-toggle="tooltip" title="TikTok" href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== MOBILE HEADER ENDS =======-->

  <!--===== HERO AREA STARTS =======-->
  <div class="hero6-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="hero6-header">
            <span class="header" data-aos="fade-right" data-aos-duration="900">Your Trusted Partner in Corporate
              Law</span>
            <div class="space16"></div>
            <h1 data-aos="fade-right" data-aos-duration="1000">Champions of integrity, defenders against injustice .</h1>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="1100">Strategic legal advice for today's business challenges and
              tomorrow's opportunities.</p>
            <div class="space24"></div>
            <div data-aos="fade-right" data-aos-duration="1200">
              <a href="#" class="theme-btn7">Schedule a Consultation <span><i
                    class="fa-solid fa-arrow-right"></i></span></a>
            </div>
            <div class="space32"></div>
            <div class="counter6-widget-area">
              <div class="counter6-box" data-aos="zoom-out" data-aos-duration="700">
                <h2><span class="counter">90</span>k</h2>
                <p>Happy Client</p>
              </div>
              <div class="counter6-box" data-aos="zoom-out" data-aos-duration="800">
                <h2><span class="counter">250</span>+</h2>
                <p>Case Solved</p>
              </div>
              <div class="counter6-box counter6" data-aos="zoom-out" data-aos-duration="900">
                <h2><span class="counter">85</span>+</h2>
                <p>Work Together</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-8">
          <div class="hero6-img" data-aos="zoom-out" data-aos-duration="1000">
            <img src="assets/img/image/hero6-img.png" alt="">
            <img src="assets/img/shapes/vector.png" alt="" class="vector keyframe5">
          </div>
        </div>
        <div class="col-lg-2 col-md-4">
          <div class="hero-side-area" data-aos="fade-left" data-aos-duration="800">
            <div class="counter-area">
              <img src="assets/img/image/vector2.png" alt="">
              <div class="space24"></div>
              <h2><span class="counter">1.5</span>M</h2>
              <div class="space16"></div>
              <p>Satisfied Client</p>
            </div>
          </div>
          <div class="space24"></div>
          <div class="hero-side-area" data-aos="fade-left" data-aos-duration="1000">
            <div class="counter-area">
              <div class="mask-img">
                <img src="assets/img/icons/mask.svg" alt="">
              </div>
              <div class="space24"></div>
              <h2><span class="counter">98</span>%</h2>
              <div class="space16"></div>
              <p>Bussiness Growing</p>
            </div>
          </div>
          <div class="space20"></div>
          <p class="pera" data-aos="fade-left" data-aos-duration="1200">“Your Ally in Corporate Law — Trust, Expertise,
            Results.”</p>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->


  <!--===== ABOUT AREA STARTS =======-->
  <div class="about6-section-area sp3">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about6-images">
            <img src="assets/img/image/about6-img1.png" alt="" data-aos="zoom-out" data-aos-duration="800">
            <div class="space30"></div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="img1" data-aos="zoom-out" data-aos-duration="900">
                  <img src="assets/img/image/about6-img2.png" alt="">
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="img2" data-aos="zoom-out" data-aos-duration="1000">
                  <img src="assets/img/image/about6-img3.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about6-content-area">
            <span class="header" data-aos="fade-up" data-aos-duration="600">About Us</span>
            <div class="space16"></div>
            <h2 data-aos="fade-up" data-aos-duration="700">Empowering Business Success Unveiling Justlaw</h2>
            <div class="space16"></div>
            <p data-aos="fade-up" data-aos-duration="800">we are more than just legal professionals; we are dedicated
              advocates for your business success. With a commitment to excellence, integrity, and innovation, we
              navigate the complex landscape of corporate law to empower our clients and drive their ventures forward.
            </p>
            <div class="space24"></div>
            <h4 data-aos="fade-up" data-aos-duration="900">Expertise: </h4>
            <div class="space16"></div>
            <p data-aos="fade-up" data-aos-duration="1000">Our team of seasoned corporate lawyers brings a wealth of
              experience to the table. We specialize in [key areas such as contract law.</p>
            <div class="space24"></div>
            <h4 data-aos="fade-up" data-aos-duration="1100">Client-Centric Approach:</h4>
            <div class="space16"></div>
            <p data-aos="fade-up" data-aos-duration="1200">Your success is our priority. We take the time to understand
              your unique challenges, goals, and vision crafting legal solutions that align with your business
              objectives.</p>
            <div class="space32"></div>
            <div data-aos="fade-up" data-aos-duration="1300">
              <a href="about.html" class="theme-btn7">About Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== ABOUT AREA ENDS =======-->

  <!--===== SERVICE AREA STARTS =======-->
  <div class="service6-section-area sp6">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="service6-header">
            <div>
              <span class="header" data-aos="fade-up" data-aos-duration="800">Services</span>
              <div class="space16"></div>
              <h2 data-aos="fade-up" data-aos-duration="1000">Elevate Your Business: Our <br class="d-lg-block d-none">
                Comprehensive Corporate <br class="d-lg-block d-none"> Legal Services</h2>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
              <a href="practiceareas1.html" class="theme-btn7">View All Services <span><i
                    class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="space60"></div>
        <div class="row">
          <div class="col-lg-3 col-md-6" data-aos="fade-left" data-aos-duration="800">
            <div class="service6-boxarea">
              <div class="icons">
                <img src="assets/img/icons/service6-icon1.svg" alt="">
              </div>
              <div class="space16"></div>
              <div class="box-content">
                <a href="defense-details.html">Contact Law</a>
                <div class="space16"></div>
                <p>Navigating the complexities of contracts is essential for any business. Our team specializes in
                  drafting, reviewing, and negotiating contracts law.</p>
                <div class="space24"></div>
                <a href="defense-details.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-left" data-aos-duration="900">
            <div class="service6-boxarea">
              <div class="icons">
                <img src="assets/img/icons/service6-icon2.svg" alt="">
              </div>
              <div class="space16"></div>
              <div class="box-content">
                <a href="defense-details.html">Employment Law</a>
                <div class="space16"></div>
                <p>Navigating the complexities of contracts is essential for any business. Our team specializes in
                  drafting, reviewing, and negotiating contracts law.</p>
                <div class="space24"></div>
                <a href="defense-details.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-left" data-aos-duration="1000">
            <div class="service6-boxarea">
              <div class="icons">
                <img src="assets/img/icons/service6-icon3.svg" alt="">
              </div>
              <div class="space16"></div>
              <div class="box-content">
                <a href="defense-details.html">Business Litigation</a>
                <div class="space16"></div>
                <p>When disputes arise, our skilled litigators are here to protect your interests. We handle business
                  litigation cases with a focus on achieving favorable </p>
                <div class="space24"></div>
                <a href="defense-details.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-left" data-aos-duration="1100">
            <div class="service6-boxarea">
              <div class="icons">
                <img src="assets/img/icons/service6-icon4.svg" alt="">
              </div>
              <div class="space16"></div>
              <div class="box-content">
                <a href="defense-details.html">Mergers & Acquisitions</a>
                <div class="space16"></div>
                <p>Facilitating mergers and acquisitions requires a delicate balance of legal expertise and business
                  acumen. Our team guides you through every stage</p>
                <div class="space24"></div>
                <a href="defense-details.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-duration="800">
            <div class="service6-boxarea">
              <div class="icons">
                <img src="assets/img/icons/service6-icon5.svg" alt="">
              </div>
              <div class="space16"></div>
              <div class="box-content">
                <a href="defense-details.html">Corporate Governance</a>
                <div class="space16"></div>
                <p>Ensure your business operates ethically and efficiently with our corporate governance services. We
                  provide guidance on compliance, board matters,</p>
                <div class="space24"></div>
                <a href="defense-details.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-duration="900">
            <div class="service6-boxarea">
              <div class="icons">
                <img src="assets/img/icons/service6-icon6.svg" alt="">
              </div>
              <div class="space16"></div>
              <div class="box-content">
                <a href="defense-details.html">Intellectual Property</a>
                <div class="space16"></div>
                <p>Protecting your intellectual property is paramount. We assist in securing trademarks, patents, and
                  copyrights, and offer legal counsel to safe.</p>
                <div class="space24"></div>
                <a href="defense-details.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-duration="1000">
            <div class="service6-boxarea">
              <div class="icons">
                <img src="assets/img/icons/service6-icon7.svg" alt="">
              </div>
              <div class="space16"></div>
              <div class="box-content">
                <a href="defense-details.html">Regulatory Compliance</a>
                <div class="space16"></div>
                <p>Staying compliant with ever-evolving regulations is critical. Our team helps businesses navigate
                  complex regulatory landscapes, providing risks</p>
                <div class="space24"></div>
                <a href="defense-details.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-duration="1100">
            <div class="service6-boxarea">
              <div class="icons">
                <img src="assets/img/icons/service6-icon8.svg" alt="">
              </div>
              <div class="space16"></div>
              <div class="box-content">
                <a href="defense-details.html">Real Estate Transaction</a>
                <div class="space16"></div>
                <p>Our expertise extends to real estate matters, including property acquisitions, leasing agreements,
                  and zoning issues. We ensure your real-estate</p>
                <div class="space24"></div>
                <a href="defense-details.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== SERVICE AREA ENDS =======-->

  <!--===== CHOOSE AREA STARTS =======-->
  <div class="choose6-section-area sp3">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="choose6-header">
            <span class="header" data-aos="fade-right" data-aos-duration="800">Why Choose Us</span>
            <div class="space16"></div>
            <h2 data-aos="fade-right" data-aos-duration="900">Why Choose Justlaw for Corporate Legal Services?</h2>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="1000">In a rapidly evolving business environment, we stand at
              the intersection of legal knowledge and innovative thinking. We anticipate legal trends, offering
              proactive guidance to keep your business ahead of the curve.</p>
            <div class="space32"></div>
            <div data-aos="fade-right" data-aos-duration="1200">
              <a href="casestudy1.html" class="theme-btn7">Experience Legal Excellence <span><i
                    class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="choose-images">
            <div class="img1 text-end" data-aos="zoom-out" data-aos-duration="800">
              <img src="assets/img/image/choose6-img2.png" alt="">
            </div>
            <div class="img2" data-aos="zoom-out" data-aos-duration="1000">
              <img src="assets/img/image/choose6-img1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CHOOSE AREA ENDS =======-->

  <!--===== CASE AREA STARTS =======-->
  <div class="case-study6-section-area sp3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="casestudy6-header">
            <div>
              <span class="header" data-aos="fade-up" data-aos-duration="800">Case Study</span>
              <div class="space16"></div>
              <h2 data-aos="fade-up" data-aos-duration="1000">Delivering Legal Excellence in <br
                  class="d-lg-block d-none"> Corporate Matters</h2>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
              <a href="casestudy1.html" class="theme-btn7">View All Case Study <span><i
                    class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
          <div class="space60"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="case-study-carousel owl-carousel">
            <div class="case-study-box">
              <div class="img1">
                <img src="assets/img/image/case6-img1.png" alt="">
              </div>
              <div class="case-content">
                <div class="corporate">
                  <p>Corporate</p>
                  <div class="space8"></div>
                  <a href="case-details.html">Legal Challenge</a>
                </div>
                <div class="div">
                  <a href="case-details.html"><span><i class="fa-solid fa-plus"></i></span></a>
                </div>
              </div>
            </div>

            <div class="case-study-box">
              <div class="img1">
                <img src="assets/img/image/case-img2.png" alt="">
              </div>
              <div class="case-content">
                <div class="corporate">
                  <p>Corporate</p>
                  <div class="space8"></div>
                  <a href="case-details.html">Legal Challenge</a>
                </div>
                <div class="div">
                  <a href="case-details.html"><span><i class="fa-solid fa-plus"></i></span></a>
                </div>
              </div>
            </div>

            <div class="case-study-box">
              <div class="img1">
                <img src="assets/img/image/case6-img3.png" alt="">
              </div>
              <div class="case-content">
                <div class="corporate">
                  <p>Corporate</p>
                  <div class="space8"></div>
                  <a href="case-details.html">Legal Challenge</a>
                </div>
                <div class="div">
                  <a href="case-details.html"><span><i class="fa-solid fa-plus"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CASE AREA ENDS =======-->

  <!--===== TESTIMONIAL AREA STARTS =======-->
  <div class="testimonial6-section-area sp3">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="testimonial6-header">
            <span class="header" data-aos="fade-right" data-aos-duration="800">Testimonials</span>
            <div class="space16"></div>
            <h2 data-aos="fade-right" data-aos-duration="900">Trusted by Businesses What Clients Say About Justlaw</h2>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="1000">Testimonials are powerful tools to build trust and
              credibility for a corporate lawyer. Here's an example of content for a testimonial section on a lawyer's
              landing page:</p>
            <div class="space32"></div>
            <div data-aos="fade-right" data-aos-duration="1200">
              <a href="testimonial1.html" class="theme-btn7">Legal Excellence <span><i
                    class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="testimonial6-carousel-area owl-carousel">
            <div class="testimonial6-boxarea">
              <div class="img1">
                <img src="assets/img/image/testimonial6-img1.png" alt="">
              </div>
              <div class="space32"></div>
              <div class="content">
                <p>We consider hexacure not just as our legal counsel but as a trusted partner in our business journey.
                  Their attention to detail, responsiveness, and ability to simplify complex legal matters have been
                  invaluable. truly understands the intersection of law and business.</p>
                <div class="space32"></div>
                <ul>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <div class="space16"></div>
                <a href="team-details.html" class="name">Jane Doe</a>
                <a href="#">21 April 2024</a>
              </div>
            </div>
            <div class="testimonial6-boxarea">
              <div class="img1">
                <img src="assets/img/image/testimonial6-img2.png" alt="">
              </div>
              <div class="space32"></div>
              <div class="content">
                <p>We consider lawflex not just as our legal counsel but as a trusted partner in our business journey.
                  Their attention to detail, responsiveness, and ability to simplify complex legal matters have been
                  invaluable. truly understands the intersection of law and business.</p>
                <div class="space32"></div>
                <ul>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <div class="space16"></div>
                <a href="team-details.html" class="name">Mark Philips</a>
                <a href="#">21 April 2024</a>
              </div>
            </div>

            <div class="testimonial6-boxarea">
              <div class="img1">
                <img src="assets/img/image/testimonial6-img1.png" alt="">
              </div>
              <div class="space32"></div>
              <div class="content">
                <p>We consider lawflex not just as our legal counsel but as a trusted partner in our business journey.
                  Their attention to detail, responsiveness, and ability to simplify complex legal matters have been
                  invaluable. truly understands the intersection of law and business.</p>
                <div class="space32"></div>
                <ul>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <div class="space16"></div>
                <a href="team-details.html" class="name">Jane Doe</a>
                <a href="#">21 April 2024</a>
              </div>
            </div>
            <div class="testimonial6-boxarea">
              <div class="img1">
                <img src="assets/img/image/testimonial6-img2.png" alt="">
              </div>
              <div class="space32"></div>
              <div class="content">
                <p>We consider lawflex not just as our legal counsel but as a trusted partner in our business journey.
                  Their attention to detail, responsiveness, and ability to simplify complex legal matters have been
                  invaluable. truly understands the intersection of law and business.</p>
                <div class="space32"></div>
                <ul>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <div class="space16"></div>
                <a href="team-details.html" class="name">Mark Philips</a>
                <a href="#">21 April 2024</a>
              </div>
            </div>

            <div class="testimonial6-boxarea">
              <div class="img1">
                <img src="assets/img/image/testimonial6-img1.png" alt="">
              </div>
              <div class="space32"></div>
              <div class="content">
                <p>We consider lawflex not just as our legal counsel but as a trusted partner in our business journey.
                  Their attention to detail, responsiveness, and ability to simplify complex legal matters have been
                  invaluable. truly understands the intersection of law and business.</p>
                <div class="space32"></div>
                <ul>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <div class="space16"></div>
                <a href="team-details.html" class="name">Jane Doe</a>
                <a href="#">21 April 2024</a>
              </div>
            </div>
            <div class="testimonial6-boxarea">
              <div class="img1">
                <img src="assets/img/image/testimonial6-img2.png" alt="">
              </div>
              <div class="space32"></div>
              <div class="content">
                <p>We consider lawflex not just as our legal counsel but as a trusted partner in our business journey.
                  Their attention to detail, responsiveness, and ability to simplify complex legal matters have been
                  invaluable. truly understands the intersection of law and business.</p>
                <div class="space32"></div>
                <ul>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <div class="space16"></div>
                <a href="team-details.html" class="name">Mark Philips</a>
                <a href="#">21 April 2024</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== TESTIMONIAL AREA ENDS =======-->

  <!--===== BLOG AREA STARTS =======-->
  <div class="blog6-section-area sp6">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="blog6-haeder-area">
            <div>
              <span class="header" data-aos="fade-up" data-aos-duration="800">Blog & News</span>
              <div class="space16"></div>
              <h2 data-aos="fade-up" data-aos-duration="900">Navigating Corporate Governance: <br
                  class="d-lg-block d-none"> A Guide for Business Leaders</h2>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
              <a href="blog1.html" class="theme-btn7">View All Blog <span><i
                    class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="space60"></div>
      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
          <div class="blog6-box-area">
            <div class="blog-img">
              <img src="assets/img/image/blog6-img1.png" alt="">
            </div>
            <div class="space16"></div>
            <div class="blog-content">
              <a href="blog-single.html">The Pillars of Corporate Governance: Building a Strong Foundation</a>
              <div class="space16"></div>
              <a href="blog-single.html" class="readmore">20 August 2024 - 9:44 am </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
          <div class="blog6-box-area">
            <div class="blog-img">
              <img src="assets/img/image/blog6-img2.png" alt="">
            </div>
            <div class="space16"></div>
            <div class="blog-content">
              <a href="blog-single.html">Behind the Boardroom: Unpacking the Role of Directors</a>
              <div class="space16"></div>
              <a href="blog-single.html" class="readmore">21 August 2024 - 9:44 am </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
          <div class="blog6-box-area">
            <div class="blog-img">
              <img src="assets/img/image/blog6-img3.png" alt="">
            </div>
            <div class="space16"></div>
            <div class="blog-content">
              <a href="blog-single.html">Compliance Chronicles: Adapting to Changing Legal Landscapes</a>
              <div class="space16"></div>
              <a href="blog-single.html" class="readmore">25 August 2024 - 9:44 am </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== BLOG AREA ENDS =======-->

  <!--===== CTA AREA STARTS =======-->
  <div class="cta6-section-area">
    <img src="assets/img/shapes/vector2.png" alt="" class="vector2 keyframe5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="cta6-header text-center">
            <h2 data-aos="fade-up" data-aos-duration="800">"Ready to Strengthen Your Corporate Governance? </h2>
            <div class="space16"></div>
            <p data-aos="fade-up" data-aos-duration="1000">This CTA title invites readers to take action & seek the
              assistance corporate lawyer.</p>
            <div class="space32"></div>
            <form data-aos="fade-up" data-aos-duration="1200">
              <input type="text" placeholder="Enter Your Email">
              <button type="submit" class="theme-btn7">Schedule a Consultation <span><i
                    class="fa-solid fa-arrow-right"></i></span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <img src="assets/img/shapes/vector2.png" alt="" class="vector3 keyframe5">
  </div>
  <!--===== CTA AREA ENDS =======-->

  <!--===== FOOTER AREA STARTS =======-->
  <div class="footer6">
    <div class="container">
      <div class="row">
        <div class="col-lg col-md-6">
          <div class="logo">
            {{-- <a href="index-2.html"><img src="assets/img/logo/header-logo1.svg" alt=""></a> --}}
            <h2 class="text-primary">HexaCure</h2>
          </div>
          <div class="border"></div>
          <p class="footer-prea">3520 E Bell Rd Phoenix Arkansas 85032 West Zone United States, NY 10018 </p>
          <div class="space24"></div>
          <ul class="social">
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg col-md-6">
          <div class="footer-menu-list left">
            <h3>Links</h3>
            <div class="space24"></div>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="practiceareas1.html">Practice Area</a></li>
              <li><a href="casestudy1.html">Case Study</a></li>
              <li><a href="blog1.html">Latest News</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg col-md-6">
          <div class="footer-menu-list left p-0">
            <h3>Other Links</h3>
            <div class="space24"></div>
            <ul>
              <li><a href="index-2.html">Criminal Defense</a></li>
              <li><a href="index2.html">Tax Law</a></li>
              <li><a href="index3.html">Immigration Law</a></li>
              <li><a href="index4.html">Divorce Lawyer</a></li>
              <li><a href="index6.html">Corporate Lawyer</a></li>
            </ul>
          </div>

        </div>

        <div class="col-lg col-md-6">
          <div class="footer-menu-list">
            <h3>Newsletter</h3>
            <div class="space24"></div>
            <p class="footer-pera">Subscribe us & receive our latest news & articles</p>
            <div class="space24"></div>
            <div class="footer-input ">
              <div class="footer-input-area _relative">
                <input type="email" placeholder="Email Address">
                <button type="submit"><img src="assets/img/icons/footer-button.svg" alt=""></button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="footer-bottom6">
    <div class="container">
      <div class="border1"></div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <p class="copyright">Copyright @2024 Hexacure.All Rights Reserved</p>
        </div>
        <div class="col-lg-6">
          <div class="treams">
            <a href="#">Terms & Conditions</a>
            <a href="#" class="divaider"></a>
            <a href="#">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--=====JS=======--> <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modal-video.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/mobile-menu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/mobile-meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
