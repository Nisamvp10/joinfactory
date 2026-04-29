<?= view('frontend/inc/header') ?>


    <!-- Hero Section Start -->
    <div class="hero hero-bg-image hero-slider-layout bg-section dark-section">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Hero Slide Start -->
            
              <?php
                if($banner) {
                    foreach($banner as $banKey) {
                    ?>
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="<?= validImg($banKey->image) ?>" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-1 text-left">
                                            <!-- Hero Content Start -->
                                            <div class="hero-content  ">
                                                <!-- Section Title Start -->
                                                <div class="section-title">
                                                    <h3 class="wow fadeInUp">Welcome to Our clinic</h3>
                                                    <h1 class="text-anime-style-3" data-cursor="-opaque"><?= $banKey->title ?></h1>
                                                    <p class="wow fadeInUp" data-wow-delay="0.2s"><?= $banKey->subtitle ?></p>
                                                </div>
                                                <!-- Section Title End -->
                        
                                                <!-- Hero Content Body Start -->
                                                <div class="hero-body sktext  wow fadeInUp" data-wow-delay="0.4s">
                                                    <!-- Hero Button Start -->
                                                    <div class="hero-btn">
                                                        <a href="#" class="btn-default btn-highlighted">Second Opinion</a>                                
                                                    </div>
                                                    <!-- Hero Button End -->
                        
                                                    <!-- Video Play Button Start -->
                                                    <!-- <div class="video-play-button">
                                                        <p>Watch Video</p>
                                                        <a href="#" class="popup-video" data-cursor-text="Play">
                                                            <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div> -->
                                                    <!-- Video Play Button End -->
                                                </div>
                                                <!-- Hero Content Body End -->
                                            </div>
                                            <!-- Hero Content End -->
                                        </div>
                                    </div>
                                    
                                    
                            
                        </div>
                    </div>
                </div>
                <?php
                }
            }?>
                <!-- Hero Slide End -->
            </div>
            <div class="hero-pagination"></div>
        </div>        
    </div>
    <!-- Hero Section End -->
  
        
  <!-- <section class="main-section">
        <div class="container">
                <div class="inner-section" style="background-color: #fff;">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Welcome to Our clinic</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">The Leading Orthopedic & Joint
                                Replacement Specialist
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- About Us Section Start -->
    <div class="main-section ">
        <div class="container">
            <div class="inner-section align-items-center p-lg-5 p-md-2 bg-white">
                <div class="row d-flex align-items-center">
                <div class="col-lg-5">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal " style="position:relative">
                                <img src="<?= base_url('public/assets/template/images/abt-bg.webp') ?>" alt="">
                                <img class="coverImg" src="<?= base_url('public/assets/template/images/abt-logo.png') ?>" alt="">
                            </figure>

                            <!-- Experience Circle Start 
                            <div class="company-experience-circle">
                                <img src="<?= base_url('public/assets/template/') ?>images/experience-circle.png" alt="">
                            </div>
                             -->      
                        </div>
                        <!-- About Image 1 End -->

                        <!-- About Image 2 Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="<?= base_url('public/assets/template/images/about-img-2.webp') ?>" alt="">
                            </figure>
                        </div>
                        <!-- About Image 2 End -->                  
                    </div>
                    <!-- About Us Images End -->
                </div>

                <div class="col-lg-7">
                    <!-- Hero Content Box Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Dr. Ram Sudhan Subramaniyan</h3> 
                            <h2 class="text-anime-style-3" data-cursor="-opaque">SPECIALIST JOINTS &  KEY HOLE SURGEON</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Associate Prof. Dr. Ram Sudhan Subramaniyan is a specialist in Sports surgeries and joint reconstruction with a special interest in "joint preservation" of the Hip, shoulder, and knee. He is a pioneer in Hip arthroscopy and preservation in Kerala. He is a notable alumnus of Annamalai University and graduated with a medical degree from Rajah Muthiah Medical College and Hospital (now, Government Medical College, Cuddalore, state of Tamil Nadu), class of 2004. He pursued his postgraduation in orthopaedic surgery from Government Medical College, Kozhikode under Kerala University of Health Sciences (KUHS) and DNB Orthopaedics in Medical Trust Hospital, Ernakulam (State of Kerala) from the National Board.
                            </p>
                        </div>
                        <!-- Section Title End -->

                    
                        <!-- About Us Body Start -->
                        <div class="about-us-bodysk wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Contact Box Start
                            <div class="about-contact-box">
                                <div class="icon-box">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="about-contact-box-content">
                                    <p>Need Help!</p>
                                    <h3><a href="#">(+91) <?= getappdata('phone') ?></a></h3>
                                </div>
                            </div>
                            About Contact Box End -->

                            <!-- About Contact Button Start -->
                            <div class="about-us-btn">
                                <a href="#" class="btn-default">more about</a>
                            </div>
                            <!-- About Contact Button End -->
                        </div>
                        <!-- About Us Body End -->
                    </div>
                    <!-- Hero Content Box End -->
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp"> Explore our Specialities and Services </h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Specialities and Services</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            
          <?php
$indx = 0;

if (!empty(services())) {
    foreach (services() as $service) {

        // OPEN ROW
        if ($indx % 5 == 0) {
            echo '<div class="row row-cols-1 row-cols-md-6 row-cols-lg-3  row-cols-xl-3 row-cols-xxl-3  justify-content-center">';
        }
        ?>

        <div class="col">
            <!-- Service Item Start -->
            <div class="service-item service-itemdd  wow fadeInUp">
                <div class="service-content">
                    <div class="service-content-title">
                        <h2>
                            <a href="<?=base_url('services/'.$service['slug']);?>"><?= esc($service['category']); ?></a>
                        </h2>
                        <a href="<?=base_url('services/'.$service['slug'])?>" class="btn-default skbb"></a>
                    </div>
                </div>

                <div class="service-image">
                    <a href="<?=base_url('services/'.$service['slug'])?>" data-cursor-text="View">
                        <figure class="image-anime">
                            <img src="<?= validImg($service['image']) ?>" alt="">
                        </figure>
                    </a>
                </div>
            </div>
            <!-- Service Item End -->
        </div>

        <?php

        // CLOSE ROW
        if ($indx % 5 == 4) {
            echo '</div>';
        }

        $indx++;
    }

    // CLOSE LAST OPEN ROW IF NEEDED
    if ($indx % 5 != 0) {
        echo '</div>';
    }
}
?>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="1.2s">
                        <p><span>Free</span>Let's make something great work together. <a href="#">View More Services</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- What We Do section Start -->
    <div class="main-section">
        <div class="container">
            <div class="inner-section align-items-center p-lg-5 p-md-2 bg-white rounded-section p-2">
                <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- What We Image Start -->
                    <div class="what-we-image-1">
                        <img src="<?= base_url('public/assets/template/') ?>images/what-we-image-1.png" alt="">
                    </div>
                    <!-- What We Image End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- What We Content Start -->
                    <div class="what-we-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"> Our Location & Accessibility  </h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">  
                                Accessible Care across locations 
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Dr.Ram Sudhan Subramaniyan expert orthopaedic care easily accessible to patients from various regions. Whether you're nearby, from another state, or traveling internationally, personalized support and advanced treatment options are available to ensure your journey to recovery is smooth, comfortable, and effective.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Experience List Start -->
                        <div class="about-experience-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>
                                    International patients </li>
                                <li>Other state patients</li>
                                <li>Next city patients</li>
                            </ul>
                        </div>
                        <!-- About Experience List End -->

                      <!-- What We Button Start -->
                        <div class="what-we-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="#" class="btn-default">learn more</a>
                        </div>
                        <!-- What We Button End -->
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- What We Image Start -->
                    <div class="what-we-image-2">
                        <figure class="image-anime">
                            <img src="<?= base_url('public/assets/template/') ?>images/what-we-image-2.jpg" alt="">
                        </figure>

                        <!-- Experirnce Box Start -->
                        <div class="experirnce-box">
                            <p>Second<br> Opinion</p>
                        </div>
                        <!-- Experirnce Box End -->
                    </div>
                    <!-- What We Image Start -->                   
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- What We Do section End -->


    <!-- Case Study Section Start -->
    <div class="case-study bg-section">
        <div class="container">
            <div class="row p-lg-5 p-md-2 flex align-items-center">
                <div class="col-lg-4">
                    <!-- Case Study Content Start -->
                    <div class="case-study-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Patient Resources & Information  </h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">   Moments of Healing & Recovery!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Discover inspiring stories of real transformations at our clinic, where individuals have regained confidence through personalized plastic surgery and beauty treatments.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Case Study Button Start -->
                        <div class="case-study-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="#" class="btn-default">All Case Study's</a>
                        </div>
                        <!-- Case Study Button End -->
                    </div>
                    <!-- Case Study Content End -->
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="<?= base_url('public/assets/template/') ?>images/case-study-image-1.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Case Study Image End -->
                        
                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><a href="#">Latest Treatment</a></h3>
                                    </div>
                                    <!-- Case Study Content End -->
                        
                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <a href="#" class="readmore-btn"><img src="<?= base_url('public/assets/template/') ?>images/arrow-white.svg" alt=""></a>
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->                 
                            </div>
                            <!-- Case Study Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="<?= base_url('public/assets/template/') ?>images/case-study-image-2.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Case Study Image End -->
                        
                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><a href="#">Latest Treatment</a></h3>
                                    </div>
                                    <!-- Case Study Content End -->
                        
                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <a href="#" class="readmore-btn"><img src="<?= base_url('public/assets/template/') ?>images/arrow-white.svg" alt=""></a>
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->                 
                            </div>
                            <!-- Case Study Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="<?= base_url('public/assets/template/') ?>images/case-study-image-3.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Case Study Image End -->
                        
                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><a href="#">Latest Treatment</a></h3>
                                    </div>
                                    <!-- Case Study Content End -->
                        
                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <a href="#" class="readmore-btn"><img src="<?= base_url('public/assets/template/') ?>images/arrow-white.svg" alt=""></a>
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->                 
                            </div>
                            <!-- Case Study Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="<?= base_url('public/assets/template/') ?>images/case-study-image-4.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Case Study Image End -->
                        
                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><a href="#">Latest Treatment</a></h3>
                                    </div>
                                    <!-- Case Study Content End -->
                        
                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <a href="#" class="readmore-btn"><img src="<?= base_url('public/assets/template/') ?>images/arrow-white.svg" alt=""></a>
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->                 
                            </div>
                            <!-- Case Study Item End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study Section End -->

   

  

    <!-- Our Testimonials Section Start -->
    <div class="main-section">
        <div class="container">
            <div class="inner-section align-items-center bg-primary p-lg-5 p-md-2 rounded-section our-testimonials dark-section">
                <div class="row">
                <div class="col-lg-6">
                    <div class="our-testimonial-image">
                        <figure class="image-anime reveal">
                            <img src="<?= base_url('public/assets/template/') ?>images/testimonial-image.jpg" alt="">
                        </figure>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Our Testimonial Content Start -->
                    <div class="our-testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"> testimonials  </h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque"> Life-Changing results from our clients</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">"The expertise and care I received here were outstanding. I couldn't be happier with my results Thanks to the team, I feel more confident than ever before. Highly recommend From consultation to aftercare, everything was perfect. My transformation exceeded my expectations.!"</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Content Button Start -->
                        <div class="testimonial-author-details wow fadeInUp" data-wow-delay="0.4s">
                            <h3>Kristin Watson</h3>
                            <p>Co. founder</p>
                        </div>
                        <!-- Testimonial Content Button End -->
                    </div>
                    <!-- Our Testimonial Content End -->
                </div>

                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                 <?php
                                 if($feedback) {
                                    foreach($feedback as $testimonial) {
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-item-content">
                                                <p><?= $testimonial->note ?></p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="<?=validImg($testimonial->profile)?>" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3><?= $testimonial->username ?></h3>
                                                    <p><?= $testimonial->designation ?></p>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <?php
                                    }
                                 }?>
                                

                                
                                <!-- Testimonial Slide End -->
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Our Appointment Section Start -->
    <div class="our-results main-section p-0">
        <div class="container">
            <div class="inner-section bg-sec bg-secondary p-lg-5 p-md-2 rounded-section ">

          <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp"> Our Gallery </h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"> See the Difference</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="testimonial-slider gallery-items page-gallery-box">
                <div class="swiper">
                    <div class="swiper-wrapper" data-cursor-text="Drag">
                        <!-- Testimonial Slide Start -->
                        <div class="swiper-slide">
                            <div class="photo-gallery wow fadeInUp">
                                <a href="https://jointfactory.org/2026/public/assets/template/images/case-study-image-2.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="https://jointfactory.org/2026/public/assets/template/images/case-study-image-2.jpg" alt="">
                            </figure>
                        </a>
                    </div> 
            </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                     <div class="photo-gallery wow fadeInUp">
                        <a href="https://jointfactory.org/2026/public/assets/template/images/case-study-image-1.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="https://jointfactory.org/2026/public/assets/template/images/case-study-image-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                 <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                     <div class="photo-gallery wow fadeInUp">
                        <a href="https://jointfactory.org/2026/public/assets/template/images/case-study-image-3.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="https://jointfactory.org/2026/public/assets/template/images/case-study-image-3.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                                  <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                     <div class="photo-gallery wow fadeInUp">
                        <a href="https://jointfactory.org/2026/public/assets/template/images/case-study-image-1.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="https://jointfactory.org/2026/public/assets/template/images/case-study-image-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                 <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                     <div class="photo-gallery wow fadeInUp">
                        <a href="https://jointfactory.org/2026/public/assets/template/images/case-study-image-1.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="https://jointfactory.org/2026/public/assets/template/images/case-study-image-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                 <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                     <div class="photo-gallery wow fadeInUp">
                        <a href="https://jointfactory.org/2026/public/assets/template/images/case-study-image-1.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="https://jointfactory.org/2026/public/assets/template/images/case-study-image-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                               
                           
                            </div>
                        </div>
                    </div>

            
            
            </div>
        </div>
    </div>
    <!-- Our Appointment Section End -->

    <!-- Our Result Section Start -->
     <section class="main-section counter-section">
            <div class="container">
                <div class="rounded-section bg-white inner-section">
                    <div class="col-lg-12">
                    <!-- Facts Counter Box Start -->
                    <div class="facts-counter-box">
                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="<?= base_url('public/assets/template/') ?>images/icon-facts-counter-1.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">25</span>+</h3>
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="<?= base_url('public/assets/template/') ?>images/icon-facts-counter-2.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">150</span>K+</h3>
                                <p>Satisfied clients</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="<?= base_url('public/assets/template/') ?>images/icon-facts-counter-3.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">30</span>+</h3>
                                <p>Countries Reached</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="<?= base_url('public/assets/template/') ?>images/icon-facts-counter-4.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">2</span>K+</h3>
                                <p>Classes Conducted</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->
                    </div>
                    <!-- Facts Counter Box End -->
                </div>
        </div>
    </div>
    </section>
    <!-- Our Result Section End -->

    <!-- Footer Main Start -->
    
    <!-- Footer Main End -->

    <!-- Modal -->
<div class="modal fade" id="pageLoadModal" tabindex="-1" aria-labelledby="pageLoadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pageLoadModalLabel">Disclaimer
        </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body  " style="padding-left:30px;padding-right:30px">
<p>
    The exclusive purpose of the site and the information provided by Dr. Ram Sudhan Subramaniyan is a resolute to educate people with a principal idea and to provide accessibility and convenience round the clock globally to eliminate apprehension and queries associated with the treatment procedures in this field and should never be considered as the doctor’s consultation per se.



</p>

<p>
    Please remember that any direction inferred through the site without an in-person consultation to the doctor should be contemplated as educational service only and is no way superior than an advice by a healthcare professional through a direct visit and is not intended to substitute any professional advice.




</p>

<p>
    Many scripts or forms on specific sports injury problems and postoperative rehabilitation are available for download or in read-only format which are strictly advised to be followed only on the doctor’s recommendation and never independently.





</p>


<p>
    The website is created and maintained by Extrinsic private organizations and thereby we affirm that we do not control or guarantee the completeness, timeliness, accuracy or relevance of any particular information provided, yet the information provided on the website has been verified to the best of our abilities.





</p>


</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
  
<?= view('frontend/inc/footerLink') ?>
 